<?php

session_start();

// databse settings

$host = '127.0.0.1:3307';
$user = 'root';
$pass = '';
$db   = 'databaseku';

// end databse settings


function base_url($url = null)
{

  $base_url = "http://localhost";

  return $url != null ? $base_url."/".$url : $base_url;

}
