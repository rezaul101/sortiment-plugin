<?php 


		include_once('order-dashboard-header.php');
		include_once('order-dashboard-leftside.php'); 

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
    		                    <img src="/images/image-icon.png" class="">
    		                </div>
    		                <div class="qus-ans-btn-div">
    		                    <a class="btn blue-btn qus-ans-btn" href="#"> Send message <img src="/images/paper-plane.png" class=""> </a>
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
    		            <img src="/images/full-shirt1.png" class="shop-image">
    		            <h5> Name of product</h5>
    		            <p>Request a price</p>
    		            </a>
    		        </div>
    		        <div class="shop-image_text-div question-product">
    		            <a href="#">
    		            <span class="status-text approved"> Approved </span>
    		            <img src="/images/quater-pant.png" class="shop-image">
    		            <h5> Name of product</h5>
    		            <p>Request a price</p>
    		            </a>
    		        </div>
    		        <div class="shop-image_text-div question-product">
    		            <a href="#">
    		            <span class="status-text denied"> Denied </span>
    		            <img src="/images/t-shirt.png" class="shop-image">
    		            <h5> Name of product</h5>
    		            <p>Request a price</p>
    		            </a>
    		        </div>
    		    </div>
		    </div>
		    
		    



		    
		    
		</div> <!-- right side end -->
	
<?php include_once('order-dashboard-footer.php'); ?>





