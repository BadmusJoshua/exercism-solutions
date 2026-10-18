<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $word = trim($name);//remove white space
        $first_letter = ($word[0]);//get the first letter of the word and convert it to uppercase
        return $first_letter;
    }

    public function initial(string $name): string
    {
       $initial = strtoupper($this->firstLetter($name).'.'); //conntinues from the previous function but adds dot and turns to upper case
        return $initial;
    }

    public function initials(string $name): string
    {
        $name = trim($name);
// Split the name wherever there is one or more whitespace characters
    $names = preg_split('/\s+/', $name);
    $firstName = $names[0];
    $lastName = $names[1] ?? '';
        $first_initial = $this->initial($firstName);
        $last_initial = $this->initial($lastName);
        $initials = $first_initial .' '. $last_initial;
        return $initials;

    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $first_initials = $this->initials($sweetheart_a);
        $second_initials = $this->initials($sweetheart_b);
    return 
'     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     '.$first_initials.'  +  '.$second_initials.'     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *';
    }
}
