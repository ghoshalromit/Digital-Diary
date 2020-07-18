<?php

$file=fopen("abc.txt","w");
$txt="Romit Ghoshal\n";
fwrite($file,$txt);
fclose($file);
?>