<?php

declare(strict_types=1);

class DeveloperInterview
{
    /**
     * Écrivez un programme court qui concatène chaque nombre de 1 à 100.
     *
     * Pour chaque multiple de 3, concaténer "Fizz" à la place du nombre.
     *
     * Pour chaque multiple de 5, concaté "Buzz" au lieu du nombre.
     *
     * Pour les nombres multiples de 3 et de 5, concaténer "FizzBuzz" 
     * au lieu du nombre.
     *
     * @return string
     */
    public static function fizzBuzz(): string
    {
        $fizzBuzz = '';

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $fizzBuzz .= 'FizzBuzz';
            } elseif ($i % 3 == 0) {
                $fizzBuzz .= 'Fizz';
            } elseif ($i % 5 == 0) {
                $fizzBuzz .= 'Buzz';
            } else {
                $fizzBuzz .= $i;
            }
        }

        return $fizzBuzz;
    }

    /**
     * Pour un nombre donné, renverra sa valeur en chiffres romains.
     *
     * Tableau des chiffres romains
     *
     * Roman Numeral | Number Value | Use As Inputs
     * --------------|--------------|---------------
     * I             | 1            | I
     * V             | 5            | V
     * X             | 10           | X
     * L             | 50           | L
     * C             | 100          | C
     * D             | 500          | D
     * M             | 1,000        | M
     *
     * @param int $value An integer between 0 and 3999
     *
     * @return string The roman number equivalent
     */
    public static function parseToRoman(int $value): string
    {
        $roman = '';
        
        $numeraux = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        );
        foreach($numeraux as $numero => $decimal ){
            while($value >= $decimal){
                $roman .= $numero;
                $value -= $decimal;
            }
        }

        return $roman;
    }

    /**
     * ROT-13 is the encrypting of a message by exchanging each of the
     * letters on the first half of the alphabet with the corresponding
     * letter in the second half of the alphabet (that is, swapping
     * positions by 13 characters). Thus, A becomes N, B becomes O,
     * and so forth, and conversely, N becomes A, O becomes B, and so
     * forth. Numbers, spaces and punctuation are not changed.
     *
     * Using the native `str_rot13` is forbiden, make your own implementation!
     *
     * @param string $value The string to decode
     *
     * @return string The decoded string
     */
    public static function toRot13(string $value): string
    {
        $rot13 = '';
        $length = strlen($value);
        for ($i = 0; $i < $length; $i++) {
            $char = $value[$i];
            if ($char >= 'A' && $char <= 'Z') {
                $rot13 .= chr((ord($char) - 65 + 13) % 26 + 65);
            } elseif ($char >= 'a' && $char <= 'z') {
                $rot13 .= chr((ord($char) - 97 + 13) % 26 + 97);
            } else {
                $rot13 .= $char;
            }
        }
        return $rot13;
    }

    /**
     * Ecrire une expression régulière qui extrait l'année de la variable $text
     *
     * @return string the year
     */
    public static function extractYear(): string
    {
        $text = 'Rapport n°2187 (09/2019) - Achats';
        $year = '';

        preg_match('/\/(\d{4})/', $text, $matches);
        
        $year = $matches[1];

        return $year;
    }


    /**
     * Pouvez-vous l'améliorer ?
     * simplifyMe() et doSomething son ensemble 
     *
     * @return boolean
     */

    public function doSomething()
    {
    }

    public function simplifyMe($report, $rc)
    {
        if ($report !== '' || $rc !== 1) {
            $this->doSomething();
        }
    }

    /**
     * Obtenir la factorielle d'un nombre
     *
     * @param int $number
     *
     * @return int
     */
    public static function factorial(int $number): int
    {
        $factorial = 0;

        if($number <= 1){
            return 1;
        }else{
            $factorial = $number * self::factorial($number - 1);
        }

        return $factorial;
    }

    /**
     * Obtenir l'angle formé par les aiguilles des heures et des minutes
     *
     * @param int $hours
     * @param int $minutes
     *
     * @return int
     */
    public static function clockAngle(int $hours, int $minutes): int
    {
        $angle = 0;
        $hourAngle = 0.5 * (60 * $hours + $minutes); 
        $minuteAngle = 6 * $minutes; 
    
        $angle = abs($hourAngle - $minuteAngle);
    
        return (int)$angle;
    }
    
}
