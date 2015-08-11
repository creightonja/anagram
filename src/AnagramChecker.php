<?php
    class AnagramChecker
    {
        function makeAnagram($input_word, $input_check_list)
        {
            $matches = "";
            if ($input_word == $input_check_list)
            {
                $matches = $input_check_list;
            } else {
                $matches = "No matches found";
            }
            return $matches;
        }
    }
?>
