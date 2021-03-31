<?php
/**
 * The Template for displaying Dashboard products Cart Page.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';

// global $wpdb;   
// $loginuser_id = get_current_user_id();
// $current_user = wp_get_current_user();
// $get_companyid = get_user_meta($loginuser_id, 'company_id');
// $set_companyid = $get_companyid[0];

global $product;
$productid = $_GET["postid"];
$productquantity = $_GET["add-quantity"];
$product = wc_get_product( $productid );

$terms = get_the_terms( $productid , 'product_cat' );
$nterms = get_the_terms( $productid , 'product_tag'  );
foreach ($terms  as $term  ) {                    
    $product_cat_id = $term->term_id;              
    $product_cat_name = $term->name;            
    break;
}

?>
		
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right">
		        <div class="go-back-div">
		            <a href="/sortiment-my-products-cart?postid=<?php echo $productid ?>"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/cart.png" class="arrow-icon"> <strong> Cart </strong> </a>
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
                                <div class="cart-img"><?php echo $product->get_image(); ?></div>
                                <div class="cart-text"><strong> <?php echo $product->get_title(); ?> </strong><br><?php echo $product_cat_name;?></div>
                                </td>
                                <td> <button id="remove_agent"> – </button> <span class="count"><?php echo $productquantity; ?></span> <button id="add_agent"> +</button></td>
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
                                    <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/excel-icon.png" >
                                    <div>
                                        <h4>Import employees using excel</h4>
                                        click here to download Excel template
                                    </div>
                                </div>
                                <div class="manually-upload-div" onclick="openForm()">
                                    <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/plus-icon.png" >
                                    <div>
                                        <h4>Add employees manually</h4>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- second tab end -->
                        <!-- tab end -->
                        
		            </div> <!-- product-cart-div end -->
		            <?php
                   // $retrieve_data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}company_info WHERE company_id = $set_companyid" );
                    //foreach ($retrieve_data as $retrieved_data){ 
                    ?>
		            <div class="information-div">
		                <div class="information-formtitlediv">
    		                <div class="product-text-title">
    		                    <h5 class="blue-title">Your Information</h5>
    		                    <form id="company-profile-update-form" action="#" method="post" class="information_form"> 
                                <input type="text" id="name" name="name" placeholder="Name" value="<?php echo esc_attr( $current_user->user_login ); ?>"> 
                                <input type="email" id="company_email" name="company_email" placeholder="Email" value="<?php echo esc_attr( $retrieved_data->company_email ); ?>"> 
                                <input type="text" id="phone_number" name="phone_number" placeholder="+00 00 00 00" value="<?php echo esc_attr( $retrieved_data->phone_number ); ?>"> 
                                <input type="text" id="company_name" name="company_name" placeholder="Company Name" value="<?php echo esc_attr( $retrieved_data->company_name ); ?>">
                                <input type="text" id="zip_code" name="zip_code" placeholder="Zip Code" value="<?php echo esc_attr( $retrieved_data->zip_code ); ?>">  
                                <input type="text" id="company_address" name="company_address" placeholder="Company address" value="<?php echo esc_attr( $retrieved_data->company_address ); ?>"> 
                                <?php wp_nonce_field( 'company-profile' ); ?>
                                    <input type="hidden"  name="id" value="<?php echo $retrieved_data->company_id ; ?>">
                                    <input type="hidden" name="action" value="update_company_profile">
                                    <a id="submit" name="submit" type="submit" href="/sortiment-my-products-checkout?postid=<?php echo $productid ?>" class="btn blue-btn getbutton"> Next </a> 	
                                    </div>
                                        <div class="message">
                                            <p class="description success"></p>
                                            <p class="description error"></p>
                                    </div>
                                </div>
                             </form> 
    		                </div>
		                </div>
		            </div>
                    <?php 
    			//	}
				?>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->    
			
			<div class="form-popup addemployee" id="myForm">
               
               <form action="#" class="form-container addemployee-form">
                   <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/close-icon.png" class="close-icon"  onclick="closeForm()" />     
                   
                   <div class="modal-header">
                        <h3 class="request-title"><strong>Add employees manually</strong></h3>
                        <p class="sub-title"> We will automatically generate a user and password for each employee </p>
                   </div>     
                   <div class="request-form">
                       <div class="name-field">
                           <label for="title"><b>Name & Last name</b></label>
                           <input type="text" id="fullname" name="fullname" placeholder="Employee name" >
                       </div>
                       <div class="email-field">
                           <label for="email"> <b>Email</b> </label>
                           <input type="text" id="email" name="email" placeholder="Employee email">
                       </div>
                       
                    </div>
                   
                   <div class="buttn-item">
                       <a class="btn add-btn addanotherbtn" href="#"> Add another </a>
                       <a class="btn blue-btn requestbtn" href="#"> Done </a>
                   </div>    
               </form>
           </div>
			
			
		</div> <!-- right side end -->
	
<?php include __DIR__ . '/dashboard-footer.php'; ?>





