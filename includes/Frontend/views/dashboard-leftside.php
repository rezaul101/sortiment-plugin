<?php 

?>
<div class="main-div-row"> <!-- start main div row -->
		<div class="dashboard-left-side"> <!-- start dashboard left site -->
		    <div class="left-side-menu">
				<?php
				
					if ( is_user_logged_in() && 'company' === $role_name || 'administrator' === $role_name ) { ?>

					<ul class="das_left_menu">
		            <li class="left-one active"> <a href="<?php echo home_url('sortiment-order-products') ?>"> Order Products </a> </li>
		            <li class="left-two"> <a href="<?php echo home_url('sortiment-my-products') ?>"> My Products </a> </li>
		            <li class="left-three"> <a href="<?php echo home_url('sortiment-company-information') ?>"> Your company information </a> </li>
		            <li class="left-four"> <a href="<?php echo home_url('sortiment-your-employees') ?>"> Your Employees </a> </li>
		            <li class="left-five"> <a href="<?php echo home_url('sortiment-order-history') ?>"> Order history </a> </li>
		            <li class="left-six"> <a href="<?php echo home_url('sortiment-ask-a-question') ?>"> Ask a question </a> </li>
		        	</ul>

					<?php
					 } elseif ( is_user_logged_in() && 'employee' === $role_name  ) {?>
						<ul class="das_left_menu">
						<li class="left-two active"> <a href="<?php echo home_url('sortiment-my-products') ?>"> My Products </a> </li>
						<li class="left-five"> <a href="<?php echo home_url('sortiment-order-history') ?>"> Order history </a> </li>
						<li class="left-six"> <a href="<?php echo home_url('sortiment-ask-a-question') ?>"> Ask a question </a> </li>
		        		</ul>

					<?php
					 }
					 
					 ?>


					<!--<ul class="das_left_menu">
		            <li class="left-one active"> <a href="<?php echo home_url('sortiment-order-products') ?>"> Order Products </a> </li>
		            <li class="left-two"> <a href="<?php echo home_url('sortiment-my-products') ?>"> My Products </a> </li>
		            <li class="left-three"> <a href="<?php echo home_url('sortiment-company-information') ?>"> Your company information </a> </li>
		            <li class="left-four"> <a href="<?php echo home_url('sortiment-your-employees') ?>"> Your Employees </a> </li>
		            <li class="left-five"> <a href="<?php echo home_url('sortiment-order-history') ?>"> Order history </a> </li>
		            <li class="left-six"> <a href="<?php echo home_url('sortiment-ask-a-question') ?>"> Ask a question </a> </li>
		        	</ul>-->


		    </div>
		    <div class="left-side-text">
		        Sortiment ApS <br/> Hansborggade 30, 6100 haderslev
		    </div>
		    <div class="left-side-contact">
		        <a href="tel:30303030"> Tlf: <strong> 30 30 30 30 </strong> </a> <br/>
		        <a href="mailto:info@sortiment.dk"> Kontakt: <strong> info@sortiment.dk </strong> </a>
		    </div>
		    <div class="left-side-social">
		        <ul class="das_left_social">
		            <li> <a href="#" target="_blank"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/facebook.png">Order Products </a> </li>
		            <li> <a href="#" target="_blank"> <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/instagram.png">Order Products </a> </li>
		        </ul>
		    </div>
		    
		</div><!-- left side end -->
		
	<!-- main div row end other page. other wise structure broken -->	
	

		