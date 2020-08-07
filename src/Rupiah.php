<?php

namespace Hanan;

class Rupiah
{
    /**
     * Format the number to rupiah 
     * @param int $angka 
     * @return 
     */
    public static function format($angka): string
    {
        return "Rp "  . number_format($angka,2,',','.');
    }
}