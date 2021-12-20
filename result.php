<?php include 'layout/header.php';?>

<div class="result_page">
	<div class="header">
	<h1>Searchify</h1>
		<form class="form-control" method="POST">
			<div class="input-group mb-3">
			
			
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
			
			<input class="form-control" type="text" name="searchTxt" placeholder="Search Here..">
			
			
			<button id="searchBtn" name="search" class="btn btn-success" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</div>
	<div class="container"style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
	<?php
	include 'db/connection.php';
	$search = $_GET['search'];
	$select = "SELECT * FROM data WHERE  keywords like '%{search}%' OR disc like '%{$search}%' OR title like  '%{$search}%' OR  link like '%{$search}%'";
	$query = mysqli_query($con , $select);
	while ($result = mysqli_fetch_assoc($query))
	{
		?>
			<div class="card" style="width:100%; border: none; border-radius: 0px; background: transparent; color: #fff;">
				<h3 class="card-title ml-3"><?php echo $result['title'];?></h3>
				<a class="ml-3 " href="<?php echo $result['link'] ?>" style="color: red;"><?php echo $result['link']; ?></a>
				<div class="card-body">
					<p><?php echo $result['disc']; ?></p>
				</div>
				<img src="Images/<?php echo $result['siteimg']?>" style="width: 200px;"
			</div>
			
		<?php
		
		
	}
	
	?>
	</div>
</div>





<?php include 'layout/footer.php';?>