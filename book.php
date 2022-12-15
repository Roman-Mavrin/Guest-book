<?php
$file = "book.txt";
$data = date('d.m.Y H:i'. ' МСК');
$text = $_REQUEST['text'];
$name = $_REQUEST['name'];
if (@$_REQUEST['add']) {
  $f = fopen($file, "a");
  if (@$_REQUEST['text'] && @$_REQUEST['name']) fputs($f, '<span class="date-mess">'.$name.' '.$data. " </span><br>". " <span class='message'>" .$text ."</span>"."\n");
  fclose($f);
  $random = time();
  Header("");
  exit();
}
$gb = @file($file);
if (!$gb) $gb = [];
