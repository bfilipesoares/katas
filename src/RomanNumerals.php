<?php

class RomanNumerals
{
    public function toRoman($number)
    {
        $return = '';

        $subtractivesList = [
            100 => 'C',
            10 => 'X',
            1 => 'I'
        ];

        $majors = [
            ['roman' => 'M', 'arabic' => 1000],
            ['roman' => 'D', 'arabic' => 500],
            ['roman' => 'C', 'arabic' => 100],
            ['roman' => 'L', 'arabic' => 50],
            ['roman' => 'X', 'arabic' => 10],
            ['roman' => 'V', 'arabic' => 5],
            ['roman' => 'I', 'arabic' => 1],
        ];

        foreach ($majors as $index => $major) {
            $romanMajor = $major['roman'];
            $arabicMajor = $major['arabic'];
            $moveToNextMajor = false;

            while (!$moveToNextMajor && $number > 0) {
                $moveToNextMajor = true;

                foreach ($subtractivesList as $subtractive => $romanSubtractive) {
                    if ($number + $subtractive == $arabicMajor) {
                        $return .= $romanSubtractive . $romanMajor;
                        $number = 0;
                        break;
                    }

                    $subtractiveMinimum =$arabicMajor-$subtractive;
                    if ($subtractiveMinimum >0 
                        && $number >= $subtractiveMinimum 
                        && $number < $arabicMajor 
                        && (($arabicMajor-$subtractiveMinimum) <= $subtractive) 
                        && $subtractive>1
                    )
                    {
                        $return .= $romanSubtractive . $romanMajor;
                        $number -= $subtractiveMinimum;
                        break; // or break??
                    }
                }

                while ($number / $arabicMajor >= 1) {
                    $return .= $romanMajor;
                    $number -= $arabicMajor;
                    $moveToNextMajor = false; // subtractives may still have to run for this major again (e.g XIX)
                }
            }

            if ($number <= 0) {
                break;
            }
        }
        return $return;
    }
}


