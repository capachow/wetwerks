<?php

$folder = '/images/icons/';
$folder = trim($folder, '/') . '/';

if(!is_dir($folder)) {
  mkdir($folder, 0777, true);
}

return function($name) use($folder) {
  $icon = path("{$folder}/{$name}.svg", true);

  if(is_file($icon)) {
    return file_get_contents($icon);
  }
};

?>