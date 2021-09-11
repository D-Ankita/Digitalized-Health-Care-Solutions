<?php


$username='root';
$password='';
$server='localhost';
$db= 'iplab';

$con= mysqli_connect($server,$username,$password,$db);

if ($con)
{
	//echo "Connection Successfull";

?>
<script>
	alert('Connection Successfull');
</script>

<?php 
}
else{
	//echo "NO Connection";
	?>
<script>
	alert('Connection NOT Successfull');
</script>

<?php 
}


