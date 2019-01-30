<?php

require_once "main1.php";
require_once "sub-main1.php";

$doit = new sub;

$doit->id = "40";
$doit->first_name = "San";
$doit->middle_name = 'Prasad';
$doit->last_name= 'Neupane';
$doit->father_name = 'Dad';
$doit->mother_name = 'Mom';
$doit->birth_date = '2012-12-12';
$doit->gender = '1';
$doit->marital_status = '0';
$doit->email='sog.com';
$doit->ph_no= '191191';
$doit->address= 'Butwal';
$doit->employed= '0';

$doit->updateid();

?>