<?php include_once('order-dashboard-header.php'); ?>
	<?php include_once('order-dashboard-leftside.php'); ?>
		
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right">
		        <div class="go-back-div">
		            <a href="product-dashboard-cart.php"><img src="/images/cart.png" class="arrow-icon"> <strong> Cart </strong> </a>
		        </div>
		        <div class="product-image-text-div product_cart_main_div">
		            <div class="product-cart-div">
		                <table>
                            <tbody>
                                <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                </tr>
                                
                                <tr>
                                <td class="cart-porduct">
                                <div class="cart-img"><img src="/images/full-shirt2.png"></div>
                                <div class="cart-text"><strong> Name of product </strong><br>Product category </div>
                                </td>
                                <td> <button id="remove_agent"> – </button> <span class="count">1</span> <button id="add_agent"> +</button></td>
                                <td>4500 dkk</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <!-- tab Start -->
                        <div class="cart-tab">
                            <button class="cart-tablinks active" onclick="openTab(event, 'information_self')">Write product information yourself</button> or
                            <button class="cart-tablinks" onclick="openTab(event, 'employee_chose')">Let employees choose</button>
                        </div>
                        
                        <div id="information_self" class="tabcontent active-tab">
                            <div class="yourself-title">
                                <div class="title"> Upload name list </div>
                                <div class="text"> Upload your excel name list by clicking the button </div>
                            </div>
                            <div class="add_new yourself-body">
                                <div class="add_div increase-div">
                                    <p><input type="text" class="upload-name" placeholder="write name label"></p>
                                    <p><select name="color"><option value="red">Red</option><option value="blue">Blue</option><option value="green">Green</option><option value="grey">Grey</option></select></p>
                                    <p><select name="size"><option value="red">XL</option><option value="blue">L</option><option value="green">M</option><option value="grey">S</option></select></p>
                                    <p><input type="number" placeholder=" 1 quantity"></p>
                                </div>
                            </div>
                        </div> <!-- first tab end -->
                        
                        <div id="employee_chose" class="tabcontent">
                            <h3>We have found 12 employees in your company</h3>
                            <div class="excel-manually-div">
                                <div class="excel-upload-div">
                                    <img src="/images/excel-icon.png" >
                                    <div>
                                        <h4>Import employees using excel</h4>
                                        click here to download Excel template
                                    </div>
                                </div>
                                <div class="manually-upload-div">
                                    <img src="/images/plus-icon.png" >
                                    <div>
                                        <h4>Add employees manually</h4>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- second tab end -->
                        <!-- tab end -->
                        
		            </div> <!-- product-cart-div end -->
		            
		            <div class="information-div">
		                <div class="information-formtitlediv">
    		                <div class="product-text-title">
    		                    <h5 class="blue-title">Payment Information</h5>
    		                    <div class="chooseMethod-div">
    		                        <strong> Choose your payment method </strong> <br>
    		                        <input type="radio" id="invoice" name="payment" value="invoice">
    		                        <label for="male">Invoice</label><br>
    		                        <input type="radio" id="ean_panyment" name="payment" value="ean_panyment">
    		                        <label for="female">EAN payment</label>
    		                    </div>
    		                    <form action="#" class="information_form"> 
                                  <input type="text" id="cvrnumber" placeholder="CVR Number"><br>
                                  <input type="text" id="bankaccountnr" placeholder="Bank account nr."><br>
                                  <input type="text" id="refnr" placeholder="Ref. Nr."><br>
                                  <table class="delivery_method-table">
                                      <tr class="delivery_title"><th>Choose delivery method</th><td>price</td></tr>
                                      <tr> <td> <input type="radio" id="express72" name="payment" value="express72"> <label for="male"> Express 72 </label> </td> <td> 25% of cart </td> </tr>
                                      <tr> <td> <input type="radio" id="express48" name="payment" value="express48"> <label for="male"> Express 48 </label> </td> <td> 50% of cart </td> </tr>
                                      <tr> <td> <input type="radio" id="express24" name="payment" value="express24"> <label for="male"> Express 24 </label> </td> <td> 100% of cart </td> </tr>
                                      <tr>  </tr>
                                      <tr class="blue-text"> <td> Product costs:  </td> <td> 4,500 DKK </td> </tr>
                                      <tr class="blue-text"> <td> Delivery costs:  </td> <td> 1,125 DKK </td> </tr>
                                      <tr class="blue-text"> <td> Total costs:  </td> <td> 5,625 DKK </td> </tr>
                                </table>
                                <p class="red-text"> Please fill out all fields and product information </p>
                                
                                <p class="two_btn"> <a type="submit" href="/product-dashboard-cart.php" class="goback_link"> Go back </a> <a type="submit" href="#" class="btn blue-btn twobutton"> Pay now </a> </p>
                                </form> 
                                
    		                </div>
		                </div>
		            </div>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		    
		    



		    
		    
		</div> <!-- right side end -->
	
<?php include_once('order-dashboard-footer.php'); ?>





