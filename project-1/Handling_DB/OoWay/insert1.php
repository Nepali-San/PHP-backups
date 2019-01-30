<?php

require_once "sub-main1.php";
require_once "main1.php";

$doit = new sub;

$doit->first_name = "ji2";
$doit->middle_name = '';
$doit->last_name= 'jp';
$doit->father_name = 'n3i';
$doit->mother_name = 'vn3ioe';
$doit->birth_date = '2011-12-12';
$doit->gender = '1';
$doit->marital_status = '0';
$doit->email='fdjadl';
$doit->ph_no= '132de1';
$doit->address= 'fddaj';
$doit->employed= '0';

if($ans = $doit->insertid())
{ ?>
<script>
	 alert('User inserted with id = <?php echo $ans; ?>')
	</script>
	<?php 
}
else{ ?>
	<script>
	alert('User Could Not Be Inserted');
	</script>
	<?php
}
?>