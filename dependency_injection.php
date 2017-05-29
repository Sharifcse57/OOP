<?php
class Logger {
	public function log($message) {
		echo $message;
	}
}

class Userprofile {
	private $logger;
	public function createUser() {
		//Create user here
		//$logger = new Logger();
		$this->logger->log('User created succesfully');
	}
	public function updateUser() {
		//Update user here
		//$logger = new Logger();
		$this->logger->log('Update user succesfully');
	}
	public function deleteteUser() {
		//Delete user here
		//$logger = new Logger();
		$this->logger->log('Delete user succesfully');
	}

	public function __construct(Logger $logger) {
		$this->logger = $logger;
	}
}

$obj = new Userprofile(new Logger);
$obj->createUser();
echo "<br>";
$obj->updateUser();

?>