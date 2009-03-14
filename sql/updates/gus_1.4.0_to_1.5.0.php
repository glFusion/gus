<?php

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

// add a table for ignoring referrers

$_SQL[] = "CREATE TABLE IF NOT EXISTS {$_TABLES['gus_ignore_referrer']} (
  referrer varchar(128) NOT NULL default '',
  PRIMARY KEY  (referrer)
)";

?>
