<?php
/**
 * The Template for displaying Dashboard Order Status.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>	
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right">
		        <div class="go-back-div">
		            <a href="#"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/history.png" class="arrow-icon"> <strong> Order status </strong> </a>
		            <a class="order_link"> <strong> Viewing order: #1 </strong> </a>
		        </div>
		        
		        
		        <div class="product-image-text-div order-status-div">
    		        <div class="product-cart-div">
    		            <div class="product-status-div"> <a href="<?php echo home_url( 'sortiment-order-status-step2' ) ?>">
        		            <div class="order-status-table">
        		                <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/right.png" class="table-icon">
        		            </div>
        		            <div class="order-status-table o-s-t-img">
        		                <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/bag.png" class="table-icon">
        		            </div>
        		            <div class="order-status-table">
        		                <p> <strong> Order placed </strong> <br/> we have receive your order. </p>
        		            </div>
        		            <div class="order-status-table">
        		                <p> <strong> 3 February 14:11 </strong>  </p>
        		            </div>
    		            </a></div>
    		        </div>
    		        
    		        <div class="information-div order-status-details">
    		            <div class="order-status-image-div">
    		                <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/product-one.jpg" calss="productimg">
    		            </div>
    		            <div class="order-status-details-div">
    		                <p> <strong> Name of product </strong> </p>
    		                <p> <strong> 10 stk. </strong> </p>
    		                <p> <strong> Sizes: </strong> 1s. 2m. 2L. 5XL </p>
    		                <p> <strong> <span> Total costs: </span> 4,500 DKK </strong> </p>
    		            </div>
    		            <div class="order-status-details-div">
    		                <p> <strong> <span> Delivery Address </span> </strong> </p>
    		                <p> Headergaver 19, </p>
    		                <p> 6000 kolding </p>
    		            </div>
    		            <div class="order-status-details-div">
    		                <p> <strong> <span> Estimate delivery date </span> </strong> </p>
    		                <p> 21 march </p>
    		            </div>
    		        </div>
    		        
    		    </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		    
		    
		</div> <!-- right side end -->
<?php include __DIR__ . '/dashboard-footer.php'; ?>





