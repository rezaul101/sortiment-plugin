<?php
/**
 * The Template for displaying Dashboard My products.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';

//$retrieve_data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}postmeta WHERE  meta_key = 'assign_product_company_id' AND  meta_value = $set_companyid" );
//var_dump($retrieve_data);


include __DIR__ . '/dashboard-leftside.php';


?>
		
		<div class="dashboard-right-side">
		    <div class="welcome-div">
		        <h4 class="blue-title"> Welcome to the shop </h4>
		        <p>Here you can see all of your products click on any of them to get the right price just for you!</p>
		    </div>
			<div class="status-div">
		        <select name="down-arrow" class="down-arrow">
		            <option>Choose status</option>
		            <option value="volvo">Pending Approval</option>
                    <option value="saab">Approved</option>
                    <option value="opel">Denied</option>
                    <option value="audi">Ordered</option>
                </select>
		    </div>
		    
		    <div class="shop-div">
		        <div class="shop-image_text-div">
		            <a href="<?php echo home_url('sortiment-my-products-single') ?>">
					<span class="status-text pending"> Pending approved </span>	
		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt1.png" class="shop-image">
		            <h5> Name of product</h5>
		            <p>Request a price</p>
		            </a>
		        </div>
		        
		<?php
			$args = array(
				'post_type' => 'product',
				'assign_product_company_id' => $set_companyid,
				'posts_per_page' => 12,
				'meta_query' => array(
					array(
						'key' => 'assign_product_company_id',
						'value' => $set_companyid,
						'compare' => '=',
						)
					)

				);

			//var_dump($args);
			$loop = new WP_Query( $args );
			//var_dump($loop);

			if ( $loop->have_posts() ) :
				while ( $loop->have_posts() ) :
				$loop->the_post();

		?>

		<div class="shop-image_text-div">
		
			<a href="/sortiment-my-products-single?postid=<?php echo $loop->post->ID ?>	">
			<?php
			//echo get_permalink()
			$id = $loop->post->ID;
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
			?>
			<span class="status-text pending"> Pending approved </span>
			<img class="shop-image" src="<?php echo $image[0]; ?>" data-id="<?php echo $id; ?>" />
			<?php echo '<h5>' . get_the_title() . '</h5>'; ?>
			</a>
			<a href="/sortiment-order-products-single/">Request a price</a>
			
		</div>
		<?php
		endwhile;		
		else :
				echo "The product has not been assigned yet";
		endif;
	?>

		    </div> <!-- shop div end -->
		</div> <!-- right side end -->
	
<?php include __DIR__ . '/dashboard-footer.php'; ?>
