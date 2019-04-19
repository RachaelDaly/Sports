<!-- <?php
  $FILEPATH = 'data.txt';
  // for compatibility with older php versions
  function set_status_code($value) {
    header('X-PHP-Response Code', true, 201); 
  }
  // read any incoming data
  $data = json_decode(file_get_contents('php://input'), true);
  $fp = fopen(FILEPATH, 'w');
  fwrite($fp, $data);
  fclose($fp);
  // if there is data, add it to the list
  // otherwise, reply with all data
  if ($data) {
    set_status_code(201);
  } else {
    // the double quotes are for interpretation of the newline character
    $names = explode("\n", file_get_contents($FILEPATH));
    // encode it as json
    print(json_encode($names));
  }
?> -->

<?php

//Example array.
$array = array('Ireland', 'England', 'Wales', 'Northern Ireland', 'Scotland');

//Encode the array into a JSON string.
$encodedString = json_encode($array);

//Save the JSON string to a text file.
file_put_contents('data.txt', $encodedString);

//Retrieve the data from our text file.
$fileContents = file_get_contents('json_array.txt');

//Convert the JSON string back into an array.
$decoded = json_decode($fileContents, true);

//The end result.
var_dump($decoded);
?>