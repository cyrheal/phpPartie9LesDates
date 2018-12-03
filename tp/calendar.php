<?php
function month(){
  setlocale(LC_TIME, 'fr_FR.utf8','fra');
  $months = [
    '1'  => 'JANVIER',
    '2'  => 'FEVRIER',
    '3'  => 'MARS',
    '4'  => 'AVRIL',
    '5'  => 'MAI',
    '6'  => 'JUIN',
    '7'  => 'JUILLET',
    '8'  => 'AOUT',
    '9'  => 'SEPTEMBRE',
    '10' => 'OCTOBRE',
    '11' => 'NOVEMBRE',
    '12' => 'DECEMBRE'
  ];
  $options = '';
  foreach($months as $key => $value){
    $options .= '<option value="'.$key.'">'.$value.'</option>';
  }
}