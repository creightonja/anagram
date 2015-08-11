<?php
    class AnagramChecker
    {
        function makeAnagram($input_word, $input_check_list)
        {
            $matches = array();
            $match_counter = 0;
            foreach($input_check_list as $word) {
                if ($input_word == $word)
                {
                    $match_counter++;
                    array_push($matches, $word);
                }
            if ($match_counter == 0) {
                $matches = array("No matches found");
            }
            }
            return $matches;
        }
    }
?>
