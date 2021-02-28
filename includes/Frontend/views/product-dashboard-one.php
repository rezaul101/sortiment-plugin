<?php 
	include __DIR__ . '/order-dashboard-header.php';
	include __DIR__ . '/order-dashboard-leftside.php';

?>

		
		<div class="dashboard-right-side"><!-- start dashboard right site -->
		    <div class="welcome-div">
		        <h4 class="blue-title"> Welcome to your products </h4>
		        <p>Here you can see the special deals we have made just for you, with all the special needs of your choice.</p>
		    </div>
		    
		    <div class="status-div">
		        <select name="cars" id="cars">
		            <option>Choose status</option>
		            <option value="volvo">Pending Approval</option>
                    <option value="saab">Approved</option>
                    <option value="opel">Denied</option>
                    <option value="audi">Ordered</option>
                </select>
		    </div>
		    
		    <div class="shop-div">
		        <div class="shop-image_text-div">
		            <a href="/product-dashboard-two.php">
		            <span class="status-text pending"> Pending approved </span>
		            <img src="/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <span class="status-text approved"> Approved </span>
		            <img src="/images/quater-pant.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <span class="status-text denied"> Denied </span>
		            <img src="/images/t-shirt.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <span class="status-text ordered"> Ordered </span>
		            <img src="/images/full-shirt2.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/quater-pant.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/t-shirt.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/full-shirt2.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/quater-pant.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/t-shirt.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/full-shirt2.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/quater-pant.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/t-shirt.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        <div class="shop-image_text-div">
		            <a href="#">
		            <img src="/images/full-shirt2.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		    </div> <!-- shop div end -->
		</div> <!-- right side end -->

<?php 
//include __DIR__ . '/order-dashboard-footer.php';
//get_template_part('order-dashboard-footer' );
?>
