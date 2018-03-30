<?php

  $link = $_GET['link'];
  $tag =  $_GET['tag'];
  $time = $_GET['time'];
  $inp = file_get_contents('data.json');
  $tempArray = json_decode($inp);

  $obj = new stdClass();
  $obj->link=$link;
  $obj->tag=$tag;
  $obj->time=$time;   
  array_push($tempArray,$obj);
  $jsonData = json_encode($tempArray);
  file_put_contents('data.json',$jsonData);
?>