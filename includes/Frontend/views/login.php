<?php
/**
 * The Template for displaying Login.
 *
 * @package sortiment
 */


?>
<div class="main-div-section">
	<div class="main-div-row login-row">
		<div class="left-side">			
			<h1 class="white-title">Welcome to Sortiment</h1>
			<p>Your products are waiting for you in the shop, go login<br/> and see the product for yourself</p>
			
			<div class="divider-div"></div>
			
			<div class="button-div">
				<a class="btn outline-btn" href="/sortiment-registation"> Create Account</a>
			</div>
			
			<p>All ready have an account?<br/> Please login with the formular to the right</p>
			
			<div class="divider-div"></div>
			
			<p>If you have any questions please contact Sortiment using<br/> support@sortiment.dk or +45 50 50 50 50 </p>
			
		</div> <!-- left side end -->
		<div class="right-side">
				
			<h1 class="blue-title">Log in</h1>
			<form action=""  method="post" id="userLoginFrom" >
				<div class="full-div">
					<div class="half-div"> <span class="c_icon c-user"></span> 
						<input type="text" id="username" name="username" placeholder="Enter username or emailaddress"> 
					</div>		
				</div>
				<div class="full-div">
					<div class="half-div"> <span class="c_icon c-key"></span> 
						<input type="password" id="password" name="password" placeholder="Password"> 
					</div>				
				</div>

				<div class="full-div">
					<?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>	
					<input type="hidden" name="action" value="softx_sortiment_login">
					<input class="btn blue-btn create-btn" type="submit" id="submit" name="submit" value="<?php esc_attr_e( 'Login', 'softx-sortiment' ); ?>">
				</div>
			</form>
				<div class="message">
					<p class="description error"></p>
					<p class="description success"></p>
				</div>
			<h3 class="blue-subtitle"> <a href="<?php echo home_url('sortiment-registation') ?>"> Create account </a> </h3>
		</div> <!-- left side end -->
	</div>  <!-- row end -->
</div>  <!-- section end -->
