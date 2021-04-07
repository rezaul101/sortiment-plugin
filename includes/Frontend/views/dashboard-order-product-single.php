<?php
/**
 * The Template for displaying Dashboard order products single.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';

global $post;
$productcurID = $_GET["postid"];
$product = wc_get_product( $productcurID );

?>
		
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right">
		        <div class="go-back-div">
		            <a href="/sortiment-order-products"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/back-arrow.png" class="arrow-icon"> <strong> Go back </strong> </a>
		        </div>
		        <div class="product-image-text-div">
		            <div class="product-image-div">
		                <div class="product-image-main">
		                    
							<?php echo $product->get_image('woocommerce_thumbnail', array('class'=>'productimg'), true); ?> 
		                </div>
		                <div class="product-image-thumbnail">
							<?php
								$context = get_permalink();
								$attachment_ids = $product->get_gallery_image_ids( $context  );
								foreach( $attachment_ids as $attachment_id ) 
								{
								  echo wp_get_attachment_image($attachment_id, 'full');

								}
						
						 ?>
		                   
		                </div>
		            </div>
		            <div class="gapdiv"></div>
		            <div class="product-text-div">
		                <div class="product-text-title">
		                    <h4><?php echo  $product->get_name();  ?></h4>
		                </div>
		                <div class="product-text-price">
		                    Starting price <?php echo $product->get_price();?> DKK
		                </div>
		                <div class="product-text-subtitle">
		                    <h5>Product description</h5>
		                </div>
		                <div class="product-text-p">
		                    <p>  <?php echo $product->get_short_description(); ?> </p>
		                </div>
		                <div class="product-text-color">
		                    <strong> Color variety: <?php echo $product->get_attribute( 'color' ); ?></strong>
		                </div>
		                <div class="product-text-button">
		                    <a class="btn blue-btn getbutton" href="#" onclick="requesta_priceFormopenForm()"> Get a price now </a>
		                </div>
		            </div>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		    
		    


	<div class="form-popup" id="requesta_priceForm">
		<form id="requesta_price" action="#" class="form-container request-price-form"  method="post">
			<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/close-icon.png" class="close-icon"  onclick="closeFormrequesta_price()" /> 
			<div class="message">
				<p class="description error"></p>
				<p class="description success"></p>
				</div>
			<h3 class="request-title"><strong>Get a price for:</strong> <?php echo  $product->get_name();  ?></h3>
			
			<?php  
			global $wpdb;
			$cur_user = wp_get_current_user();


			//echo $cur_user;
			$loginuser_id = get_current_user_id();
			//echo $loginuser_id;

			$getcompany_id = get_user_meta($loginuser_id, 'company_id');
			$set_companyid = $getcompany_id[0];
			//var_dump($set_companyid);

			$retrieve_data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}company_info WHERE company_id = $set_companyid");
			foreach ($retrieve_data as $retrieved_data){ ?>


			<input type="hidden" name="company_id" id="company_id" value="<?php echo $retrieved_data-> company_id; ?>"/>
			<input type="hidden" name="company_name" id="company_name" value="<?php echo $retrieved_data-> company_name; ?>"/>
			<input type="hidden" name="company_mail" id="company_mail" value="<?php echo $retrieved_data-> company_email; ?>"/>
			<?php 
    				}
				?>
			<input type="hidden" name="product_id" id="product_id" value="product_id"/>
			<input type="hidden" name="product_name" id="product_name" value="<?php echo $product->get_name(); ?>"/>
			
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $productcurID ), 'single-post-thumbnail' );?>
			<input type="hidden" name="product_img" id="product_img" value="<?php echo  $image[0];  ?>"/>
			
			<p class="request-p_logo">
				<label for="title"><b>Do you want your logo on the product ?</b></label><br/>
				<input type="radio" id="want_logo_no" name="wantlogo" value="no" checked>
				<label for="no">No</label>
				<input type="radio" id="want_logo_yes" name="wantlogo" value="yes">
				<label for="yes">Yes</label>

			</p>
			
			<p class="request-logo_position">
				<label for="title"><b>Where do you want your logo position ?</b></label><br/>
				<input type="checkbox" id="front-left" name="logo_position[]" value="Front left">
				<label for="front-left"> Front left</label>
				<input type="checkbox" id="front-right" name="logo_position[]" value="front right">
				<label for="front-right"> Front right</label><br>
				<input type="checkbox" id="shoulder-left" name="logo_position[]" value="shoulder left">
				<label for="shoulder-left"> Shoulder left</label>
				<input type="checkbox" id="shoulder-right" name="logo_position[]" value="shoulder right">
				<label for="shoulder-right"> Shoulder right</label><br>
				<input type="checkbox" id="back-side" name="logo_position[]" value="back side">
				<label for="back-side"> On the backside</label>
			</p>
		
			<p class="request-p_text">
				<label for="title"><b>Do you want to assign a text to the product  ?</b></label><br/>
				<input type="radio" id="want_text_no" name="wanttext" value="No" checked>
				<label for="no">No</label>
				<input type="radio" id="want_text_yes" name="wanttext" value="Yes">
				<label for="yes">Yes</label>
			</p>
			
			<p class="request-text_position">
				<label for="title"><b>Where do you want your text position ?</b></label><br/>
				<input type="checkbox" id="front-left" name="text_position[]" value="front left">
				<label for="front-left"> Front left</label>
				<input type="checkbox" id="front-right" name="text_position[]" value="front right">
				<label for="front-right"> Front right</label><br>
				<input type="checkbox" id="shoulder-left" name="text_position[]" value="shoulder left">
				<label for="shoulder-left"> Shoulder left</label>
				<input type="checkbox" id="shoulder-right" name="text_position[]" value="shoulder right">
				<label for="shoulder-right"> Shoulder right</label><br>
				<input type="checkbox" id="back-side" name="text_position[]" value="back side">
				<label for="vehicle3"> On the backside</label>
			</p>
			
			<p class="note-textarea">
			<textarea type="textarea" name="custom_note" id="custom_note" placeholder="Leave a note, with further information about your acquirements."></textarea><br/>
			</p>
			
		
			<p>
			<?php wp_nonce_field( 'new-requestprice' ); ?>
        
		<input type="hidden" name="action" value="softx_sortiment_requestprice">
		<input class="btn blue-btn requestbtn" type="submit" id="submit_requestprice" name="submit_requestprice" value="<?php esc_attr_e( 'Request price', 'softx-sortiment' ); ?>">
		
			</p>
			
			</form>
			
	</div>
		    
</div> <!-- right side end -->
	
<?php include __DIR__ . '/dashboard-footer.php'; ?>





