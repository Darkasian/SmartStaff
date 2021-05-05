<?php

for ($n = -71; $n < 104; $n++) {
   if (($n % 3) == 0 and ($n % 5) == 0) {
    echo "$n" . ' = "Smart Staff"', PHP_EOL;
   } else if (($n % 3) == 0) {
       echo "$n" . ' = "Smart"', PHP_EOL;
   } else if (($n % 5) == 0) {
    echo "$n" . ' = "Staff"', PHP_EOL;
   } else {
       echo "$n", PHP_EOL;
   }
}