<?php
/**
 * The Template for displaying Dashboard Order History.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>
		
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right">
		        <div class="go-back-div">
		            <a href="#"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/history.png" class="arrow-icon"> <strong> Order history </strong> </a>
		            <a class="order_link"> <strong> Number of order: #7 </strong> </a>
		        </div>
		        <div class="order-history-div">
		            <table class="order-history-table">
		                <thead>
		                    <tr>
		                        <th>Order number</th> 
								<th>Product(s)</th> 
								<th>Quantity</th> 
								<th>Total</th> 
								<th>Status</th> 
								<th>Actions</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <td><strong>Order: #1<strong></td> 
								<td>Name of product</td> <td>10</td> 
								<td>4,500</td> <td class="status-td"><span>Received</span></td> 
								<td class="action-td"> 
									<a href="<?php echo home_url( 'sortiment-order-status') ?>"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-.png" class="table-icon"> </a> 
								   <a href="#"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/v-dot.png" class="table-icon"></a> </td>
		                    </tr>
		                    <tr>
		                        <td><strong>Order: #2<strong></td> 
								<td>Name of product<br/> Name of product</td> 
								<td>10</td> <td>4,500</td> 
								<td class="status-td completed"><span>Completed</span></td> 
								<td class="action-td">
								<a href="<?php echo home_url( 'sortiment-order-status') ?>"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-.png" class="table-icon"> </a>  
									<a href="#"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/v-dot.png" class="table-icon"></a>  
									<a href="#"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/pdf-icon.png" class="table-icon"></a>  
									<a href="#"><img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/order-black.png" class="table-icon"> </a> </td>
		                    </tr>
		                    <tr>
		                        <td><strong>Order: #3<strong></td> 
								<td>Name of product</td> <td>10</td> 
								<td>4,500</td> <td class="status-td"><span>Started</span></td> 
								<td class="action-td">
								<a href="<?php echo home_url( 'sortiment-order-status') ?>"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-.png" class="table-icon"> </a> 
									<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/v-dot.png" class="table-icon"> </td>
		                    </tr>
		                    <tr>
		                        <td><strong>Order: #4<strong></td> 
								<td>Name of product</td> <td>10</td> <td>4,500</td> 
								<td class="status-td"><span>Waiting employees details</span></td> 
								<td class="action-td">
								<a href="<?php echo home_url( 'sortiment-order-status') ?>"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-.png" class="table-icon"> </a>  
									<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/v-dot.png" class="table-icon"> </td>
		                    </tr>
		                    <tr>
		                        <td><strong>Order: #5<strong></td> 
								<td>Name of product</td> <td>10</td> <td>4,500</td> 
								<td class="status-td"><span>Finished</span></td> 
								<td class="action-td">
								<a href="<?php echo home_url( 'sortiment-order-status') ?>"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-.png" class="table-icon"> </a> 
									<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/v-dot.png" class="table-icon"> </td>
		                    </tr>
		                    <tr>
		                        <td><strong>Order: #6<strong></td> 
								<td>Name of product</td> <td>10</td> 
								<td>4,500</td> <td class="status-td"><span>Sent</span></td> 
								<td class="action-td">
								<a href="<?php echo home_url( 'sortiment-order-status') ?>"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-.png" class="table-icon"> </a> 
									<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/v-dot.png" class="table-icon"> </td>
		                    </tr>
		                    <tr>
		                        <td><strong>Order: #7<strong></td> 
								<td>Name of product<br/> Name of product</td> 
								<td>10</td> <td>4,500</td> 
								<td class="status-td completed"><span>Completed</span></td> 
								<td class="action-td">
								<a href="<?php echo home_url( 'sortiment-order-status') ?>"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-.png" class="table-icon"> </a> 
									<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/v-dot.png" class="table-icon"> 
									<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/pdf-icon.png" class="table-icon"> 
									<img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/order-black.png" class="table-icon"> </td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
		    </div> <!-- rproduct-page-right div end -->
		  
		</div> <!-- right side end -->
	
<?php include __DIR__ . '/dashboard-footer.php'; ?>





