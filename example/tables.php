<?php

require __DIR__.'/_dom.php';


$table = DOM('<table/>');
$tbody = DOM('<tbody/>')->appendTo($table);

for ($y = 0; $y < 10; $y += 1)
{
  $row = DOM('<tr/>');

  if ($y & 1)
  {
    $row->css('background', 'silver');
  }

  for ($x = 0; $x < 10; $x += 1)
  {
    $cell = DOM('<td/>')->text("$x,$y")->appendTo($row);
  }

  $tbody->append($row);
}

echo $table;
