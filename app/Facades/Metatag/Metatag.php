<?php

namespace App\Facades\Metatag;

use Illuminate\Support\Collection;

class Metatag
{
    public ?string $section;

    public ?string $category;

    public ?string $province;

    public ?string $language;

    /**
     * Set configuration values
     */
    public function set(Collection $config)
    {
        // Values
        $this->section = $config->get('section');
        $this->category = $config->get('categoryName');
        $this->province = $this->province($config);
        $this->language = $config->get('languageName');

        return $this;
    }

    /**
     * Metatag title
     */
    public function title(): string
    {
        // Sections
        if ($this->section === 'categorias') {
            return $this->generateText('Bolsa de empleo para %s%s.');
        }

        if ($this->section === 'lenguajes') {
            return $this->generateText('Bolsa de empleo para %s%s especializado en %s.');
        }

        if ($this->section === 'legal.advice') {
            return $this->generateText('Buscador de empleo, formación y cursos online. Aviso legal.');
        }

        if ($this->section === 'legal.cookies') {
            return $this->generateText('Buscador de empleo, formación y cursos online. Cookies.');
        }

        if ($this->section === 'legal.privacity') {
            return $this->generateText('Buscador de empleo, formación y cursos online. Privacidad.');
        }

        // Default
        return 'Buscador de empleo, formación y cursos online.';
    }

    /**
     * Metatag description
     */
    public function description(): string
    {
        //305 ofertas de empleo de javascript en Madrid. ¡Encuentra la oportunidad laboral que estás buscando!

        // Sections
        if ($this->section === 'categorias') {
            return sprintf(
                'Ofertas de empleo y formación de %s%s. Accede a nuestra bolsa de trabajo de %s, donde podrás encontrar el trabajo que estás buscando.',
                $this->category,
                $this->province,
                $this->category,
            );
        }

        if ($this->section === 'lenguajes') {
            return sprintf(
                '¿Quieres pogramar en %s? Accede a nuestras ofertas de trabajo de %s%s, donde podrás encontrar el trabajo que estás buscando programando en %s.',
                $this->language,
                $this->category,
                $this->province,
                $this->language,
            );
        }

        if ($this->section === 'legal.advice') {
            return 'Aviso legal y condiciones de uso de empleatis.com. Ofertas de empleo y formación. Accede a nuestra bolsa de trabajo, donde podrás encontrar el trabajo que estás buscando.';
        }

        if ($this->section === 'legal.cookies') {
            return 'Política de cookies de empleatis.com. Ofertas de empleo y formación. Accede a nuestra bolsa de trabajo, donde podrás encontrar el trabajo que estás buscando.';
        }

        if ($this->section === 'legal.privacity') {
            return 'Política de privacidad de empleatis.com. Ofertas de empleo y formación. Accede a nuestra bolsa de trabajo, donde podrás encontrar el trabajo que estás buscando.';
        }

        // Default
        return sprintf(
            'Ofertas de trabajo del %s donde podras buscar trabajos por categorias y por provincia. Accede a nuestra bolsa de empleos seleccionados.',
            config('empleatis.name')
        );
    }

    /**
     * Generate text
     */
    private function generateText(string $text): string
    {
        return sprintf(
            $text,
            $this->category,
            $this->province,
            $this->language
        );
    }

    /**
     * Generate province
     */
    private function province(Collection $config): string
    {
        return $config->get('province')
            ? ' en '.$config->get('provinceName')
            : '';
    }
}
