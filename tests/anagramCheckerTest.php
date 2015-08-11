<?php
    require_once "src/anagramChecker.php";

    class anagramCheckerTest extends PHPUnit_Framework_TestCase
    {

    //Prints original input
    function test_makeAnagram_printInput()
    {
        $test_anagramChecker = new AnagramChecker;
        $input = "bee";

        $result = $test_anagramChecker->makeAnagram($input);

        $this->assertEquals("bee", $result);

    }

    //Sets input to lowercase
    //input-> Won
    //output-> won
    function test_makeAnagram_lowercase()
    {
        $test_anagramChecker = new AnagramChecker;
        $input = "Won";

        $result = $test_anagramChecker->makeAnagram($input);

        $this->assertEquals("won", $result);
    }


    //Breaks input into individual letters
    //input-> "cat"
    //output-> "c", "a", "t"

    //Create permutations from the input
    //input-> "dog"
    //output-> "d-o-g", "d-g-o", "g-d-o", "g-o-d", "o-g-d", "o-d-g"

    //Retrieve list of possible anagrams
    //input-> "hat"
    //output-> "hat"

    //Retrieve multiple words from list of possible anagrams
    //input-> "hat", "dog", "car"
    //output-> array("hat", "dog", "car")

    //Find matching anagrams from the two lists
    //input-> anagram original "end", possible matches  "the", "den", "one"
    //output-> original "end", match "den", "end"

    //Remove matching anagram from list
    //input-> anagram original "dog", possible matches "dog", "god", "hat"
    //out-> original "dog", match "god"

















    //Create loop to create anagrams
    //Get user list of possible anagrams
    //Put user list into array
    //compare anagrams to user list
    //output matches

    }
?>
