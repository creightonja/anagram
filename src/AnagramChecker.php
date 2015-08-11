<?php
    class AnagramChecker
    {
        function makeAnagram($input)
        {
            $lc_input = strtolower($input);

            $input_array = str_split($lc_input);
            $array_length = count($input_array);
            $compiled_word = "";
            for ($i = 0; $i < $array_length; $i++)
            {
                $compiled_word = $compiled_word . $input_array[$i];
            }
            
            return ($compiled_word);
        }
    }
?>
