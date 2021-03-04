<?php
/**
 * The Template for displaying Dashboard order products.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>	
<div class="dashboard-right-side"> <!-- start dashboard right site -->
	<div class="welcome-div">
		<h4 class="blue-title"> Welcome to the shop </h4>
		<p>Here you can see all of your products click on any of them to get the right price just for you!</p>
	</div>
	<div class="status-div">
		        <select name="down-arrow" class="down-arrow">
		            <option>Category</option>
		            <option value="volvo">Category 1</option>
                    <option value="saab">Category 2</option>
                    <option value="opel">Category 3</option>
                    <option value="audi">Category 4</option>
                </select>
		    
		        <select name="down-arrow" class="down-arrow">
		            <option>Size</option>
		            <option value="volvo">XL</option>
                    <option value="saab">X</option>
                    <option value="opel">M</option>
                    <option value="audi">S</option>
                </select>
		    
		        <select name="down-arrow" class="down-arrow">
		            <option>Color</option>
		            <option value="volvo">White</option>
                    <option value="saab">Black</option>
                    <option value="opel">Red</option>
                    <option value="audi">Blue</option>
                </select>
		    
		        <select name="down-arrow" class="down-arrow">
		            <option>Brand</option>
		            <option value="volvo">Brand 1</option>
                    <option value="saab">Brand 2</option>
                    <option value="opel">Brand 3</option>
                    <option value="audi">Brand 4</option>
                </select>
		    </div>

	<div class="shop-div">
		<div class="shop-image_text-div">
			<a href="<?php echo home_url('sortiment-order-products-single') ?>">
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
			
</div> <!-- right side end -->
<?php include __DIR__ . '/dashboard-footer.php'; ?>