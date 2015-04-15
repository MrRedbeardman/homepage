<center>
    <?php include('inc/products.php')?>
        <ul id="imageGallery">
            <?php foreach($products as $product_id=> $product){ 
                  echo get_list_view_html($product_id, $product);
                } 
            ?>                   
        </ul>
</center>