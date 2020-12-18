<?php


require ('Dbh.inc.php');

class getEmail extends Dbh{

private $res;

public function getData($a){
	$this->selectFDb();
	$this->drowPage($this->res);
}
private function sortTipe(){

}

private function selectFDb(){
	
	if(isset($_GET['order'])){
		$order=$_GET['order'];
	}else{
		$order='date';
	}
	if(isset($_GET['sort'])){
		$sort=$_GET['sort'];
	}else{
		$sort='ASC';
	}

	$query = "SELECT * FROM email ORDER BY $order $sort";
	$result= $this->connection()->query($query) or die(mysqli_error($this->connection()));
	$this->res=$result;
}
private function drowPage($result){
	$i=0;
	$n=0;
	
		
		echo $i;
		$Atr[$i]=$row['email'];
	
		echo "
		<table border = '1'>
		<tr>
		<th>email</th>
		<th>data</th>";
		while($row = $this->result->fetch_assoc()){
			$Atr=$rows['email'];
			$AtrDate=$row['date'];
			$AtrID=$row['email_id'];
		echo "
		<tr>
		<form method='post'>
		<td>$Atr :</td> 
		<td>$AtrDate</td> 
		<td><input type='hidden' name='product_id' value='$AtrID'></td> 
		<button type='submit' name='delete_id' method='post'>delete</button>
		</form>
		</tr>";
		
		$i++;}	
		echo "</table>";


}


}
