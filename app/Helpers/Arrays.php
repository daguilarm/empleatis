<?php

declare(strict_types=1);

/**
 * Get the filters
 */
if (! function_exists('filter_values')) {
    function filter_values(object $data, int $category = 0, array $filter = []): string
    {
        $fields = $data->where('type', (int) $category);

        foreach ($fields as $field) {
            if (isset($field)) {
                array_push($filter, ['name' => $field->name, 'id' => $field->id]);
            }
        }

        return json_encode($filter);
    }
}
