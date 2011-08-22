<?php

require dirname(__DIR__).'/library/spandex.php';


function DOM($tag, array $args = array())
{// you could write a better helper
  return new Spandex($tag, $args);
}


$html = DOM('<html/>');
$head = DOM('<head/>')->appendTo($html);

$title = DOM('<title>Hi all!</title>')->appendTo($head);
$body = DOM('<body/>')->appendTo($html);

$body->append(DOM('<h1/>')->text('This is Spandex')->css('color', 'red'));
$body->append(DOM('<pre/>')->data(array('key' => 'val'))->text(file_get_contents(__FILE__)));

echo $html;