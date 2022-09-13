<?php

$hours =  readline("Please, enter the number of hours: ");
$minutes = readline("Please, enter the minutes: ");
$seconds = readline("Please, enter the seconds: ");

$time_on_seconds = ($hours * 3600) + ($minutes * 60) + $seconds;

echo "That time is equal to $time_on_seconds segundos. \n";