<?php
/**
 * The Template for displaying Dashboard Company Information.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';

global $wpdb;    
$current_user = wp_get_current_user();
$userid = $current_user->ID;
$profile_pic =  get_user_meta( $userid , 'ss_pro_pic', true );
// clolor logo 
$companycolor_jpg =  get_user_meta( $userid , 'colorlogo_jpg', true );
$companycolor_png =  get_user_meta( $userid , 'colorlogo_png', true );
$companycolor_ai =   get_user_meta( $userid , 'colorlogo_ai', true );
$companycolor_svg =  get_user_meta( $userid , 'colorlogo_svg', true );
$companycolor_pdf =  get_user_meta( $userid , 'colorlogo_pdf', true );
// white logo 
$companywhite_jpg =  get_user_meta( $userid , 'whitelogo_jpg', true );
$companywhite_png =  get_user_meta( $userid , 'whitelogo_png', true );
$companywhite_ai =   get_user_meta( $userid , 'whitelogo_ai', true );
$companywhite_svg =  get_user_meta( $userid , 'whitelogo_svg', true );
$companywhite_pdf =  get_user_meta( $userid , 'whitelogo_pdf', true );
// black logo 
$companyblack_jpg =  get_user_meta( $userid , 'blacklogo_jpg', true );
$companyblack_png =  get_user_meta( $userid , 'blacklogo_png', true );
$companyblack_ai =   get_user_meta( $userid , 'blacklogo_ai', true );
$companyblack_svg =  get_user_meta( $userid , 'blacklogo_svg', true );
$companyblack_pdf =  get_user_meta( $userid , 'blacklogo_pdf', true );
// alter logo 
$companyalt_jpg =  get_user_meta( $userid , 'altlogo_jpg', true );
$companyalt_png =  get_user_meta( $userid , 'altlogo_png', true );
$companyalt_ai =   get_user_meta( $userid , 'altlogo_ai', true );
$companyalt_svg =  get_user_meta( $userid , 'altlogo_svg', true );
$companyalt_pdf =  get_user_meta( $userid , 'altlogo_pdf', true );

//var_dump($userid);
//echo $loginuser_id;
$loginuser_id = get_current_user_id();
$get_companyid = get_user_meta($loginuser_id, 'company_id');
$set_companyid = $get_companyid[0];

$retrieve_data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}company_info WHERE company_id = $set_companyid" );


?>

	<div class="dashboard-right-side">
		    
		    <div class="product-page-right company_information_right_side">
			<?php
    			foreach ($retrieve_data as $retrieved_data){ ?>
				<div class="company-information-top">
		        <h2 class="company-information-title"> Your company information <span> <?php echo esc_attr( $retrieved_data->company_name ); ?> </span></h2>
		        <div class="rightside-form-image-div">
				<form id="company-profile-update-form" action="#" method="post">	
    		        <div class="rightside-form-div">
    		           
        				<div class="full-div">
        					<div class="half-div"> <label>Company name</label> 
								<input type="text" id="company_name" name="company_name" placeholder="Company name here" value="<?php echo esc_attr( $retrieved_data->company_name ); ?>"> 
							</div>
        					<div class="half-div"> <label>Zip code</label> 
								<input type="text" id="zip_code" name="zip_code" placeholder="Zip Code" value="<?php echo esc_attr( $retrieved_data->zip_code ); ?>"> 
							</div>
        				</div>				
        				
        				<div class="full-div">
							<div class="half-div"> <label>Contact person</label> 
								<input type="text" id="contact_person" name="contact_person" placeholder="Name of contact person" value="<?php echo esc_attr( $retrieved_data->contact_person ); ?>"> 
							</div>
							<div class="half-div"> <label>Address</label> 
								<input type="text" id="company_address" name="company_address" placeholder="Company address" value="<?php echo esc_attr( $retrieved_data->company_address ); ?>"> 
							</div>
        				</div>
        
        				<div class="full-div">
							<div class="half-div"> <label>Phone number</label> 
								<input type="text" id="phone_number" name="phone_number" placeholder="+00 00 00 00" value="<?php echo esc_attr( $retrieved_data->phone_number ); ?>"> 
							</div>
							<div class="half-div"> <label>Address 2</label> 
								<input type="text" id="company_address_2" name="company_address_2" placeholder="Company Address 2" value="<?php echo esc_attr( $retrieved_data->company_address_2 ); ?>"> 
							</div>
        				</div>
						<div class="full-div">
							<div class="half-div"> <label>Bookingkeeper</label> 
								<input type="email" id="bookingkeepere_email" name="bookingkeepere_email" placeholder="boghlderi@degnmarketing.dk" value="<?php echo esc_attr( $retrieved_data->bookingkeepere_email ); ?>"> 
							</div>
							<div class="half-div"> <label>CVR-Number</label> 
								<input type="text" id="cvr_number" name="cvr_number" placeholder="25252525" value="<?php echo esc_attr( $retrieved_data->cvr_number ); ?>"> 
							</div>
        				</div>
        
        				<div class="full-div">
						<?php wp_nonce_field( 'company-profile' ); ?>
							<input type="hidden"  name="id" value="<?php echo $retrieved_data->company_id ; ?>">
							<input type="hidden" name="action" value="update_company_profile">
            				<input class="btn blue-btn" type="submit" id="submit" name="submit" value="<?php esc_attr_e( 'Save changes', 'softx-sortiment' ); ?>">	
        				</div>
							<div class="message">
								<p class="description success"></p>
								<p class="description error"></p>
							</div>
    		        </div>

    		        <div class="rightside-image-div">
					<?php 
						$image  = wp_get_attachment_image_src($profile_pic, 220, '', '');

						if ( !empty($image) ) {
							echo ' <img src=" '. $image[0] .'" class="company-information-img" id="ss-img">';
						
						}else {
							echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/holder.png" class="company-information-img" id="upload_img">';
							
						}	

					?>
	                <!--<img class="company-information-img" id="ss-img" src="<?php // echo !empty($profile_pic) ? $image[0] : ''; ?>" style="<?php // echo  empty($profile_pic) ? 'display:none;' :'' ?>" /> -->
	                <input type="hidden" class="button" name="ss_image_id" id="ss_image_id" value="<?php echo !empty($profile_pic) ? $profile_pic : ''; ?>" />
					<input type="button" data-id="ss_image_id" data-src="ss-img" class="button ss-image" name="ss_image" id="ss-image" value="" />

    		        </div>
    		        
				</form> 
    		    </div>
    		    </div>
				<?php 
    				}
				?>

    		    <h2 class="company-information-title"> Your logo with color(s) </h2>
				<form action="" method="post" id="company_color_logo_form" enctype="multipart/form-data">
					<div class="uploadimage-div">
						<div class="format-div">
							JPG Format
							<input type="hidden" name="colorlogo_jpg_id" id="colorlogo_jpg_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companycolor_jpg, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="colorlogo_jpg">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="colorlogo_jpg">';
								
							}
							?>  
						</div>
						<div class="format-div">
							PNG Format
							<input type="hidden" name="colorlogo_png_id" id="colorlogo_png_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companycolor_png, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="colorlogo_png">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="colorlogo_png">';
								
							}
							?>  
    		        	</div>
						<div class="format-div">
							AI Format
							<input type="hidden" name="colorlogo_ai_id" id="colorlogo_ai_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companycolor_ai, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="colorlogo_ai">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="colorlogo_ai">';
								
							}
							?> 
						</div>
						<div class="format-div">
							SVG Format
							<input type="hidden" name="colorlogo_svg_id" id="colorlogo_svg_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companycolor_svg, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="colorlogo_svg">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="colorlogo_svg">';
								
							}
							?> 
						</div>
						<div class="format-div">
							PDF Format
							<input type="hidden" name="colorlogo_pdf_id" id="colorlogo_pdf_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companycolor_pdf, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="colorlogo_pdf">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="colorlogo_pdf">';
								
							}
							?> 
						</div>

					</div>
					<div class="full-div">
							<?php wp_nonce_field( 'company-profile-color-logo' ); ?>
							<input type="hidden" name="action" value="profile_color_logo">
							<input class="btn blue-btn" type="submit" id="submit" name="submit" value="<?php esc_attr_e( 'Save changes', 'softx-sortiment' ); ?>">	
					</div>
						<div class="message">
							<p class="description success2" style="color:green"></p>
							<p class="description error"></p>
						</div>
    		    </form>
    		    <h2 class="company-information-title"> Your logo in white </h2>
				<form action="" method="post" id="company_white_logo_form" enctype="multipart/form-data">
					<div class="uploadimage-div">
						<div class="format-div">
							JPG Format
							<input type="hidden" name="whitelogo_jpg_id" id="whitelogo_jpg_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companywhite_jpg, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="whitelogo_jpg">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="whitelogo_jpg">';
								
							}
							?>  
						</div>
						<div class="format-div">
							PNG Format
							<input type="hidden" name="whitelogo_png_id" id="whitelogo_png_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companywhite_png, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="whitelogo_png">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="whitelogo_png">';
								
							}
							?>  
    		        	</div>
						<div class="format-div">
							AI Format
							<input type="hidden" name="whitelogo_ai_id" id="whitelogo_ai_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companywhite_ai, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="whitelogo_ai">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="whitelogo_ai">';
								
							}
							?> 
						</div>
						<div class="format-div">
							SVG Format
							<input type="hidden" name="whitelogo_svg_id" id="whitelogo_svg_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companywhite_svg, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="whitelogo_svg">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="whitelogo_svg">';
								
							}
							?> 
						</div>
						<div class="format-div">
							PDF Format
							<input type="hidden" name="whitelogo_pdf_id" id="whitelogo_pdf_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companywhite_pdf, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="whitelogo_pdf">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="whitelogo_pdf">';
								
							}
							?> 
						</div>

					</div>
					<div class="full-div">
							<?php wp_nonce_field( 'company-profile-white-logo' ); ?>
							<input type="hidden" name="action" value="profile_white_logo">
							<input class="btn blue-btn" type="submit" id="submit" name="submit" value="<?php esc_attr_e( 'Save changes', 'softx-sortiment' ); ?>">	
					</div>
						<div class="message">
							<p class="description success3" style="color:green"></p>
							<p class="description error"></p>
						</div>
    		    </form>
    		    
    		    <h2 class="company-information-title"> Your logo in Black </h2>
				<form action="" method="post" id="company_black_logo_form" enctype="multipart/form-data">
					<div class="uploadimage-div">
						<div class="format-div">
							JPG Format
							<input type="hidden" name="blacklogo_jpg_id" id="blacklogo_jpg_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyblack_jpg, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="blacklogo_jpg">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="blacklogo_jpg">';
								
							}
							?>  
						</div>
						<div class="format-div">
							PNG Format
							<input type="hidden" name="blacklogo_png_id" id="blacklogo_png_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyblack_png, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="blacklogo_png">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="blacklogo_png">';
								
							}
							?>  
    		        	</div>
						<div class="format-div">
							AI Format
							<input type="hidden" name="blacklogo_ai_id" id="blacklogo_ai_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyblack_ai, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="blacklogo_ai">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="blacklogo_ai">';
								
							}
							?> 
						</div>
						<div class="format-div">
							SVG Format
							<input type="hidden" name="blacklogo_svg_id" id="blacklogo_svg_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyblack_svg, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="blacklogo_svg">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="blacklogo_svg">';
								
							}
							?> 
						</div>
						<div class="format-div">
							PDF Format
							<input type="hidden" name="blacklogo_pdf_id" id="blacklogo_pdf_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyblack_pdf, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="blacklogo_pdf">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="blacklogo_pdf">';
								
							}
							?> 
						</div>

					</div>
					<div class="full-div">
							<?php wp_nonce_field( 'company-profile-black-logo' ); ?>
							<input type="hidden" name="action" value="profile_black_logo">
							<input class="btn blue-btn" type="submit" id="submit" name="submit" value="<?php esc_attr_e( 'Save changes', 'softx-sortiment' ); ?>">	
					</div>
						<div class="message">
							<p class="description success4" style="color:green"></p>
							<p class="description error"></p>
						</div>
    		    </form>
    		    
    		    <h2 class="company-information-title"> Alternative version </h2>
				<form action="" method="post" id="company_alt_logo_form" enctype="multipart/form-data">
					<div class="uploadimage-div">
						<div class="format-div">
							JPG Format
							<input type="hidden" name="altlogo_jpg_id" id="altlogo_jpg_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyalt_jpg, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="altlogo_jpg">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="altlogo_jpg">';
								
							}
							?>  
						</div>
						<div class="format-div">
							PNG Format
							<input type="hidden" name="altlogo_png_id" id="altlogo_png_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyalt_png, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="altlogo_png">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="altlogo_png">';
								
							}
							?>  
    		        	</div>
						<div class="format-div">
							AI Format
							<input type="hidden" name="altlogo_ai_id" id="altlogo_ai_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyalt_ai, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="altlogo_ai">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="altlogo_ai">';
								
							}
							?> 
						</div>
						<div class="format-div">
							SVG Format
							<input type="hidden" name="altlogo_svg_id" id="altlogo_svg_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyalt_svg, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="altlogo_svg">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="altlogo_svg">';
								
							}
							?> 
						</div>
						<div class="format-div">
							PDF Format
							<input type="hidden" name="altlogo_pdf_id" id="altlogo_pdf_id" class="inputimage" value="" />
							<?php 
							$image  = wp_get_attachment_image_src($companyalt_pdf, 130, '', '');
							if ( !empty($image) ) {
								echo ' <img src=" '. $image[0] .'" class="upload-img" id="altlogo_pdf">';
							}else {
								echo ' <img src="'. SF_SORTIMENT_ASSETS .'/images/upload-icon.png" class="upload-img" id="altlogo_pdf">';
								
							}
							?> 
						</div>

					</div>
					<div class="full-div">
							<?php wp_nonce_field( 'company-profile-alt-logo' ); ?>
							<input type="hidden" name="action" value="profile_alt_logo">
							<input class="btn blue-btn" type="submit" id="submit" name="submit" value="<?php esc_attr_e( 'Save changes', 'softx-sortiment' ); ?>">	
					</div>
						<div class="message">
							<p class="description success5" style="color:green"></p>
							<p class="description error"></p>
						</div>
    		    </form>
		        
		    </div> <!-- rproduct-page-right div end -->  
		</div> <!-- right side end -->
	
<?php include __DIR__ . '/dashboard-footer.php'; ?>

