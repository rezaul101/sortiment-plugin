<?php
/**
 * The Template for displaying Dashboard order My products single.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';
//global $post;
global $product;
$productid = $_GET["postid"];
//echo $productid;

//$retrieve_data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}posts WHERE  ID = $productid" );
//var_dump($retrieve_data);

$product = wc_get_product( $productid );

//$post = get_post( $productId );

//var_dump($product);

?>	
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right">
		        <div class="go-back-div">
		            <a href="<?php echo home_url('sortiment-my-products') ?>"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/back-arrow.png" class="arrow-icon"> <strong> Go back </strong> </a>
		        </div>
		        <div class="product-image-text-div">
		            <div class="product-image-div">
		                <div class="product-image-main">
		                    <!--<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/product-one.jpg" calss="productimg">-->
							<?php 
							 
							echo $product->get_image();
							
							?>
		                </div>
		                <div class="product-image-thumbnail">
		                    <!--<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/product-thumbnail-one.jpg" calss="productthumb">-->
		                    
		                </div>
		            </div>
		            <div class="gapdiv"></div>
		            <div class="product-text-div">
		                <div class="product-text-title">
		                    <h2><?php echo $product->get_title(); ?></h2>
		                </div>
		                <div class="product-text-price">
		                    <?php echo $product->get_price_html();  ?>
		                </div>
		                <div  class="product-text-shortdescrition">
						<?php echo  $product->get_short_description();  ?>
						</div>
						<?php			
						if(!empty($product->get_meta('minimum_qty'))){
							$custom_minimum_qunatity_price = explode(", ",$product->get_meta('minimum_qty'));	
							$_customquantity_price = explode(", ",$product->get_meta('custom_quantity_price'));
						}	

						if (!empty($custom_minimum_qunatity_price)) {  
							echo '<table class="custom_product_price_table">
								<thead>
								<tr><th>Quantity</th><th>Price pr. item</th></tr>
								</thead>
								<tbody>';
								for ($i=0; $i < count($custom_minimum_qunatity_price); $i++) {
									echo '<tr>
										<td>'. $custom_minimum_qunatity_price[$i].'</td>
										<td>'.$_customquantity_price[$i].'</td>
										</tr>';
									}
							echo '</tbody>
								</table>';
						}?>

		                <div class="product-text-color">
						<?php 

						 if ($product->is_type('variable')) {
							foreach ($product->get_children() as $variation_product_id) {
								$products[] = wc_get_product($variation_product_id);
							}
						} else {
							$products[] = $product;
						}

						?>
		                </div>
		                <div class="product-text-button">
		                    <p><a class="btn light-btn approved approve" href="#"> Approve </a> &nbsp; <a class="btn red-btn denied deny" href="#"> Deny </a></p>
		                </div>
		                <div class="product-qunatity-submit">
		                    <input type="number" id="add-quantity" name="lname" value="0"> &nbsp; <a class="btn blue-btn getbutton" href="<?php echo home_url('sortiment-my-products-cart') ?>"> Order now </a>
		                </div>
		            </div>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		        
		</div> <!-- right side end -->
		
		

		


		
		
<?php include __DIR__ . '/dashboard-footer.php'; ?>