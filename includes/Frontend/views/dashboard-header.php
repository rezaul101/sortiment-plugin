<?php


global $wpdb;
$current_user = wp_get_current_user();
$userid = $current_user->ID;
$profile_pic =  get_user_meta( $userid , 'ss_pro_pic', true );


$loginuser_id = get_current_user_id();
$get_companyid = get_user_meta($loginuser_id, 'company_id');
$set_companyid = $get_companyid[0];
$retrieve_data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}company_info WHERE company_id = $set_companyid" );

?>
<div class="main-div-section"> <!-- start main div -->
	<div class="header-div-row">
        <div class="dh-leftside">
            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/logo.png" class="dashboard-logo" />
        </div> <!-- dashboard header left end -->
        <div class="dh-rightside">
            <div class="search-container">
                <form action="#">
                    <button class="search-btn" type="submit"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/search.png" class="header-search"></button>
                    <input class="product-search" type="text" placeholder="Search for a product.." name="search">
                </form>
            </div>
            <div class="cart-account-div">
                <div class="cartdiv">
                <?php global $woocommerce; ?>
                <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                    <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/cart.png" class="header-cart">
                   <?php echo sprintf ( _n( '<span class="item-cart">%d item</span>', '<span class="item-cart">%d items</span>', 
                   WC()->cart->get_cart_contents_count() ), 
                   WC()->cart->get_cart_contents_count() ); 
                   ?> – <?php echo WC()->cart->get_cart_total(); ?> In cart</a>
                </div>
                <div class="accountdiv">
                    <strong> <?php 
                    $current_user = wp_get_current_user();
 
                    if ( is_user_logged_in() ) { 
                        foreach ($retrieve_data as $retrieved_data){
                            //echo 'Welcome : ' . $current_user->user_login . "<br/>"; 
                        echo 'Welcome : ' . $retrieved_data->company_name . "<br/>"; 
                        echo ' <a href="'.wp_logout_url(home_url('sortiment-registation')).'" title="Logout"> Logout</a>';
                        }
                     } else { 
						echo '<a href="'. home_url('sortiment-login').'" title="Login">Login</a>';
						} ?> </strong>
					<!--<a href="<?php //echo wp_logout_url( home_url('registation')); ?>" title="Logout">Logout</a>-->

					<?php 

                    $image  = wp_get_attachment_image_src($profile_pic, 60, '', '');
                    //echo $image;
                    if ( !empty($image ) && is_user_logged_in()  ) {
                        
                         echo ' <img src=" '. $image[0] .'" class="account-holder-img">';
                      
                    
                    }else {
                        echo ' <img src=" '. SF_SORTIMENT_ASSETS .'/images/holder.png" class="account-holder-img">';
                        
                    }
					?>
                </div>
            </div>
        </div> <!-- dashboard header right end -->
	</div> <!-- header-div-row end -->
	
	
