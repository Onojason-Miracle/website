	<?php

	include_once("constant.php");

		class Owner{
			
			//member variable
			
			public $dbcon; //object handler

			//member methods
			function __construct(){
				//to connect to database by intantiating mysqli class
				$this->dbcon= new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

				//check connection
				if ($this->dbcon->connect_error) {
					// code to be performed
					die("connection failed: ".$this->dbcon->connect_error);

				}else{
					return true;
					}
				}

					function register($firstname, $lastname, $email, $pswd){
				//hash passwords
				$password = password_hash($pswd, PASSWORD_DEFAULT);
				//
				$sql = "INSERT INTO owner(firstname, lastname, email, password) VALUES('$firstname', '$lastname','$email', '$password')";

				//run the query
				$result=$this->dbcon->query($sql);

				//check if theres an error
					$msg=array();
				if($this->dbcon->error){
			
					 $msg["error"] =" could not add owner details ".$this->dbcon->error;
					}

					else{
			
						$msg["success"] = " Miracle you are making progress";
					}
					return $msg;
					}
		

		//login method



					//login method
					function login($email, $password){
						//$password = password_hash($pswd, PASSWORD_DEFAULT);

						//write query
						$sql = "SELECT * from owner WHERE email='$email'";

						

						//run the query
						$result= $this->dbcon->query($sql);

						if ($result->num_rows > 0) {
							// code...
							$row = $result->fetch_assoc();
							$confirm = password_verify($password, $row['password']);
							//var_dump($confirm);
						//exit;


								
							if ($confirm) {
								// create session variables

								session_start();
								$_SESSION['ownid'] = $row['id'];
								$_SESSION['ownfirstname'] = $row['Firstname'];
								$_SESSION['ownlastname'] = $row['lastname'];
								$_SESSION['mylogchecker'] = "RT_0_0_cMeg";
								
								return true;
							}

							else{

								return false;
							}
					
					}
				}


						function comment($firstname, $lastname, $email, $comment){
				//hash passwords
				
				//
				$sql = "INSERT INTO users(firstname, lastname, email, comment) VALUES('$firstname', '$lastname','$email', '$comment')";

				//run the query
				$result=$this->dbcon->query($sql);

				//check if theres an error
					$msg=array();
				if($this->dbcon->error){
			
					 $msg["error"] =" Sorry Your Message is not delivered ".$this->dbcon->error;
					}

					else{
			
						$msg["success"] = " Miracle you are making progress";
					}
					return $msg;
					}
		
			
					//end login

				//start get libarian
				// public	function getUsers($users){
				// 	$sql = "select * FROM users WHERE user_id='$users' ";

				// 	//run the query
				// 	$result = $this->dbcon->query($sql);

				// 	if ($result ->num_rows==1) {
				// 		// code...to loop through result set and fetch all records
				// 		$row=$result->fetch_assoc();
				// 			return $row;
				// 		}else{
				// 			return "Records not found";
				// 		}

						
				// }
				//end get libarian


					
					public	function getUsers(){
					$sql = "select * FROM users";

					//run the query
					$result = $this->dbcon->query($sql);
					$records = array();

					if ($result ->num_rows > 0) {
						// code...to loop through result set and fetch all records

						while ($row = $result->fetch_assoc()) {
							$records[] = $row;
						}

						return $records;
					}

					else{
						return $records;
					}
				}


				
					//begin logout
					public function logout(){
						session_start();

						session_destroy();

						//redirect to login

						header("Location: miracle_website.php");
						exit;
					}

					//end logout

				


			}




?>

								