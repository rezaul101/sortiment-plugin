<?php
/**
 * The Template for displaying Registation page.
 *
 * @package sortiment
 */
//get_header();

?>
<div class="main-div-section">
	<div class="main-div-row login-row">
		<div class="left-side">			
			<h1 class="white-title">Create Account</h1>
			<p>Your products are waiting for you in the shop, go login<br/> and see the product for yourself</p>
			
			<div class="divider-div"></div>
			
			<div class="button-div">
				<a class="btn outline-btn" href="/login.html"> Log in</a>
			</div>
			
			<p>Do not have any account yet?<br/> Please register with the formular to the right</p>
			
			<div class="divider-div"></div>
			
			<p>If you have any questions please contact Sortiment using<br/> support@sortiment.dk or +45 50 50 50 50 </p>
			
		</div> <!-- left side end -->
		<div class="right-side">	
			<h1 class="blue-title">Create Account</h1>
			<?php echo '
			<form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
				<div class="full-div">
				<div class="half-div"> <span class="c_icon c-user"></span> <input type="text" id="name" name="name"  placeholder="Name & Last name" value="' . ( isset( $_POST['name']) ? $name : null ) . '"> </div>
				<div class="half-div"> <span class="c_icon c-users"></span> <input type="text" id="company_name" name="company_name" placeholder="Company name" value="' . ( isset( $_POST['company_name']) ? $company_name : null ) . '"> </div>
				</div>				
				
				<div class="full-div">
				<div class="half-div"> <span class="c_icon c-envelope"></span> <input type="text" id="email" name="email" placeholder="Email" value="' . ( isset( $_POST['email']) ? $email : null ) . '"> </div>
				<div class="half-div"> <span class="c_icon c-map-marker"></span> <input type="text" id="company_address" name="company_address" placeholder="Company address" value="' . ( isset( $_POST['company_address']) ? $company_address : null ) . '"> </div>
				</div>

				<div class="full-div">
				<div class="half-div"> <span class="c_icon c-key"></span> <input type="text" id="password" name="password" placeholder="Password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '"> </div>
				<div class="half-div"> <span class="c_icon c-building"></span> <input type="text" id="cvr_number" name="cvr_number" placeholder="CVR Number" value="' . ( isset( $_POST['cvr_number'] ) ? $cvr_number : null ) . '"> </div>
				</div>

				<div class="full-div">
			
					<input class="btn blue-btn" type="submit" name="submit" value="Create account"/>
				</div>
			</form>';
			?>

			<h3 class="blue-subtitle"> <a href="/login.html"> Login here </a> </h3>
		</div> <!-- left side end -->
	</div>  <!-- row end -->
</div>  <!-- section end -->

