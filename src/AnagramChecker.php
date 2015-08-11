<?php
    class AnagramChecker
    {
        function makeAnagram($input_word, $input_check_list)
        {
            $matches = array();
            $sorted_array = array();
            $match_count = 0;

            //Takes user input and splits into individual letters
            $split_input = str_split($input_word);
            //Sorts user input into an array of alphabetized letters
            sort($split_input);


            $exploded_check_list = explode(", ", $input_check_list);  //exploding input
            //Takes user anagrams and splits into individual letters

            foreach ($exploded_check_list as $word) {
                $split_check_list = str_split($word);
                //Takes user anagrams into an array of aphabetized letters
                sort($split_check_list);
                //Checks if the aphabetized arrays are equal
                if ($split_input == $split_check_list) {
                    $match_count++;  //counter for if statement matches
                    array_push($matches, $word);
                }
            }
            $matches_string = implode(", ", $matches); //imploding $matches into string

            //If statement checking for any matches.
            if ($match_count == 0) {
                $matches_string = "No matches found";
            }
            return $matches_string;

        }
    }
?>
