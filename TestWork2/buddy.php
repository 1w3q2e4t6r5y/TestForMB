<?php	
require ('getter.class.php');
require ('delete.class.php');
$drow = new getEmail();
echo "<button click='getData()'></button>";
$drow->getData();
$clear = new deleteDat();
if(isset($_POST['delete_id'])){
	$clear->deleteData($_POST['product_id']);
}