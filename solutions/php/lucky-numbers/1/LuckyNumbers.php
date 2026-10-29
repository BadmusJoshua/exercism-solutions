<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        //fetch and concatenate the numbers in arrays to get the numbers
        $firstNumber = implode('', $digitsOfNumber1);
        $secondNumber = implode('', $digitsOfNumber2);
        return $firstNumber + $secondNumber;
    }

    public function isPalindrome(int $number): bool
    {   
        return (string) $number === strrev((string) $number);
    }

    public function validate(string $input): string
    {
    if ($input === null || $input === '') {
        return 'Required field';
    }

    $number = (int) $input;

    if ($number <= 0 || (float) $input != $number) {
        // Check hexadecimal and octal notation
        if (is_string($input) && preg_match('/^0[xX][0-9a-fA-F]+$/', $input)) {
            return hexdec(substr($input, 2)) > 0
                ? ''
                : 'Must be a whole number larger than 0';
        }

        if (is_string($input) && preg_match('/^0[oO][0-7]+$/', $input)) {
            return octdec(substr($input, 2)) > 0
                ? ''
                : 'Must be a whole number larger than 0';
        }

        return 'Must be a whole number larger than 0';
    }

    return '';

    }
}
