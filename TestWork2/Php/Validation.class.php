<?php


class validationP{


private $data=['email','checkbox'];
private $errors=[];




public function __construct($post_email,$post_checkbox){
	$this->data['email']=$post_email;
	$this->data['checkbox']=$post_checkbox;
}


public function validateForm(){

	$this->validateEmail();
	$this->validateCheckbox();
	return $this->errors;
}
private  function validateEmail(){

	$val=$this->data['email'];

	if(!empty($val)){
		if(preg_match ('/[\.a-zA-Z0-9_\-]+[@][a-z0-9_\-]+([.][a-z0-9_\-]+)+[a-z]{1,4}/i', $val)){
			if(!preg_match ('/[\.a-zA-Z0-9_\-]+[@][a-z0-9_\-]+[.][co]/i', $val)){
			
				$this->addError('email','');
			}else{
				$this->addError('email','email not for co');
			}	
		}else{
			$this->addError('email','email is not valued');
		}
	 }else{
		$this->addError('email','email cannot be empty!');
	}
}

private function validateCheckbox(){

	$val=$this->data['checkbox'];
if($val=='on'){
	$this->addError('checkbox','');
	
}else{
	$this->addError('checkbox','chackbox cannot be empty!');
	
}

}


private function addError($key,$val){

	$this->errors[$key]=$val;
}

}

?>