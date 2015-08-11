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
        $input_check_list = "a";

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals("a", $result);
    }
    //Check to see if single letter does not match
    //input-> "a" | "b"
    //output-> "No matches found"

    function test_checkAnagram_no_match()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "a";
        $input_check_list = "b";

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals("No matches found", $result);
    }

    //Check to see if one match in multiple inputs
    //input-> "a" | "a", "b"
    //output-> "a"
    function test_checkAnagram_multi_input()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "a";
        $input_check_list = "a, b";

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals("a", $result);

    }

    //Check to see if multiple matches from multiple inputs
    //input-> "a" | "a", "a"
    //output-> "a", "a"
    function test_checkAnagram_multi_match()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "a";
        $input_check_list = "a, a";

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals("a, a", $result);
    }

    //Check to see if multiple characters return a match
    //input-> "ab" | "ab"
    //output-> "ab"
    function test_checkAnagram_double_letter_match()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "ab";
        $input_check_list = "ab";

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals("ab", $result);

    }

    //Check to see if multiple characters return a match of anagram characters
    //input-> "ab" | "ba"
    //output-> "ba"
    function test_checkAnagram_double_letter_no_match()
    {
        $test_anagramChecker = new AnagramChecker;
        $input_word = "ab";
        $input_check_list = "ba";

        $result = $test_anagramChecker->makeAnagram($input_word, $input_check_list);

        $this->assertEquals("ba", $result);
    }
    //Check to see if multiple characters return a match of multiple anagrams
    //input-> "abc" | "acb", "bca"
    //output-> "acb", "bca"

    //Check to see if multiple characters don't return non-matches
    //input-> "abc" | "cab", "ddd"
    //output-> "cab"

    }
?>
