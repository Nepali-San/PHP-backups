<?php
$name = 'Yo Gi';
//echo strlen($name); // to count the length of string.
//echo '<br/>';
$name = 'Yo Gi is Pratap';
//echo str_word_count($name); // to count the word.
//echo '<br>';
//echo strrev($name);
//echo '<br>';
echo strpos($name,'is');
echo '<br>';	
echo str_replace('Pratap','Sandesh',$name);
?>