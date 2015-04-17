<center>
    <?php include('inc/products.php')?>
        
            <?php foreach($products as $product_id=> $product){ 
                  echo get_list_view_html($product_id, $product);
                } 
            ?>                   
        
</center>