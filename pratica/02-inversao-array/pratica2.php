<?php

  $array = array('The', 'quick', 'brown', 'fox', 'jumps', 'over', 'the', 'lazy', 'dog');
  $tamanhoArray = sizeof($array);

  for($i=$tamanhoArray-1; $i>=0; $i--){
    echo $array[$i], PHP_EOL;
  }
