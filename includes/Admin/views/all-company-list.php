<div class="wrap">
    <h1 class="wp-heading-inline"><?php _e( 'All Company', 'softx-sortiment' ); ?></h1>
    <form action="" method="post">
        <?php
        
        $table = new Softx\Sortiment\Admin\Company_List();
        $table->prepare_items();
        $table->search_box( 'search', 'search_id' );
        $table->display();
        ?>
    </form>
</div>