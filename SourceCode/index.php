<?php include "./inc/hedare.php";


?>


    <!--== Banner // Slider Area Start ==-->
    <section id="banner-area" class="banner__3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="padding-left:0px,padding-right:0px">
                    <div id="banner-carousel" class="owl-carousel">
                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap home_4_slide_1" id="carousel">
                            <div class="banner-caption">
                                <h4>A huge variety of plants </h4>
                                <h2>Greener = Happier</h2>
                                <p>Choose from a wide variety of plants.</p>
                                <a href="all.php" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Single Carousel End -->


                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap home_4_slide_2">
                            <div class="banner-caption">
                            <h4>A huge variety of plants </h4>
                                <h2>Greener = Happier</h2>
                                <p>Choose from a wide variety of plants.</p>
                                <a href="all.php" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Single Carousel End -->


                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap home_4_slide_3">
                            <div class="banner-caption">
                            <h4>A huge variety of plants </h4>
                                <h2>Greener = Happier</h2>
                                <p>Choose from a wide variety of plants.</p>
                                <a href="all.php" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Single Carousel End -->




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Banner Slider End ==-->






    <!--== Products by Category Area Start ==-->

    <section id="new-collection-area" class="p-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>Categories</h2>
                        <p>Choose from multiple categories.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div id="product-categories-area">
                <div class="ruby-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="large-size-cate">
                                <div class="row">
                                    

                                    
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div >
                            <div class="small-size-cate">
                                <div class="row">

                                


                                    <div >
                                        <div class="single-cat-item">
                                            <figure class="category-thumb">
                                                <a href="./category_page.php?catID=21"><img src="assets/img/Cleveland-Pear-Trees-.jpg" alt="Men Category" class="img-fluid"  id="catimg"/></a>

                                                <figcaption class="category-name">
                                                    <a href="./category_page.php?catID=21">Flowering Plants</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>



                                    <div >
                                        <div class="single-cat-item">
                                            <figure class="category-thumb">
                                                <a href="./category_page.php?catID=20"><img src="assets/img/hawaiian-pothos-epipremnum-aureum-proven-winners_17324.jpg" alt="Men Category" class="img-fluid" id="catimg" /></a>

                                                <figcaption class="category-name">
                                                    <a href="./category_page.php?catID=20">Indoor Plants</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>



                                    <div >
                                        <div class="single-cat-item">
                                            <figure class="category-thumb"> 
                                                <a href="./category_page.php?catID=22"><img src="assets/img/GettyImages-598322873-409b66c4895d492eb28fde9e752d98ad.jpg" alt="Men Category" class="img-fluid"   id="catimg"/></a>

                                                <figcaption class="category-name">
                                                    <a href="./category_page.php?catID=22">bonsais</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>



                                    <div >
                                        <div class="single-cat-item">
                                            <figure class="category-thumb">
                                                <a href="./all.php"> <img src="assets/img/common-houseplants-to-grow-1641843117.jpeg" alt="Men Category" class="img-fluid"  id="catimg"/></a>

                                                <figcaption class="category-name">
                                                    <a href="./all.php">All Categories</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Products by Category Area End ==-->
   </section>
  <!--== Bundles Area Start ==-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== carsoul End ==-->
   <!--  Products Area Start -->
    <div id="featured-products-wrapper" class="p-9">
        <div class="ruby-container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>Featured Products</h2>
                        <p>Trending stunning Unique</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="products-wrapper products-gird">
                <div class="row custom-padding">

                    <?php

                    $query = "SELECT * FROM proudcts  ";
                    $conn->query($query);
                    $i=rand(0,5);
                    if ($result = $conn->query($query) ) {
                        for($i;$i<8;$i++){$row = $result->fetch_assoc()   
               
                            ?>

                            <!-- Single Product Start -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="single-product-item">
                                    <figure class="product-thumb">
                                        <a href="test.php?id=<?php echo $row['product_id'] ?>"><center><?php echo "<img width='200px' highet='200px' src=" . 'admin/upload/' . $row['img'] . ">" ?></center></a>
                                    </figure>
                                    <div class="product-details">
                                        <h2><a href="single_product.php?id=<?php echo $row['product_id'] ?>"><?php echo $row["product_name"] ?></a></h2>
                                        <br><br>
                                        <span class="price"><?php echo $row["price"] . ' JOD' ?></span>
                                        <a href="single_product.php?id=<?php echo $row['product_id'] ?>" class="btn btn-add-to-cart">View Product</a>
                            
                                    </div>
                                    <!-- <span class="product-bedge">New</span> -->
                                </div>
                            </div>
                            <!-- Single Product End -->



                    <?php

                        }
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
    <!--  Products Area End -->

















   

    <!-- Scroll to Top Start -->
    <a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
    <!-- Scroll to Top End -->


    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--=== Plugins Min Js ===-->
    <script src="assets/js/plugins.js"></script>

    <!--=== Active Js ===-->
    <script src="assets/js/active.js"></script>


    </div>
    </div>









    <?php 
    include "./inc/footer.php"
     ?>



</body>

</html>