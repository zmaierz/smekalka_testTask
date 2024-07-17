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