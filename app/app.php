<?php

  require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/WordCount.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app) {
		$my_scrabble = new Scrabble(NULL);
		return $app['twig']->render('form.html.twig', array('score' => $my_scrabble));
	});


	return $app;

?>
