<?php include_once('order-dashboard-header.php'); ?>
	<?php include_once('order-dashboard-leftside.php'); ?>
		
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right">
		        <div class="go-back-div">
		            <a href="order-dashboard-one.php"><img src="/images/back-arrow.png" class="arrow-icon"> <strong> Go back </strong> </a>
		        </div>
		        <div class="product-image-text-div">
		            <div class="product-image-div">
		                <div class="product-image-main">
		                    <img src="/images/main-shirt.jpg" calss="productimg">
		                </div>
		                <div class="product-image-thumbnail">
		                    <img src="/images/yellow-shirt.jpg" calss="productthumb">
		                    <img src="/images/red-shirt.jpg" calss="productthumb">
		                    <img src="/images/blue-shirt.jpg" calss="productthumb">
		                    <img src="/images/green-shirt.jpg" calss="productthumb">
		                </div>
		            </div>
		            <div class="gapdiv"></div>
		            <div class="product-text-div">
		                <div class="product-text-title">
		                    <h2>Name of product</h2>
		                </div>
		                <div class="product-text-price">
		                    Starting price 500 DKK
		                </div>
		                <div class="product-text-subtitle">
		                    <h5>Product description</h5>
		                </div>
		                <div class="product-text-p">
		                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was </p>
		                </div>
		                <div class="product-text-color">
		                    <strong> Color variety: </strong>
		                    <div class="color-div grey"></div>
		                    <div class="color-div yellow"></div>
		                    <div class="color-div red"></div>
		                    <div class="color-div blue"></div>
		                    <div class="color-div green"></div>
		                </div>
		                <div class="product-text-button">
		                    <a class="btn blue-btn getbutton" href="#" onclick="openForm()"> Get a price now </a>
		                </div>
		            </div>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		    
		    


<div class="form-popup" id="myForm">
    <form action="#" class="form-container request-price-form">
        <img src="/images/close-icon.png" class="close-icon"  onclick="closeForm()" /> 
        <h3 class="request-title"><strong>Get a price for:</strong> " Name of product "</h3>
        
        <p class="request-p_logo">
        <label for="title"><b>Do you want your logo on the product ?</b></label>
        <input type="radio" id="no" name="logo" value="no" checked>
        <label for="no">No</label>
        <input type="radio" id="yes" name="logo" value="yes">
        <label for="yes">Yes</label>
        </p>
        
        <p class="request-logo_position">
        <label for="title"><b>Where do you want your logo position ?</b></label><br>
        <input type="checkbox" id="front-left" name="front-left" value="front-left">
        <label for="front-left"> Front left</label>
        <input type="checkbox" id="front-right" name="front-right" value="front-right">
        <label for="front-right"> Front right</label><br>
        <input type="checkbox" id="shoulder-left" name="shoulder-left" value="shoulder-left">
        <label for="shoulder-left"> Shoulder left</label>
        <input type="checkbox" id="shoulder-right" name="shoulder-right" value="shoulder-right">
        <label for="shoulder-right"> Shoulder right</label><br>
        <input type="checkbox" id="back-side" name="back-side" value="back-side">
        <label for="vehicle3"> On the backside</label><br><br>
        </p>
    
        <p class="request-p_text">
        <label for="title"><b>Do you want to assign a text to the product  ?</b></label>
        <input type="radio" id="no1" name="assigntext" value="no1" checked>
        <label for="no">No</label>
        <input type="radio" id="yes1" name="assigntext" value="yes1">
        <label for="yes">Yes</label>
        </p>
        
        <textarea placeholder="Leave a note, with further information about your acquirements."></textarea><br/>
    
        <a class="btn blue-btn requestbtn" href="/order-dashboard-one.php"> Request price </a>
        
    </form>
</div>
		    
		    
		</div> <!-- right side end -->
	
<?php include_once('order-dashboard-footer.php'); ?>





