<?php
    class AnagramChecker
    {
        function makeAnagram($input)
        {
            $lc_input = strtolower($input);

            $input_array = str_split($lc_input);

            return ($input_array);
        }
    }
?>
