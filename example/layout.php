<?php

require __DIR__.'/_dom.php';


$html = DOM('<html/>');
$head = DOM('<head/>')->appendTo($html);

$title = DOM('<title>Hi all!</title>')->appendTo($head);
$body = DOM('<body/>')->appendTo($html);

$body->append(DOM('<h1/>')->text('This is Spandex')->css('color', 'red'));
$body->append(DOM('<pre/>')->data(array('key' => 'val'))->text(file_get_contents(__FILE__)));

echo $html;
