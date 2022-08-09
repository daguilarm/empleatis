<?php

declare(strict_types=1);

namespace App\Http\Collectors;

class Ranking
{
    private string $category_r = '';

    private string $title_r = '';

    private string $description_r = '';

    private string $url_r = '';

    private string $keywords_r = '';

    private float $salary_year_r = 0.00;

    private float $salary_max_r = 0.00;

    private float $salary_min_r = 0.00;

    private int $workday_r = 0;

    private int $score = 0;

    public function ranking(): self
    {
        return $this;
    }

    /**
     * Add the category value
     */
    public function category_r(string $category): self
    {
        $this->category_r = $category;

        return $this;
    }

    /**
     * Add the title value
     */
    public function title_r(?string $title): self
    {
        if ($title) {
            $this->title_r = $title;
        }

        return $this;
    }

    /**
     * Add the description value
     */
    public function description_r(string $description): self
    {
        if ($description) {
            $this->description_r = $description;
        }

        return $this;
    }

    /**
     * Add the url value
     */
    public function url_r(string $url): self
    {
        if ($url) {
            $this->url_r = $url;
        }

        return $this;
    }

    /**
     * Add the keywords value
     */
    public function keywords_r(string $keywords): self
    {
        if ($keywords) {
            $this->keywords_r = $keywords;
        }

        return $this;
    }

    /**
     * Add the salary value
     */
    public function salary_year_r(float $salary): self
    {
        if ($salary) {
            $this->salary_year_r = $salary;
        }

        return $this;
    }

    /**
     * Add the salary max value
     */
    public function salary_max_r(float $salary): self
    {
        if ($salary) {
            $this->salary_max_r = $salary;
        }

        return $this;
    }

    /**
     * Add the salary min value
     */
    public function salary_min_r(float $salary): self
    {
        if ($salary) {
            $this->salary_min_r = $salary;
        }

        return $this;
    }

    /**
     * Add the salary min value
     */
    public function workday_r(string $workday): self
    {
        $total = explode(',', $workday);

        $this->workday_r = (int) count($total);

        return $this;
    }

    /**
     * Add the keywords value
     */
    public function get(): float
    {
        // Set the default value, base on the total days online
        $ranking = 0;

        // Get title ranking. Max value * keyword density / max expectation
        $ranking += $this->titleAVG();

        $ranking += $this->descriptionAVG();

        if ($this->url_r) {
            $ranking = $ranking + 1 * $this->keywordDensity($this->url_r);
        }

        if ($this->keywords_r) {
            $ranking = $ranking + 1 * $this->keywordDensity($this->keywords_r) / 1.5;
        }

        if ($this->salary_year_r) {
            $ranking = $this->salaryAVG() > 0
                ? $ranking + 20 + $this->salaryAVG()
                : $ranking - 20;
        }

        if ($this->workday_r) {
            $ranking = $ranking + $this->workday_r * 5;
        }

        // Bonus for score in the main fields
        if ($this->score >= 3) {
            $ranking += 15;
        }

        return $ranking < 30
            ? 30
            : $ranking;
    }

    /**
     * Calculate keyword density
     */
    private function keywordDensity(string $string = '', int $total = 0): float
    {
        $loop = 0;
        $keywords = explode(',', $this->category_r);
        $listOfWords = str($string)
            ->lower()
            ->replace(['/a', '/o', '/es', '(m/f/d)', '&', '.', '-', ':', ';', ',', '/'], '')
            ->explode(' ')
            ->toArray();

        foreach ($listOfWords as $word) {
            if (in_array($word, $keywords)) {
                $total++;
                $loop++;
            }
        }

        // More than 3 keyword density is bad... spam
        return match ($loop) {
            1 => $total * 1.20,
            2 => $total * 1.40,
            3 => $total * 1.70,
            4 => $total * 0.50,
            5 => $total * 0.25,
            default => 0,
        };
    }

    private function titleAVG(int $value = 0): float
    {
        // Get title ranking. Max value * keyword density / max expectation
        if ($this->title_r) {
            $density = $this->keywordDensity($this->title_r);

            //Title density
            if ($density > 0) {
                $value += $density * 2.5;
            }

            // Title length
            $value += strlen($this->title_r) < 65 ? 5 : 0;

            // Title (m/f/d)
            $value += str($this->title_r)->contains('(m/f/d)') ? 5 : 0;
        }

        // Generate global score
        $this->score += $value >= 5 ? 1 : 0;

        return $value;
    }

    private function descriptionAVG(int $value = 0): float
    {
        // Get description ranking. Max value * keyword density / max expectation
        if ($this->description_r) {
            // Description density
            if ($this->keywordDensity($this->description_r) > 0) {
                $value += $this->keywordDensity($this->description_r);
            }

            // Description length
            $value += strlen($this->description_r) > 250 ? 5 : 0;

            // Description (m/f/d)
            $value += str($this->description_r)->contains('(m/f/d)') ? 5 : 0;
        }

        $this->score += $value >= 5 ? 1 : 0;

        return $value;
    }

    private function salaryAVG(): float
    {
        if (! $this->salary_year_r || ! is_numeric($this->salary_year_r)) {
            $this->salary_year_r = 0.0;
        }

        if ($this->salary_year_r <= 0 && $this->salary_max_r && $this->salary_min_r) {
            $this->salary_year_r = ($this->salary_max_r + $this->salary_min_r) / 2;
        }

        // Bonus
        $this->score += $this->salary_year_r > 20000.00 ? 1 : 0;

        // Get intervale
        return match (true) {
            $this->salary_year_r > 50000.00 => 35.00,
            $this->salary_year_r > 45000.00 => 30.00,
            $this->salary_year_r > 35000.00 => 38.50,
            $this->salary_year_r > 30000.00 => 25.25,
            $this->salary_year_r > 27000.00 => 20.85,
            $this->salary_year_r > 25000.00 => 15.00,
            $this->salary_year_r > 22000.00 => 9.55,
            $this->salary_year_r > 20000.00 => 8.00,
            $this->salary_year_r > 18000.00 => 7.00,
            $this->salary_year_r > 17000.00 => 6.00,
            $this->salary_year_r > 16000.00 => 5.00,
            $this->salary_year_r > 15000.00 => 4.00,
            $this->salary_year_r > 14000.00 => 3.00,
            $this->salary_year_r > 13000.00 => 2.00,
            $this->salary_year_r > 12000.00 => 1.00,
            $this->salary_year_r > 10000.00 => 0.00,
            default => -15,
        };
    }
}
