jQuery(document).ready(function() {

	showtData();
	jQuery("#submit").click(function(){
		insertData();

	});

	jQuery(document).on('click','#deleteid', function(e){
			var id=jQuery(this).val();
			deleteData(id);
	});

	jQuery(document).on('click','#editid', function(e){
			var id=jQuery(this).val();
			datafind(id);
			jQuery('#update').show();
			jQuery('#submit').hide();
	});

	jQuery("#update").click(function(){
		updateData();
	});

});

function insertData(){
	var check = "insert";
	var fName = jQuery("#fName").val();
	var uName = jQuery("#uName").val();
	var email = jQuery("#email").val();
	var status = jQuery("#status").val();

	$.ajax({
		url:"process.php",
		type:"POST",
		data:{
			check:check,
			fName:fName,
			uName:uName,
			email:email,
			status:status
		},
		success:function(response){
			jQuery("#message").html(response);
			jQuery(".alert").fadeOut(3000);
			jQuery("#fName").val("");
			jQuery("#uName").val("");
			jQuery("#email").val("");
			jQuery("#status").html('<option value="1">==Select Here==</option><option value="1">Active</option><option value="2">Inactive</option>');
			showtData();
		}
	});
}//insert Function Ending

function showtData(){
	var check = "show";

	$.ajax({
		url:"process.php",
		type:"POST",
		data:{
			check:check
		},
		success:function(response){
			jQuery(".table").html(response);
		}
	});

}//showdDdata Function Ending


function deleteData(id){
	var check = "delete";	

	$.ajax({
		url:"process.php",
		type:"POST",
		data:{
			check:check,
			id:id
		},
		success:function(response){
			jQuery("#message").html(response);
			jQuery(".alert").fadeOut(3000);
			showtData();
		}
	});

}//Delete Function Ending


function datafind(id){
	var check = "find";
	$.ajax({
		url:"process.php",
		type:"POST",
		dataType:"JSON",
		data:{
			check:check,
			id:id
		},
		success:function(response){
			jQuery("#fName").val(response.fName);
			jQuery("#uName").val(response.uName);
			jQuery("#email").val(response.email);
			jQuery("#status").val(response.status);
			jQuery("#id").val(response.id);
		}
	});
}//Datafind Function Ending

function updateData(){
	var check = "update";

	var fName = jQuery("#fName").val();
	var uName = jQuery("#uName").val();
	var email = jQuery("#email").val();
	var status = jQuery("#status").val();
	var id = jQuery("#id").val();


	$.ajax({
		url:"process.php",
		type:"POST",
		data:{
			check:check,
			fName:fName,
			uName:uName,
			email:email,
			status:status,
			id:id
		},
		success:function(response){
			jQuery("#message").html(response);
			jQuery(".alert").fadeOut(3000);
			jQuery("#fName").val("");
			jQuery("#uName").val("");
			jQuery("#email").val("");
			jQuery("#status").val("0");
			jQuery("#id").val("");
			showtData();
			jQuery('#update').hide();
			jQuery('#submit').show();
			
		}
	});
}//Update Function Ending


