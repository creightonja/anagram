<?php
    require_once "src/anagramChecker.php";

    class anagramCheckerTest extends PHPUnit_Framework_TestCase
    {

    //Check to see if single letter input matches
    //input-> "a" | "a"
    //output-> "a"

    //Check to see if single letter does not match
    //input-> "a" | "b"
    //output-> "No matches found"

    //Check to see if one match in multiple inputs
    //input-> "a" | "a", "b"
    //output-> "a"

    //Check to see if multiple matches from multiple inputs
    //input-> "a" | "a", "a"
    //output-> "a", "a"

    //Check to see if multiple characters return a match
    //input-> "ab" | "ab"
    //output-> "ab"

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
