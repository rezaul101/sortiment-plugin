<?php


//global $current_user; 
//wp_get_current_user();
//global $wpdb;

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
                    <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/cart.png" class="header-cart"> 0,00 DKK In cart
                </div>
                <div class="accountdiv">
                    <strong> <?php 
                    $current_user = wp_get_current_user();
                    if ( is_user_logged_in() ) { 
					echo 'Welcome : ' . $current_user->user_login . "<br/>"; 
					echo ' <a href="'.wp_logout_url(home_url('registation')).'" title="Logout"> Logout</a>';} 
					else { 
						echo '<a href="'. home_url('login').'" title="Login">Login</a>';
						} ?> </strong>
					<!--<a href="<?php //echo wp_logout_url( home_url('registation')); ?>" title="Logout">Logout</a>-->

					<?php 
                    $user_avatar = get_avatar($current_user, 60, '', '', array('class' => 'account-holder-img')); 
					if ( is_user_logged_in() ) {
						if ( ($current_user instanceof WP_User) ) {
							echo $user_avatar;
						}
					}else {
						echo ' <img src=" '. SF_SORTIMENT_ASSETS .'/images/holder.png" class="account-holder-img">';
						
					}

					?>
                </div>
            </div>
        </div> <!-- dashboard header right end -->
	</div> <!-- header-div-row end -->
	
	
