<?php
$conn = mysqli_connect("localhost","root","","project4");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT COUNT(*) FROM proudcts";
$sql1 = "SELECT COUNT(*) FROM users";
$sql2 = "SELECT COUNT(*) FROM reviews";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
?>

<head>
  <meta charset="UTF-8">
  <title>CodePen - Users Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
<?php $products_number = "SELECT COUNT(product_id) FROM proudcts;";
	$resulttt = $conn->query($products_number); ?>
</head>
<body onload="hello();">
<!-- partial:index.partial.html -->

		
	<div class="sections"> 
	<div class="menu-wrap" style="width:50vw;margin-top:5vh">
	
		<nav>
			<section class="dicover">
				<h3>User options</h3>
				
				<ul>
					<li>
						<a href="Super.php" id="asf" onclick="hello();"  >
							<svg width="24" height="24" viewBox="0 0 24 24">
								<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
							  </svg>Edit users
						</a>
					</li>
					
					</ul>
			</section>
		
			<section class="tools">
				<h3>Category Option</h3>
				
				<ul>
					<li>
						<a href="catlist.php" class="active" id="scroll" >
							<svg width="24" height="24" viewBox="0 0 24 24">
								<path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"></path>
							  </svg>	Category List
						</a>
					</li>	
					
					<li>
						<a href="catadd.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 7L11 7 11 11 7 11 7 13 11 13 11 17 13 17 13 13 17 13 17 11 13 11z"/><path d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z"/></svg>
							Add Category
						</a>
					</li>
					
					
				</ul>
			</section>
			
			<section class="dicover">
				<h3>Product Option</h3>
				
				<ul>
					<li>
						<a href="insert_product.php">
							<svg width="24" height="24" viewBox="0 0 24 24">
								<path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
							  </svg>
							Add Product
						</a>
					</li>
					
				
					
					<li>
						<a href="productlist.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21,3h-4V2h-2v1H9V2H7v1H3C2.447,3,2,3.447,2,4v17c0,0.553,0.447,1,1,1h18c0.553,0,1-0.447,1-1V4C22,3.447,21.553,3,21,3z M7,5v1h2V5h6v1h2V5h3v3H4V5H7z M4,20V10h16v10H4z"/><path d="M11,15.586l-1.793-1.793l-1.414,1.414l2.5,2.5C10.488,17.902,10.744,18,11,18s0.512-0.098,0.707-0.293l5-5l-1.414-1.414 L11,15.586z"/></svg>
							Product List
						</a>
					</li>
					
					
				</ul>


			</section>
<section class="dicover"> 
	<h3> Comments </h3>
	<ul> 
<li> <a href="comments.php"> 
	<svg width="24" height="24" viewBox="0 0 24 24">
	  <path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"></path>
	</svg>User comments </a></li>

	</ul>

</section>

		</nav>
		
	</div>
	
	<main class="content-wrap">
			
					
			<div class="content">
				<section class="info-boxes">
					<div class="info-box">
						<div class="box-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z"/><path d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z"/></svg>
						</div>
						
						<div class="box-content">
							<span class="big"><?php $row = mysqli_fetch_array($result);
echo "products number: " . $row[0]; ?></span>
							
							Current price ($)
						</div>
					</div>
					
					<div class="info-box">
						<div class="box-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 10H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1zm-1 10H5v-8h14v8zM5 6h14v2H5zM7 2h10v2H7z"/></svg>
						</div>
						
						<div class="box-content">
							<span class="big">132</span>
							Related articles
						</div>
					</div>
					
					<div class="info-box active">
						<div class="box-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3,21c0,0.553,0.448,1,1,1h16c0.553,0,1-0.447,1-1v-1c0-3.714-2.261-6.907-5.478-8.281C16.729,10.709,17.5,9.193,17.5,7.5 C17.5,4.468,15.032,2,12,2C8.967,2,6.5,4.468,6.5,7.5c0,1.693,0.771,3.209,1.978,4.219C5.261,13.093,3,16.287,3,20V21z M8.5,7.5 C8.5,5.57,10.07,4,12,4s3.5,1.57,3.5,3.5S13.93,11,12,11S8.5,9.43,8.5,7.5z M12,13c3.859,0,7,3.141,7,7H5C5,16.141,8.14,13,12,13z"/></svg>
						</div>
						
						<div class="box-content">
							<span class="big"><?php $row1 = mysqli_fetch_array($result1);
echo "registered users: " . $row1[0]; ?></span>
							
						</div>
					</div>
					
					<div class="info-box">
						<div class="box-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
						</div>
						
						<div class="box-content">
							<span class="big"><?php $row2 = mysqli_fetch_array($result2);
echo "registered users: " . $row2[0]; ?></span>
							reviews on products
						</div>
					</div>
				</section>
			
				
			</div>
		</main>
</div>

</div>
<script type="text/javascript">
    function hello(){
		swal("request loaded", "scroll to bottom to see the section!", "warning");

    }
	
</script>

<!-- partial -->




<?php $conn->close();
?>