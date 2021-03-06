<?php
$fo = new SplFileObject(__DIR__ . '/SplFileObject_fputcsv2.csv', 'w');

echo "*** Testing error conditions ***\n";
// zero argument
echo "-- Testing fputcsv() with zero argument --\n";
var_dump( $fo->fputcsv() );

// more than expected no. of args
echo "-- Testing fputcsv() with more than expected number of arguments --\n";
$fields = array("fld1", "fld2");
$delim = ";";
$enclosure ="\"";
$escape = "\\";
var_dump( $fo->fputcsv($fields, $delim, $enclosure, $escape, $fo) );

echo "Done\n";
