<?php

	$con = new mysqli("localhost","root","","ajax_crud");

	$check = $_POST['check'];
	$check();


	function insert(){
		global $con;

		$fName = $_POST['fName'];
		$uName = $_POST['uName'];
		$email = $_POST['email'];
		$status = $_POST['status'];

		if (empty($_POST['fName'])) {
			echo '<div class="alert alert-danger">First Name are need</div>';
		}
		else{
			$result = $con->query("INSERT INTO users(fName,uName,email,status)VALUES('$fName','$uName','$email','$status')");
			if ($result) {
				echo '<div class="alert alert-success">Data Inserted Success</div>';
			}else{
				echo '<div class="alert alert-danger">Data Not Inserted Success</div>';
			}
		}
	} //inser function Ending Here.


	function show(){
		global $con;
		$result = $con->query("SELECT *FROM users");

		if ($result->num_rows>0) {
			
			$output = '<table class="table mt-4" border="1">
						<thead><tr>
								<th>Full Name</th>
								<th>User Name</th>
								<th>Email Address</th>
								<th>Action</th>
								
							</thead></tr>';
			while($data = $result->fetch_assoc()){
				$output .= '<tr>
								<td>'.$data['fName'].'</td>
								<td>'.$data['uName'].'</td>
								<td>'.$data['email'].'</td>
								<td>
									<button class="btn btn-primary btn-sm" id="editid" value="'.$data['id'].'"><i class="fa-solid fa-file-pen"></i></button>

									<button class="btn btn-danger btn-sm" id="deleteid" value="'.$data['id'].'"><i class="fa-solid fa-trash"></i></button>
								</td>
							</tr>';

						
			}$output .= '</table>';
			echo $output;
		}
		else{
			echo '<div class="alert alert-danger">Data Not Found</div>';
		}
	}//show function ending here.....

	function delete(){

		global $con;

		$id = $_POST['id'];

		$result = $con->query("DELETE FROM users WHERE id='$id'");
		 echo '<div class="alert alert-danger">Delete Success</div>';
	}//Delete function Ending Here.

	function find(){
		$id = $_POST['id'];

		global $con;
		$result = $con->query("SELECT *FROM users WHERE id='$id'");
		$result = $result->fetch_assoc();
		echo json_encode($result);
	} //Data Find function Ending Here.
	
	function update(){
		global $con;
		$id = $_POST['id'];
		$fName = $_POST['fName'];
		$uName = $_POST['uName'];
		$email = $_POST['email'];
		$status = $_POST['status'];

		$result = $con->query("UPDATE users SET fName='$fName', uName='$uName', email='$email', status='$status' WHERE id='$id'");
		echo '<div class="alert alert-success">Updated Success</div>';
	}//Data Update function Ending Here.

?>