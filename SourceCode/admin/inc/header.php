<?php 
// include '../lib/Session.php';
// Session::checkSession();

 ?>
<?php
//   header("Cache-Control: no-cache, must-revalidate");
//   header("Pragma: no-cache");
//   header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
//   header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    
    <?php 
echo "<link rel='stylesheet' type='text/css' href='css/reset.css?'".mt_rand().">";
?>

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
    body{
      background-color: #2E5E79;
    }
  </style>

    <!-- <script type="text/javascript" src="js/table/table.js"></script> -->
    <!-- <script src="js/setup.js" type="text/javascript"></script> -->
     <!-- <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script> -->

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <h1 style="color:red">Dashbord</h1>
                </div>
                <div class="floatright">
                    <div class="floatleft">
                        <!-- <img src="img/img-profile.jpg" alt="Profile Pic" /></div> -->
                        <?php 
                        if (isset($_GET['action']) && $_GET['action'] == "logout") {
                            header('Location: ../logout.php');
                        }
                         ?>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                           
                            <li><a href="?action=logout"><button style="border:0px;background-color:tranparent;" class="button-87">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"/><path d="M11 2h2v10h-2z"/></svg>
			</button></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li ><a href="dashboard.php"><span>Dashboard</span></a> </li>
                <li><a href="inbox.php" ><span>Orders</span></a></li>
                <li ><a href="../index.php" target="_blank"><span>Visit Website</span></a></li>
            </ul>
        </div>
        
    

