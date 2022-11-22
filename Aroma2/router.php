<?php
$url = explode("/", $_SERVER['REQUEST_URI']);

 if ($url[1] == "blog") {
  $content = file_get_contents("pages/blog.html");
 } else {
  $content = file_get_contents("pages/index.php");
 }





require_once("template.php");
