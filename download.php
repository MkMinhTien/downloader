<?php
if (isset($_GET['file']) && $_GET['file']) {
  $path = 'files/' . $_GET['file'];
  if (file_exists($path)) {
    header('');
    header('');
    header('');

    $f = fopen($path, 'r');

    while (!feof($f)) {
      fread($f, 100);
      usleep(50);
    }
  } else {
    echo 'ERROR: File not found!';
  }
}