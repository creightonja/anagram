<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/anagramChecker.php";

    //loads symfony debug component and turns it on
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    //Initializes Silex
    $app = new Silex\Application();
    //links debug mode to $app object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("form.html.twig");
    });

    $app->get("/results", function() use($app){
        $my_anagramChecker = new anagramChecker;
        $anagram_checker = $my_anagramChecker->makeAnagramChecker($_GET["input_word"], $_GET["input_check_list"]);
        return $app["twig"]->render("results.html.twig", array("result" => $anagram_checker));
    });

    return $app;
?>
