<?php include 'layout/header.php';?>
<div class="insertPage">

	<form class="form-control" id="form2" method="POST" action="insert-site.php" enctype="multipart/form-data">
	
	<h1 class="text-center text-white"> ADD WEBSITE</h1>
	<!--Site Title-->
		<label for="title">Title</label>
		<input class="form-control" type="text" name="title"  id="title" placeholder="Title..">
	<!--Site Link-->
		<label for="link">Link</label>
		<input class="form-control" type="text" name="link"  id="link" placeholder="Link..">
	<!--Site Keyword-->
		<label for="keywords">Keywords</label>
		<textarea class="form-control" id="keywords" name="keywords" placeholder="Enter Keywords...."></textarea>
	<!--Discription -->
		<label for="disc">Discription</label>
		<textarea class="form-control" id="disc" name="disc" placeholder="Enter Discription....."></textarea>
	<!--Site image -->
		<input class="form-control" type="file" name="siteimg" id="img">
		
	<!-- Submit Button -->
		<input type="submit" name="submit" class="btn btn-primary" value="upload site">
	</form>


</div>
<?php 

include 'db/connection.php';

if (isset($_POST['submit']))
{
	$title = addslashes($_POST['title']);
	$link = addslashes($_POST['link']);
	$keywords = addslashes($_POST['keywords']);
	$disc = addslashes($_POST['disc']);
	$siteimg = $_FILES['siteimg']['name'];
	
	if (move_uploaded_file($_FILES['siteimg']['tmp_name'],"Images/".$_FILES['siteimg']['name']))
	{
		$insert = "INSERT INTO data(title , link , keywords , disc , siteimg) VALUES('$title' , '$link' , '$keywords' , '$disc' , '$siteimg')";
		$query = mysqli_query($con , $insert);
		if($query)
		{
			?>
			<script> alert('Data Uploaded Successfully') </script>
			<?php
		}else{
			?>
			<script> alert('Data Uploaded Failed') </script>
			<?php
			}
	}
	
}


?>




<?php include 'layout/footer.php';?>