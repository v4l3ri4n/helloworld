<?php

// Instantiate a DateTime with microseconds.
$d = new DateTime('NOW');

// Output the date with microseconds.
echo $d->format('Y-m-d\TH:i:s.u');

?>
