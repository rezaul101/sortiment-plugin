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


//$retrieve_data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}posts WHERE  ID = $productid" );
//var_dump($retrieve_data);

$product = wc_get_product( $productid );

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

						<?php 


						$product_img = new WC_product($productid);
						$attachment_ids = $product_img->get_gallery_image_ids();
					
						foreach( $attachment_ids as $attachment_id ) 
							{
							  // Display the image URL
							  //echo $Original_image_url = wp_get_attachment_url( $attachment_id );
					
							  // Display Image instead of URL
							 $gallary_img = wp_get_attachment_image($attachment_id, 'thumbnail',  "", array( "class" => "productthumb" )  );
								echo $gallary_img ;
							}

						?>
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
						<?php //echo  $product->get_short_description();  ?>
						</div>
						<?php


						
						if ( metadata_exists( 'post', $productid, 'minimum_qty' ) &&  metadata_exists( 'post', $productid, 'custom_quantity_price' ) ) {
							$custom_minimum_qunatity_price = explode(", ", get_post_meta( $productid, 'minimum_qty', true ));
							$_customquantity_price = explode(", ", get_post_meta( $productid, 'custom_quantity_price', true ));
							//var_dump($custom_minimum_qunatity_price );
							//var_dump($_customquantity_price);
							
					 		if( $custom_minimum_qunatity_price > [0]  && $custom_minimum_qunatity_price > [0] ) {
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
								}
					}?>

		                <div class="product-text-color">
						<?php 

						
/*
						$has_row    = false;
						$attributes = $product->get_attributes();
						ob_start();
						if ( $product->is_type( 'variable' ) ) {
						?>
						<div class="product_attributes">

							<?php foreach ( $attributes as $attribute ) :

								if ( empty( $attribute['is_visible'] ) || ( $attribute['is_taxonomy'] && ! taxonomy_exists( $attribute['name'] ) ) ) 
									continue;

								$values = wc_get_product_terms( $product->get_id(), $attribute['name'], array( 'fields' => 'names' ) );
								$att_val = apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );
								if( empty( $att_val ) )
									continue;

								$has_row = true;
								?>

							<div class="col">
								<div class="att_label"><?php echo wc_attribute_label( $attribute['name'] ); ?></div>
								<div class="att_value"><?php echo $att_val; ?></div><!-- .att_value -->
							</div><!-- .col -->

							<?php endforeach; ?>

						</div><!-- .product_attributes -->
						<?php
						if ( $has_row ) {
							echo ob_get_clean();
						} else {
							ob_end_clean();
						}
					}
*/
						if ( $product->is_type( 'variable' ) ) {?>
							<p><strong> Color variety:</strong> <?php echo $product->get_attribute( 'color' ); ?></p>
							<?php
						}
						

						?>
		                </div>
		                <div  class="product-text-button">
						<form id="approvedForm" action="#" method="post"> 
							<?php wp_nonce_field( 'approve' ); ?>
                            <input type="hidden" name="productid" value="<?php echo $productid ; ?>">
							<input type="hidden" name="product_name" value="<?php echo $product->get_title(); ?>">
							<input type="hidden" name="product_pirce" value="<?php echo $product->get_price(); ?>">
							<input type="hidden" name="approve" id="approve" value="approve">
                            <input type="hidden" name="action" value="approved_porduct">
		                    <p class="approve-btn"><a class="btn light-btn approved approve" id="submit"> Approve </a></p>
							</form>
							<p class="deny-btn"><a class="btn red-btn denied deny" href="/sortiment-my-products-deny-comment?postid=<?php echo $productid ?>"> Deny </a> </p>
                        
						
		                </div>
						<div class="message">
							<p class="description success"></p>
							<span class="description error"></span>
                        </div>
		                <div class="product-qunatity-submit">
		                    <input type="number" id="add-quantity" name="add-quantity" value="0"> &nbsp; <a class="btn blue-btn getbutton" href = "javascript:;" onclick = "this.href='/sortiment-my-products-cart?postid=<?php echo $productid ?>&add-quantity=' + document.getElementById('add-quantity').value"> Order now </a>
		                </div>
		            </div>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		        
		</div> <!-- right side end -->
		
		
<?php include __DIR__ . '/dashboard-footer.php'; ?>