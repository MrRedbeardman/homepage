<!--PHP HEADER INCLUDE BEGIN-->
<?php include('inc/header.php');?>
<!--PHP HEADER INCLUDE END-->

<!--PHP CAROUSEL INCLUDE BEGIN-->
<?php include('inc/carousel.php');?>
<!--PHP CAROUSEL INCLUDE END-->

<hr class="featurette-divider">
<!--MAIN CONTENT-->
        <div id="main-content">
            <?php include('inc/products.php'); ?>
            <center>
            <ul id="imageGallery">
                <?php foreach($products as $product_id=> $product){ 
                      echo get_list_view_html($product_id, $product);
                    } 
                ?>                   
            </ul>
            </center>
            
            
            
        </div>
<!--END MAIN CONTENT-->
<hr class="featurette-divider">

<!--PHP MARKETING BUBBLES INCLUDE BEGIN-->
<?php include('inc/marketing.php');?>
<!--PHP MARKETING BUBBLES INCLUDE END-->

<hr class="featurette-divider">

<!--PHP FOOTER INCLUDE BEGIN-->
<?php include('inc/footer.php');?>
<!--PHP FOOTER INCLUDE END-->
<!--END OF INDEX.PHP-->
        