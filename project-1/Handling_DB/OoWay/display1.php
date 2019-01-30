<?php
require_once "sub-main1.php";

$row = new sub;
$res = $row->selectall();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
<tr>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Contact Number</th>
</tr>
<?php
foreach($res as $q){ ?>
<tr>
<td><?php echo $q->id; ?></td>
<td><?php echo $q->first_name.' '.$q->middle_name.' '.$q->last_name; ?></td>
<td><?php echo $q->address; ?></td>
<td><?php echo $q->ph_no; ?></td>
</tr>
<?php } ?>
</body>
</html>