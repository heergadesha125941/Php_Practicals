<?php
# current date 
$date1 = date("d-m-Y");
$date2 = date("d-m-Y");
$date1 = new DateTime("2026-7-7");
$date2 = new DateTime("2023-7-7");
$final_date = date_diff($date1,$date2);
echo $final_date->format("%y");
?>
#mk_time to display specific date
#diff datetime class is compulsary
