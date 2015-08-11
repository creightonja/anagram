<?php
    require_once "src/anagramChecker.php";

    class anagramCheckerTest extends PHPUnit_Framework_TestCase
    {

    //Check to see if single letter input matches
    //input-> "a" | "a"
    //output-> "a"
    function test_checkAnagram_single_letter()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "a";
        $input_check_list = array("a");

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals(array("a"), $result);
    }
    //Check to see if single letter does not match
    //input-> "a" | "b"
    //output-> "No matches found"

    function test_checkAnagram_no_match()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "a";
        $input_check_list = array("b");

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals(array("No matches found"), $result);
    }

    //Check to see if one match in multiple inputs
    //input-> "a" | "a", "b"
    //output-> "a"
    function test_checkAnagram_multi_input()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "a";
        $input_check_list = array("a","b");

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals(array("a"), $result);

    }

    //Check to see if multiple matches from multiple inputs
    //input-> "a" | "a", "a"
    //output-> "a", "a"
    function test_checkAnagram_multi_match()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "a";
        $input_check_list = array("a", "a");

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals(array("a", "a"), $result);
    }

    //Check to see if multiple characters return a match
    //input-> "ab" | "ab"
    //output-> "ab"
    function test_checkAnagram_double_letter_match()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "ab";
        $input_check_list = array("ab");

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals(array("ab"), $result);

    }

    //Check to see if multiple characters return a match of anagram characters
    //input-> "ab" | "ba"
    //output-> "ba"

    //Check to see if multiple characters return a match of multiple anagrams
    //input-> "abc" | "acb", "bca"
    //output-> "acb", "bca"

    //Check to see if multiple characters don't return non-matches
    //input-> "abc" | "cab", "ddd"
    //output-> "cab"

    }
?>
