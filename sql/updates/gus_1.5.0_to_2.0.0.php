<?php

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

// Update the size of the page field

$_SQL[] = "ALTER TABLE {$_TABLES['gus_userstats']} CHANGE `page` `page` VARCHAR( 254 )";
?>