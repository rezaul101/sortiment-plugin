<?php
/**
 * The Template for displaying Registation page.
 *
 * @package sortiment
 */
//get_header();

//use Softx\Sortiment\Sortiment_Registation;
//namespace Softx\Sortiment\Frontend\views;

?>
<div class="main-div-section">
	<div class="main-div-row login-row">
		<div class="left-side">			
			<h1 class="white-title">Create Account</h1>
			<p>Your products are waiting for you in the shop, go login<br/> and see the product for yourself</p>
			
			<div class="divider-div"></div>
			
			<div class="button-div">
				<a class="btn outline-btn" href="/login"> Log in</a>
			</div>
			
			<p>Do not have any account yet?<br/> Please register with the formular to the right</p>
			
			<div class="divider-div"></div>
			
			<p>If you have any questions please contact Sortiment using<br/> support@sortiment.dk or +45 50 50 50 50 </p>
			
		</div> <!-- left side end -->
		<div class="right-side">	
			<h1 class="blue-title">Create Account</h1>
			
			<form action="" method="post" id="userRegistationFrom">
				<div class="full-div">
				<div class="half-div"> <span class="c_icon c-user"></span> <input type="text" id="name" name="name"  placeholder="Name & Last name"> </div>
				<div class="half-div"> <span class="c_icon c-users"></span> <input type="text" id="company_name" name="company_name" placeholder="Company name"> </div>
				</div>				
				
				<div class="full-div">
				<div class="half-div"> <span class="c_icon c-envelope"></span> <input type="email" id="company_email" name="company_email" placeholder="Email"> </div>
				<div class="half-div"> <span class="c_icon c-map-marker"></span> <input type="text" id="company_address" name="company_address" placeholder="Company address"> </div>
				</div>

				<div class="full-div">
				<div class="half-div"> <span class="c_icon c-key"></span> <input type="text" id="password" name="password" placeholder="Password"> </div>
				<div class="half-div"> <span class="c_icon c-building"></span> <input type="text" id="cvr_number" name="cvr_number" placeholder="CVR Number"> </div>
				</div>

				<div class="full-div">
					<?php wp_nonce_field( 'new-user' ); ?>
					<input type="hidden" name="action" value="softx_sortiment_registation">
            		<input class="btn blue-btn" type="submit" id="submit" name="submit" value="<?php esc_attr_e( 'Create account', 'softx-sortiment' ); ?>">
				</div>
			</form>
			

			<h3 class="blue-subtitle"> <a href="/login"> Login here </a> </h3>
		</div> <!-- left side end -->
	</div>  <!-- row end -->
</div>  <!-- section end -->

