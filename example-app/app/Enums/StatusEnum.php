<?php

namespace App\Enums;

class StatusEnum
{
    const ATIVO = 'ativo';
    const INATIVO = 'inativo';
    const FERIAS = 'ferias';

    public static function toArray()
    {
        return [
            self::ATIVO,
            self::INATIVO,
            self::FERIAS,
        ];
    }
}