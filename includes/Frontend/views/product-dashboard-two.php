<?php include_once('order-dashboard-header.php'); ?>
	<?php include_once('order-dashboard-leftside.php'); ?>
		
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right">
		        <div class="go-back-div">
		            <a href="product-dashboard-one.php"><img src="/images/back-arrow.png" class="arrow-icon"> <strong> Go back </strong> </a>
		        </div>
		        <div class="product-image-text-div">
		            <div class="product-image-div">
		                <div class="product-image-main">
		                    <img src="/images/product-one.jpg" calss="productimg">
		                </div>
		                <div class="product-image-thumbnail">
		                    <img src="/images/product-thumbnail-one.jpg" calss="productthumb">
		                    
		                </div>
		            </div>
		            <div class="gapdiv"></div>
		            <div class="product-text-div">
		                <div class="product-text-title">
		                    <h2>Name of product</h2>
		                </div>
		                <div class="product-text-price">
		                    Price: 500 DKK
		                </div>
		                
		                <div class="product-text-table">
		                    <table>
		                        <thead>
		                            <tr><th>Quantity</th><th>Price pr. item</th></tr>
		                        </thead>
		                        <tbody>
		                            <tr><td>0</td><td>500 DKK</td></tr>
		                            <tr><td>10</td><td>450 DKK</td></tr>
		                            <tr><td>25</td><td>430 DKK</td></tr>
		                            <tr><td>50</td><td>420 DKK</td></tr>
		                            <tr><td>100+</td><td>400 DKK</td></tr>
		                        </tbody>
		                    </table>
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
		                    <a class="btn light-btn approved approve" href="#"> Approve </a> &nbsp; <a class="btn red-btn denied deny" href="#"> Deny </a>
		                </div>
		                <div class="product-qunatity-submit">
		                    <input type="number" id="add-quantity" name="lname" value="0"> &nbsp; <a class="btn blue-btn getbutton" href="/product-dashboard-cart.php"> Order now </a>
		                </div>
		            </div>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		    
		    



		    
		    
		</div> <!-- right side end -->
	
<?php include_once('order-dashboard-footer.php'); ?>





