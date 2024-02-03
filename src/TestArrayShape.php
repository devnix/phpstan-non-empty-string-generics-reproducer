<?php

declare(strict_types=1);

namespace App;

use Psl\Type;

final class TestArrayShape
{
    /**
     * @param array<mixed, mixed> $array
     * @return array{a: non-empty-string}
     */
    public function arrayToNonEmptyString(array $array): array
    {
        return Type\shape([
            'a' => Type\non_empty_string()
        ])->coerce($array);
    }

    /**
     * @param array<mixed, mixed> $array
     * @return list<array{a: non-empty-string}>
     */
    public function arrayToNonEmptyString2(array $array): array
    {
        return Type\vec(
            Type\shape([
                'a' => Type\non_empty_string()
            ])
        )->coerce($array);
    }
}