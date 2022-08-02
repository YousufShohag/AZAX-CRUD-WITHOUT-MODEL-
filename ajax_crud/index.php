
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AJAX FORM|| EXAM</title>


	<!--Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

    

<style>
body {
  margin: 0;
  background-color: #d6d6d6;
}

label{
	font-size: 20px;
    color: black;
    font-family: math;
}  
table{
	font-size: 20px;
    color: black;
    font-family: math;
}
</style>

</head>
<body>
<h4 class="text-center">(CRUD) using Ajax and PHP(without model)</h4>
<div class="container">
	<div class="row">
		<div class="col-md-4 mt-4 border">
			<div class="form-group pt-3">
				<div id="message">
					<!-- <div class="alert alert-danger">This Is alert</div> -->
				</div>
				<label for="">Full Name:</label>
				<input type="text" id="fName" class="form-control" placeholder="Full Name here ">
			</div>
			<div class="form-group">
				<label for="">User Name:</label>
				<input type="text" id="uName" class="form-control" placeholder="User Name here ">
			</div>
			<div class="form-group">
				<label for="">Email Address:</label>
				<input type="email" id="email" class="form-control" placeholder="Email Address here ">
			</div>
			<div class="form-group">
				<label for="">Select your status</label>
				<select name="" id="status" class="form-control">
					<option value="0">--Select Here--</option>
					<option value="1">Active</option>
					<option value="2">Inactive</option>
				</select>
			</div>
			<div class="form-group">
				
				<input type="hidden" id="id" class="form-control" placeholder="Id here ">
			</div>
			<input type="button" id="submit" value="SAVE" class="btn btn-primary form-control mb-3">

			 <input 
			style="display: none;" type="button" id="update" value="UPDATE" class="btn btn-success form-control mb-3">
		</div>
		<div class="col-md-8">
			<div class="table">
				
			</div>
		</div>
	</div>
</div>
				<!-- Needed Script -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

     <script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


		<!-- custom JS -->
        <script src="app.js"></script>
    

</body>
</body>
</html>