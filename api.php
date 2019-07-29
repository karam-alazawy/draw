<<<<<<< HEAD

<?php

$arr = array();
$newarr = array();
if($_POST){


$i=0;
foreach ($_POST['s'] as $selectedOption){
    $arr[$i] = $selectedOption."\n";
    $i++;}
}
$arr_history=$arr;
for ($i=0; $i<sizeof($arr); $i++)
{
  // If the history array is empty, re-populate it.
  if ( empty($arr_history) )
    $arr_history = $arr;

  // Select a random key.
  $key = array_rand($arr_history, 1);

  // Save the record in $selected.
  $selected = $arr_history[$key];

  // Remove the key/pair from the array.
  unset($arr_history[$key]);

  // Echo the selected value.

array_push($newarr,$selected);
}
echo json_encode($newarr);
 ?>
=======

<?php

$arr = array();
$newarr = array();
if($_POST){


$i=0;
foreach ($_POST['s'] as $selectedOption){
    $arr[$i] = $selectedOption."\n";
    $i++;}
}
$arr_history=$arr;
for ($i=0; $i<sizeof($arr); $i++)
{
  // If the history array is empty, re-populate it.
  if ( empty($arr_history) )
    $arr_history = $arr;

  // Select a random key.
  $key = array_rand($arr_history, 1);

  // Save the record in $selected.
  $selected = $arr_history[$key];

  // Remove the key/pair from the array.
  unset($arr_history[$key]);

  // Echo the selected value.

array_push($newarr,$selected);
}
echo json_encode($newarr);
 ?>
>>>>>>> acb6032da2935ed86a90e974cbab34730c774f22
