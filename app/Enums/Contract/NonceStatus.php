<?php
namespace App\Enums\Contract;

enum NonceStatus: string{
    case PENDING = 'pending';

    public static function  getAll(): array
    {
        return [
            NonceStatus::PENDING,
        ];
    }
}
