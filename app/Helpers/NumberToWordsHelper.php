<?php

namespace App\Helpers;

class NumberToWordsHelper
{
    public static function convertToWords($number)
    {
        $ones = [
            0 => 'Zero',
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine',
        ];
    
        $tens = [
            10 => 'Ten',
            20 => 'Twenty',
            30 => 'Thirty',
            40 => 'Forty',
            50 => 'Fifty',
            60 => 'Sixty',
            70 => 'Seventy',
            80 => 'Eighty',
            90 => 'Ninety',
        ];
    
        $teens = [
            11 => 'Eleven',
            12 => 'Twelve',
            13 => 'Thirteen',
            14 => 'Fourteen',
            15 => 'Fifteen',
            16 => 'Sixteen',
            17 => 'Seventeen',
            18 => 'Eighteen',
            19 => 'Nineteen',
        ];
    
        $hundreds = [
            100 => 'Hundred',
            1000 => 'Thousand',
        ];
    
        $cents = [
            1 => 'Cent',
            2 => 'Cents',
        ];
    
        if ($number < 10) {
            $convertedNumber = $ones[$number];
        } elseif ($number < 20) {
            $convertedNumber = $teens[$number];
        } elseif ($number < 100) {
            $tensDigit = floor($number / 10) * 10;
            $onesDigit = $number % 10;
        
            $convertedNumber = $tens[$tensDigit];
        
            if ($onesDigit > 0) {
                $convertedNumber .= ' ' . $ones[$onesDigit];
            }
        } elseif ($number < 1000) {
            $hundredsDigit = floor($number / 100);
            $remainder = $number % 100;
        
            $convertedNumber = $ones[$hundredsDigit] . ' ' . $hundreds[100];
        
            if ($remainder > 0) {
                $convertedNumber .= ' ' . self::convertToWords($remainder);
            }
        } else {
            $thousandsDigit = floor($number / 1000);
            $remainder = $number % 1000;
        
            $convertedNumber = self::convertToWords($thousandsDigit) . ' ' . $hundreds[1000];
        
            if ($remainder > 0) {
                $convertedNumber .= ' ' . self::convertToWords($remainder);
            }
        }
        
        $centsDigit = floor(($number - floor($number)) * 100);
        
        if ($centsDigit > 0) {
            if ($centsDigit < 10) {
                $centsConverted = $ones[$centsDigit];
            } elseif ($centsDigit < 20) {
                $centsConverted = $teens[$centsDigit];
            } else {
                $tensDigit = floor($centsDigit / 10) * 10;
                $onesDigit = $centsDigit % 10;
        
                $centsConverted = $tens[$tensDigit];
        
                if ($onesDigit > 0) {
                    $centsConverted .= ' ' . $ones[$onesDigit];
                }
            }
        
            $convertedNumber .= ' and  ' . $centsConverted . ' ' . ($centsDigit == 1 ? $cents[1] : $cents[2]);
        }
    
        return $convertedNumber;
    }}