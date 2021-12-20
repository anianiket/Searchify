<?php include 'layout/header.php';?>

<div	class="body">
	<form class="form-control" id="form" method="POST" action="index.php">
		<div class="logo"><h1 class="text-center">Searchify</h1> </div>
		<!--Search Area-->
		<div class="input-group mb-3">
			<input id="searchBox"type="text" name="searchTxt"class="form-control" placeholder="Search here.......">
			<?php
			include 'db/connection.php';
			if (isset($_POST['search']))
			{
			  $search_result = addslashes($_POST['searchTxt']);
			  ?>
			  <script> window.location.href="result.php?search=<?php echo $search_result ?>";</script>
			  <?php 
			}
			?>
			<button id="searchBtn" name="search" class="btn btn-success" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
		</div>
		
	</form>
</div>
<?php include 'layout/footer.php';?>