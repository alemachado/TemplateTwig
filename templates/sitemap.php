<?php

include(__DIR__ . '/twigdefaults.php');

$twig_vars['page']->body = $page->body;
$twig_vars['page']->title = $page->title;


echo $page->twig->render('sitemap.html.twig', $twig_vars);