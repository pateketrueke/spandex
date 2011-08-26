<?php

require dirname(__DIR__).'/library/spandex.php';


function DOM($tag, array $args = array())
{// you could write a better helper
  return new Spandex($tag, $args);
}
