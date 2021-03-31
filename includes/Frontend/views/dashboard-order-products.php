<?php
/**
 * The Template for displaying Dashboard order products.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>	
<div class="dashboard-right-side"> <!-- start dashboard right site -->
	<div class="welcome-div">
		<h4 class="blue-title"> Welcome to the shop </h4>
		<p>Here you can see all of your products click on any of them to get the right price just for you!</p>
	</div>
	<div class="status-div">
		        <select name="down-arrow" class="down-arrow">
		            <option>Category</option>
		            <option value="volvo">Category 1</option>
                    <option value="saab">Category 2</option>
                    <option value="opel">Category 3</option>
                    <option value="audi">Category 4</option>
                </select>
		    
		        <select name="down-arrow" class="down-arrow">
		            <option>Size</option>
		            <option value="volvo">XL</option>
                    <option value="saab">X</option>
                    <option value="opel">M</option>
                    <option value="audi">S</option>
                </select>
		    
		        <select name="down-arrow" class="down-arrow">
		            <option>Color</option>
		            <option value="volvo">White</option>
                    <option value="saab">Black</option>
                    <option value="opel">Red</option>
                    <option value="audi">Blue</option>
                </select>
		    
		        <select name="down-arrow" class="down-arrow">
		            <option>Brand</option>
		            <option value="volvo">Brand 1</option>
                    <option value="saab">Brand 2</option>
                    <option value="opel">Brand 3</option>
                    <option value="audi">Brand 4</option>
                </select>
		    </div>

	<div class="shop-div">
		<?php
		
		 $args = array(
            'post_type' => 'product',
			'assign_product_company_id' => $set_companyid,
            'posts_per_page' => '-1',
			'meta_query' => array (
				array(
					'key' => 'assign_product_company_id',
					'value' => $set_companyid,
					'compare' => 'NOT EXISTS',
					)
				)
            );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) {
				 $loop->the_post();
				 
		?>

		<div class="shop-image_text-div">
			<a href="/sortiment-order-products-single?postid=<?php echo $loop->post->ID ?>	">
			
			<?php 
				$id = $loop->post->ID;
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
			?>
			<img class="shop-image" src="<?php echo $image[0]; ?>" data-id="<?php echo $id; ?>" />
			<?php echo '<h5>' . get_the_title() . '</h5>'; ?>
			</a>
			<a href="/sortiment-order-products-single?postid=<?php echo $loop->post->ID ?>	">Request a price</a>
			
		</div>
		<?php 
		}
			
			
	} ?>
		

		
	</div>
			
</div> <!-- right side end -->
<?php include __DIR__ . '/dashboard-footer.php'; ?>