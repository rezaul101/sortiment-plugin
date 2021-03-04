<?php 
/**
 * The Template for displaying FAQ page.
 *
 * @package sortiment
 */
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>
		
		<div class="dashboard-right-side"> 
		    <div class="question-div">
    		    <div class="question-left-side">
    		        <div class="question-left-side-title">
    		            Welcome to Sortiment LiveChat. Please to choose one of <br/> the following questions or write your own
    		        </div>
    		        <div class="question-left-side-box">
    		            <div class="qus-ans-show-div"></div>
    		            <div class="qustion-ans-div">
    		                <div class="qus-ans-input-div">
    		                    <input type="text" placeholder="Write your message here">
    		                </div>
    		                <div class="qus-ans-img-div">
    		                    <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/image-icon.png" class="">
    		                </div>
    		                <div class="qus-ans-btn-div">
    		                    <a class="btn blue-btn qus-ans-btn" href="#"> Send message <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/paper-plane.png" class=""> </a>
    		                </div>
    		            </div>
    		        </div>
    		    </div>
    		    <div class="question-right-side">
    		        <div class="question-right-side-title">
    		            <h4>Your products</h4>
    		        </div>
    		        <div class="shop-image_text-div question-product">
    		            <a href="/product-dashboard-two.php">
    		            <span class="status-text pending"> Pending approved </span>
    		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt1.png" class="shop-image">
    		            <h5> Name of product</h5>
    		            <p>Request a price</p>
    		            </a>
    		        </div>
    		        <div class="shop-image_text-div question-product">
    		            <a href="#">
    		            <span class="status-text approved"> Approved </span>
    		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/quater-pant.png" class="shop-image">
    		            <h5> Name of product</h5>
    		            <p>Request a price</p>
    		            </a>
    		        </div>
    		        <div class="shop-image_text-div question-product">
    		            <a href="#">
    		            <span class="status-text denied"> Denied </span>
    		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/t-shirt.png" class="shop-image">
    		            <h5> Name of product</h5>
    		            <p>Request a price</p>
    		            </a>
    		        </div>
    		    </div>
		    </div>
		     
		</div> <!-- right side end -->
<?php include __DIR__ . '/dashboard-footer.php'; ?>





