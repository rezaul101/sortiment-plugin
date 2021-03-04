<?php
/**
 * The Template for displaying Dashboard My products.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>
		
		<div class="dashboard-right-side">
		    <div class="welcome-div">
		        <h4 class="blue-title"> Welcome to the shop </h4>
		        <p>Here you can see all of your products click on any of them to get the right price just for you!</p>
		    </div>
			<div class="status-div">
		        <select name="down-arrow" class="down-arrow">
		            <option>Choose status</option>
		            <option value="volvo">Pending Approval</option>
                    <option value="saab">Approved</option>
                    <option value="opel">Denied</option>
                    <option value="audi">Ordered</option>
                </select>
		    </div>
		    
		    <div class="shop-div">
		        <div class="shop-image_text-div">
		            <a href="<?php echo home_url('sortiment-my-products-single') ?>">
					<span class="status-text pending"> Pending approved </span>	
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
					 <span class="status-text approved"> Approved </span>
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/quater-pant.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
					<span class="status-text denied"> Denied </span>	
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/t-shirt.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
					<span class="status-text ordered"> Ordered </span>
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
		    </div> <!-- shop div end -->
		</div> <!-- right side end -->
	
<?php include __DIR__ . '/dashboard-footer.php'; ?>
