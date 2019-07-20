



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<div class="panel panel-default">
<div class="panel-heading">Submit Your Comments</div>
  <div class="panel-body">
	<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
  	<form method="post">
  	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Subject</label>
	    <textarea name="subject" class="form-control" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>


<?php
require('connect.php');
if(isset($_POST) & !empty($_POST)){
	$name = mysqli_real_escape_string($connection, $_POST['name']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$subject = mysqli_real_escape_string($connection, $_POST['subject']);

	$isql = "INSERT INTO comments (name, email, subject, status) VALUES ('$name', '$email', '$subject', 'draft')";
	$ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
	if($ires){
		$smsg = "Your Comment Submitted Successfully";
	}else{
		$fmsg = "Failed to Submit Your Comment";
	}

}
?>
