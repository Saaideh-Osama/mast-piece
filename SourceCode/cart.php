<?php include "./inc/hedare.php";

$sum=0;




if (isset($_GET['del'])) {
    $del = $_GET['del'];
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($key == $del) {
                unset($_SESSION['cart'][$key]);
                header("refresh:0");
            }
        }
    }}

  
        if (isset($_SESSION['cart'])) {
            if (isset($_POST['update'])) {
                foreach ($_SESSION['cart'] as $keys => $value) {
                  $ids= $_POST['id'];
                    foreach ($_POST as $key => $value) {
                        if (isset($_POST['quantity'])) {

                            $_SESSION['cart'][$ids]['quantity'] = $_POST['quantity'];
                            // header("location:view_cart.php");
                        }
                    }
                }
            }

            }

?>


<body>

    <br><br><br><br><br>



    <!--== Page Title Area Start ==-->
    <div id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-title-content">
                        <h1>Shopping Cart</h1>
                        <!-- <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop-left-full-wide.html">Shop</a></li>
                        <li><a href="cart.html" class="active">Cart</a></li>
                    </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Page Title Area End ==-->

    <!--== Page Content Wrapper Start ==-->
    <div id="page-content-wrapper" class="p-9">
        <div class="container">
            <!-- Cart Page Content Start -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="background-color:black ;">
                                    <th class="pro-thumbnail">Item image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if (isset($_SESSION["cart"])) {
                                    $sum=0;
                                foreach ($_SESSION['cart'] as $key => $value) { 
                                    $sum+= ($value['product_price']* $value['quantity']);
                                ?>

                                            <tr>
                                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="admin/upload/<?php echo $value['product_image'] ?>" alt="Product" /></a></td>
                                                <td class="pro-title"><a href="#"><?php echo $value['product_name'] ; ?></a></td>
                                                <td class="pro-price"><span>( <?php echo $value['product_price'] ?> ) JOD</span></td>
                                                <td class="pro-quantity">
                                                    <div class="pro-qty"><input type="text" value="<?php echo $value['quantity'] ?>"></div>
                                                </td>
                                                <td class="pro-subtotal"><span><?php echo ( $value['product_price']* $value['quantity'])?></span></td>
                                                <td class="pro-remove"><form action="" method="GET"><button type="submit" name="del" value="<?php echo $value['product_id'] ?>"><i class="fa fa-trash-o"></i></button></form></td>
                                            </tr>

                                            <?php }
                                    }
                                 ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-lg-flex">

                        <div class="apply-coupon-wrapper">
                            <form action="#" method="post" class=" d-block d-md-flex">
                                <input type="text" placeholder="Enter Your Coupon Code" />
                                <button class="btn-add-to-cart">Apply Coupon</button>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="col-lg-6 ml-auto">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper"  >
                        <h3 style="background-color:black ;">Cart Totals</h3>
                        <div  class="cart-calculate-items">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>( <?php  echo $sum; ?> ) JOD</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>( 10 ) JOD</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="total-amount">( <?php  echo $sum+10; ?> ) JOD</td>
                                    </tr>
                                </table>
                            </div>
                        </div>



                        
                                <form action="./checkout.php" method="post"><button class="btn-add-to-cart" type="submit" name="chechout">Proceed To Checkout</button></form>
                    </div>
                </div>
            </div>
            <!-- Cart Page Content End -->

         
        </div>
    </div>
    <!--== Page Content Wrapper End ==-->

 
  

      <?php  include "./inc/footer.php" ?>


    </footer>




</body>

</html>

