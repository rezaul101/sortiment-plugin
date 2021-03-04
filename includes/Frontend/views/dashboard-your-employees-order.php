<?php
/**
 * The Template for displaying Dashboard Your Employees Order Page.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>
		
		<div class="dashboard-right-side your-employees">
            <div class="employees-order">
                <div class="first-col">
                    <div class="content">
                        <div class="intro">
                            <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h3>You are viewing the products of</h3>
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                            </div>
                        </div><!--End intro-->

                        <div class="content-body">
                            <div class="th-head">
                                <div class="app-products"> <h5>Approved products</h5> </div>
                                <div class="size"> <h5>Size</h5></div>
                                <div class="size"> <h5>Color</h5></div>
                                <div class="size"> <h5>Name label</h5></div>
                            </div>

                            <div class="product-item">
                                <div class="name  name-item">
                                        <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/full-shirt2.png" alt="employee">
                                        <div class="name-title">
                                            <h4>Name of product</h4>
                                            <h6>Product category</h6>
                                        </div>
                                </div>
                                <div class="attr"><h5>L</h5></div>
                                <div class="attr"><h5>Black</h5></div>
                                <div class="attr"><h5>Rasmus</h5></div>
                                <div class="attr"><a href="#">
                                    <img class="img-fluid edit-icon" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/pen-solid.png" alt="edit">
                                </a></div>
                            </div>

                            <div class="th-head waiting">
                                <div class="app-products"> <h5>Waiting Approval products</h5> </div>
                                <div class="size"> <h5>Size</h5></div>
                                <div class="size"> <h5>Color</h5></div>
                                <div class="size"> <h5>Name label</h5></div>
                            </div>

                            <div class="product-item">
                                <div class="name  name-item">
                                        <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/quater-pant.png" alt="employee">
                                        <div class="name-title">
                                            <h4>Name of product</h4>
                                            <h6>Product category</h6>
                                        </div>
                                </div>
                                <div class="attr"><h5>L</h5></div>
                                <div class="attr"><h5>Black</h5></div>
                                <div class="attr"><h5>Rasmus</h5></div>
                                <div class="attr"><a href="#">
                                    <img class="img-fluid edit-icon" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/pen-solid.png" alt="edit">
                                </a></div>
                            </div>

                            <div class="product-item">
                                <div class="name  name-item">
                                        <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/t-shirt.png" alt="t-shirt">
                                        <div class="name-title">
                                            <h4>Name of product</h4>
                                            <h6>Product category</h6>
                                        </div>
                                </div>
                                <div class="attr"><h5>L</h5></div>
                                <div class="attr"><h5>Black</h5></div>
                                <div class="attr"><h5>Rasmus</h5></div>
                                <div class="attr"><a href="#">
                                    <img class="img-fluid edit-icon" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/pen-solid.png" alt="edit">
                                </a></div>
                            </div>
                        </div>
                    </div><!--End content-->
                </div><!--End first-col-->

                <div class="last-col">
                    <div class="content">
                        <div class="header-title">
                            <h3>See other employees orders</h3>
                        </div>

                        <div class="content-body">
                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->

                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->

                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->

                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->

                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->

                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->

                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->

                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->

                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->

                            <div class="item">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <a href="#"><img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view"></a>
                            </div><!--End item-->
                            
                        </div>
                    </div><!--End content-->
                </div><!--End last-col-->
            </div><!--End employee order-->

		</div> <!-- right side end -->

<?php include __DIR__ . '/dashboard-footer.php'; ?>





