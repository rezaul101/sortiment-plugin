<?php
/**
 * The Template for displaying Dashboard page.
 *
 * @package sortiment
 */
global $current_user; 
wp_get_current_user();
$user_avatar = get_avatar($current_user, 60, '', '', array('class' => 'account-holder-img'));   
?>
<div class="main-div-section">
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
                    <strong> <?php if ( is_user_logged_in() ) { 
					echo 'Welcome ' . $current_user->user_login . "\n"; } ?></strong>
                   
					<?php 
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
	
	
	<div class="main-div-row">
		<div class="dashboard-left-side">
		    <div class="left-side-menu">
		        <ul class="das_left_menu">
		            <li class="left-one active"> <a href="<?php echo SF_SORTIMENT_INCLUDES ?>/Frontend/views/"> Order Products </a> </li>
		            <li class="left-two"> <a href="<?php echo SF_SORTIMENT_INCLUDES ?>/Frontend/views/"> My Products </a> </li>
		            <li class="left-three"> <a href="<?php echo SF_SORTIMENT_INCLUDES ?>/Frontend/views/company-information.php"> Your company information </a> </li>
		            <li class="left-four"> <a href="<?php echo SF_SORTIMENT_INCLUDES ?>/Frontend/views/order-history.php"> Order history </a> </li>
		            <li class="left-five"> <a href="<?php echo SF_SORTIMENT_INCLUDES ?>/Frontend/views/ask-a-question.php"> Ask a question </a> </li>
		        </ul>
		    </div>
		    <div class="left-side-text">
		        Sortiment ApS <br/> Hansborggade 30, 6100 haderslev
		    </div>
		    <div class="left-side-contact">
		        <a href="tel:30303030"> Tlf: <strong> 30 30 30 30 </strong> </a> <br/>
		        <a href="mailto:info@sortiment.dk"> Kontakt: <strong> info@sortiment.dk </strong> </a>
		    </div>
		    <div class="left-side-social">
		        <ul class="das_left_social">
		            <li> <a href="#" target="_blank"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/facebook.png">Order Products </a> </li>
		            <li> <a href="#" target="_blank"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/instagram.png">Order Products </a> </li>
		        </ul>
		    </div>
		    
		</div><!-- left side end -->
		
		<div class="dashboard-right-side">
		    <div class="welcome-div">
		        <h4 class="blue-title"> Welcome to the shop </h4>
		        <p>Here you can see all of your products click on any of them to get the right price just for you!</p>
		    </div>
		    
		    <div class="shop-div">
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/quater-pant.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/t-shirt.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt2.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/quater-pant.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/t-shirt.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt2.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/quater-pant.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/t-shirt.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt2.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/quater-pant.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/t-shirt.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt2.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        
		    </div>
			
		</div> <!-- left side end -->
		
	</div>  <!-- row end -->
</div>  <!-- section end -->