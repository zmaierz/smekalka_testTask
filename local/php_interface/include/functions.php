<?php

function dump($data, $all = false, $die = false) {
    global $USER;
     if ($all || $USER->GetID() == 1) {
         ?>
             <pre><?print_r($data);?></pre>
         <?
    }
    if ($die) die();
}

function addDaysToDate(?int $dateCount): string {
    $today = date("y.m.d");
    
    $date = new DateTime($today);
    $dayInterval = 'P' . $dateCount . 'D';
    $date->add(new DateInterval($dayInterval));
    $out = $date->format('d.m.Y');

    return $out;
}