<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

function dump($data)
{
  echo '<br/><div 
    style="
    display:block;
    position:absolute;
    top:70px;
    margin:5px;
    z-index:9999;
    padding: 1px 10px;
    margin: 5px;
    border: 1px dashed gray;
    background: lightgray;
    "
  >
  <pre>';
  print_r($data);
  echo '</pre>
  </div>
  <br/>';
}