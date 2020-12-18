
<?php
require ('Dbh.inc.php');
class setEmail extends Dbh{
	
	private $email=['email'];
	private $date;

	public function __construct($post_email){
		$this->email['email']=$post_email;
		$this->date=date("Y/m/d");
	}
	public function start(){
		$this->setEmails();
	}

	private function setEmails(){
		$email = $this->connection()->real_escape_string($this->email['email']);
		$date =$this->date;
		$db = $this->connection();
		$sql = "INSERT INTO email (email,date)"
		."VALUES( '$email','$date' )";
		$db->query($sql);
	}
}
?>