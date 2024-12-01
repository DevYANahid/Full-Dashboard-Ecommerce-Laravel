<?php

namespace App\Actions;

class GenerateProductVariant
{
    
    public static function handle(array $input): array
    {
        if (! count($input)) return [];

        $result = [[]];

        foreach ($input as $key => $values) {
            $append = [];
            foreach ($values as $value) {
                foreach ($result as $data) {
                    $append[] = $data + [$key => $value];
                }
            }
            $result = $append;
        }

        return $result;
    }
}
