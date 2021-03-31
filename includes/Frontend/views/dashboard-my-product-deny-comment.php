<?php
/**
 * The Template for displaying Dashboard order My products Deny Comment.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';

global $product;
$productid = $_GET["postid"];
$product = wc_get_product( $productid );

$product_name  = $product->get_title();
$product_price = $product->get_price();

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
							<h4> <?php echo $product_name;?> </h4>
							<?php echo $product->get_image();?>
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
						<form id="denyFrom" action="" method="post">
							<div class="product-text-title">
								<h3>What was the reason for the denial</h3>
							</div>
							
							<div class="product-text-textarea">
								<textarea id="deny_message" name="deny_message" placeholder="test"></textarea>
							</div>
							
							<div class="product-text-button"> 
								<?php wp_nonce_field( 'product_deny' ); ?>
								<input type="hidden" name="action" value="company_deny_product">
								<input type="hidden" name="productid" value="<?php echo esc_attr( $productid ); ?>">
								<input type="hidden" name="product_name" value="<?php echo esc_attr( $product_name  ); ?>">
								<input type="hidden" name="product_pirce" value="<?php echo esc_attr( $product_price); ?>">
								<input type="hidden" name="deny" id="deny" value="deny">
            					<input class="btn blue-btn" type="submit" id="submit" name="submit" value="<?php esc_attr_e( 'Submit', 'softx-sortiment' ); ?>">
					
							</div>
							
						</form>
						<div class="message">
								<p class="description success"></p>
								
							</div>
		            </div>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		    
		    



		    
		    
		</div> <!-- right side end -->
<?php include __DIR__ . '/dashboard-footer.php'; ?>