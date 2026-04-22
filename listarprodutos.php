<?php
$op = filter_input(INPUT_GET,'op');
$id = filter_input(INPUT_GET,'id');
echo 'Origem = '.$op.' | Identificação = '.$id;
?>