<?php 
    $employees = [
["name" => "Ahmed", "salary" => 5000, "age" => 30, "insurance" => "Yes"],
["name" => "Sara", "salary" => 6000, "age" => 28, "insurance" => "No"],
["name" => "Ali", "salary" => 4500, "age" => 35, "insurance" => "Yes"]
]; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
foreach ($employees as $employees ) { ?>

<div style="border: 1px solid; padding: 10px;">
  <h2><?php echo $employees["name"];?></h2>
  <p><?php echo $employees["age"];?></p>
  <p><?php echo $employees["salary"];?></p>
    <p><?php echo $employees["insurance"];?></p>

</div>


<?php  } ?>
</body>
</html>