
<?php
class deleteDat extends Dbh{
public function deleteData($AtrID){
	$query = "DELETE FROM `email` WHERE `email_id` = $AtrID";
	$result= $this->connection()->query($query);
}
}