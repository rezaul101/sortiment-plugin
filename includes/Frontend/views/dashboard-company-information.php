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
//echo $userid;
$loginuser_id = get_current_user_id();
//echo $loginuser_id;
$get_companyid = get_user_meta($loginuser_id, 'company_id');
$set_companyid = $get_companyid[0];

$retrieve_data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}company_info WHERE company_id = $set_companyid" );


?>

	<div class="dashboard-right-side">
		    
		    <div class="product-page-right company_information_right_side">
			<?php
    			foreach ($retrieve_data as $retrieved_data){ ?>
				<div class="company-information-top">
					<?php if ( isset( $_GET['update_company_profile'] ) ) { ?>
					<div class="notice notice-success">
						<p><?php _e( 'Address has been updated successfully!', 'softx-sortiment' ); ?></p>
					</div>
					<?php } ?>
		        <h2 class="company-information-title"> Your company information <span> <?php echo esc_attr( $retrieved_data->company_name ); ?> </span></h2>
		        <div class="rightside-form-image-div">

    		        <div class="rightside-form-div">
    		            <form id="company-profile-update-form" action="#" method="post">
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
						<?php wp_nonce_field( 'company-profile' ); ?>
							<input type="hidden"  name="id" value="<?php echo $retrieved_data->company_id ; ?>">
							<input type="hidden" name="action" value="update_company_profile">
            				<input class="btn blue-btn" type="submit" id="submit" name="submit" value="<?php esc_attr_e( 'Save changes', 'softx-sortiment' ); ?>">
							
        					
        				</div>
        			</form>
						<div class="message">
						<p class="description success"></p>
						<p class="description error"></p>
						</div>
    		        </div>

    		        <div class="rightside-image-div">

						<?php 
						$user_avatar = get_avatar($current_user, 220, '', '', array('class' => 'company-information-img')); 
						if ( is_user_logged_in() ) {
							if ( ($current_user instanceof WP_User) ) {
								echo $user_avatar;
							}
						}else {
							echo ' <img src=" '. SF_SORTIMENT_ASSETS .'/images/holder.png" class="company-information-img">';
							
						}

						?>
    		            
    		        </div>
    		        
    		        
    		    </div>
    		    </div>
				<?php 
    				}
				?>

    		    <h2 class="company-information-title"> Your logo with color(s) </h2>
    		    <div class="uploadimage-div">
    		        <div class="format-div">
    		            JPG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />  
    		        </div>
    		        <div class="format-div">
    		            PNG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            AI Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            SVG Format
    		            <input type='file' id="imgInp" class="inputimage" />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            PDF Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		    </div>
    		    
    		    <h2 class="company-information-title"> Your logo in white </h2>
    		    <div class="uploadimage-div">
    		        <div class="format-div">
    		            JPG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />  
    		        </div>
    		        <div class="format-div">
    		            PNG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            AI Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            SVG Format
    		            <input type='file' id="imgInp" class="inputimage" />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            PDF Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		    </div>
    		    
    		    <h2 class="company-information-title"> Your logo in Black </h2>
    		    <div class="uploadimage-div">
    		        <div class="format-div">
    		            JPG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />  
    		        </div>
    		        <div class="format-div">
    		            PNG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            AI Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            SVG Format
    		            <input type='file' id="imgInp" class="inputimage" />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            PDF Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		    </div>
    		    
    		    <h2 class="company-information-title"> Alternative version </h2>
    		    <div class="uploadimage-div">
    		        <div class="format-div">
    		            JPG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />  
    		        </div>
    		        <div class="format-div">
    		            PNG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            AI Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            SVG Format
    		            <input type='file' id="imgInp" class="inputimage" />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            PDF Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		    </div>
		        
		    </div> <!-- rproduct-page-right div end -->  
		</div> <!-- right side end -->
	
<?php include __DIR__ . '/dashboard-footer.php'; ?>

