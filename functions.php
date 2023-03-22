<?php 



function generaPassword($length)
{
  //in php le variabili si devono trovare dentro la funzione, altrimenti non le vedra'
  $caratteri = 'abcdefghilmnopqrstuvz';
  $numeri = '0123456789';

  //concatenazione
  $caratteri .= strtoupper($caratteri);
  $caratteri .= $numeri;
  $password = '';

  for($i = 0; $i < $length; $i++){
    $max = strlen($caratteri)-1;
    $random_index = rand(0,$max);

    $carattere = $caratteri[$random_index];
    // var_dump($carattere);


    $password .= $carattere;

  }

  return $password;

}


$psw = generaPassword(12);

var_dump($psw);

?>