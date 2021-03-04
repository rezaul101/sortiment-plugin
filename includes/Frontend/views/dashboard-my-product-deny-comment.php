<?php
/**
 * The Template for displaying Dashboard order My products Deny Comment.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>	
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right">
		        <div class="go-back-div">
		            <a href="<?php echo home_url('sortiment-my-products') ?>"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/back-arrow.png" class="arrow-icon"> <strong> Go back </strong> </a>
		        </div>
		        <div class="product-image-text-div">
		            <div class="product-image-div">
		                <div class="product-image-main">
		                    <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/product-one.jpg" calss="productimg">
		                </div>
		                <div class="product-image-thumbnail">
		                    <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/product-thumbnail-one.jpg" calss="productthumb">
		                    
		                </div>
		            </div>
		            <div class="gapdiv"></div>
		            <div class="product-text-div">
		                <div class="product-text-title">
		                    <h3>What was the reason for the denial</h3>
		                </div>
		                
		                <div class="product-text-textarea">
		                    <textarea placeholder="test"></textarea>
		                </div>
		                
		                <div class="product-text-button">
		                    <a class="btn blue-btn" href="#"> Submit </a> 
		                </div>
		            </div>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		    
		    



		    
		    
		</div> <!-- right side end -->
<?php include __DIR__ . '/dashboard-footer.php'; ?>