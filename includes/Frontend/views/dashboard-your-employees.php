<?php
/**
 * The Template for displaying Dashboard Your Employees.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>
		
		<div class="dashboard-right-side your-employees">
		    
		    <div id="employee_chose">
                
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
            </div>
		    
		    <div class="filter">
                <div class="row">
                    <div class="first-col">
                        <h4>Your employees</h4>
                        <h5>12 employees found</h5>
                    </div>
                    <div class="last-col">
                        <img id="list-icon" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/list-ul-solid.png" alt="list-icon" class="img-fluid">
                        <img id="grid-icon" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/th-large-solid.png" alt="grid-icon" class="img-fluid">
                    </div>
                </div>
            </div>

            <div id="employee-all">
                <div class="employee-list">
                    <div class="list-item">
                    <div class="head">
                        <div class="th-items">
                            <div class="item name-item">Name</div>
                            <div class="item email-item">Email</div>
                            <div class="item pending-item">Pening Products</div>
                            <div class="item action-item">Actions</div>
                        </div>
                    </div><!--End head-->
                    </div>
                    <div class="list-content">
                        <div class="list">
                            <div class="name  name-item">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                <div class="name-title">
                                    <h4>Employee name</h4>
                                    <h6>Last logged in 21 January</h6>
                                </div>
                            </div>
                            <div class="email email-item"><a href="mailto:dpt@degnmarketing.dk">dpt@degnmarketing.dk</a></div>
                            <div class="pending-product pending-item">
                                <h5 class="some-pending">2 Products pending approval</h5>
                            </div>
                            <div class="actions action-item">
                            <a href="<?php echo home_url( 'sortiment-your-employees-order' ) ?>">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view">
                            </a>
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/ellipsis-v-solid.png" alt="edit">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/trash-alt-solid.png" alt="delete">
                            </div>
                        </div>
                        <div class="list">
                            <div class="name  name-item">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                <div class="name-title">
                                    <h4>Employee name</h4>
                                    <h6>Last logged in 23 January</h6>
                                </div>
                            </div>
                            <div class="email email-item"><a href="mailto:dpt@degnmarketing.dk">dpt@degnmarketing.dk</a></div>
                            <div class="pending-product pending-item">
                                <h5 class="approve">Approved</h5>
                            </div>
                            <div class="actions action-item">
                            <a href="<?php echo home_url( 'sortiment-your-employees-order' ) ?>">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view">
                            </a>
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/ellipsis-v-solid.png" alt="edit">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/trash-alt-solid.png" alt="delete">
                            </div>
                        </div>
                        <div class="list">
                            <div class="name  name-item">
                                 <img class="img-fluid test" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">  
                                <div class="name-title">
                                    <h4>Employee name</h4>
                                    <h6>Last logged in 23 January</h6>
                                </div>
                            </div>
                            <div class="email email-item"><a href="mailto:dpt@degnmarketing.dk">dpt@degnmarketing.dk</a></div>
                            <div class="pending-product pending-item">
                                <h5 class="three-pending">3 Products pending approval</h5>
                            </div>
                            <div class="actions action-item">
                            <a href="<?php echo home_url( 'sortiment-your-employees-order' ) ?>">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view">
                            </a>
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/ellipsis-v-solid.png" alt="edit">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/trash-alt-solid.png" alt="delete">
                            </div>
                        </div>
                        <div class="list">
                            <div class="name  name-item">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                <div class="name-title">
                                    <h4>Employee name</h4>
                                    <h6>Last logged in 21 January</h6>
                                </div>
                            </div>
                            <div class="email email-item"><a href="mailto:dpt@degnmarketing.dk">dpt@degnmarketing.dk</a></div>
                            <div class="pending-product pending-item">
                                <h5 class="some-pending">2 Products pending approval</h5>
                            </div>
                            <div class="actions action-item">
                            <a href="<?php echo home_url( 'sortiment-your-employees-order' ) ?>">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view">
                            </a>
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/ellipsis-v-solid.png" alt="edit">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/trash-alt-solid.png" alt="delete">
                            </div>
                        </div>
                        <div class="list">
                            <div class="name  name-item">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                <div class="name-title">
                                    <h4>Employee name</h4>
                                    <h6>Last logged in 21 January</h6>
                                </div>
                            </div>
                            <div class="email email-item"><a href="mailto:dpt@degnmarketing.dk">dpt@degnmarketing.dk</a></div>
                            <div class="pending-product pending-item">
                                <h5 class="some-pending">2 Products pending approval</h5>
                            </div>
                            <div class="actions action-item">
                            <a href="<?php echo home_url( 'sortiment-your-employees-order' ) ?>">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view">
                            </a>
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/ellipsis-v-solid.png" alt="edit">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/trash-alt-solid.png" alt="delete">
                            </div>
                        </div>
                        <div class="list">
                            <div class="name  name-item">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                <div class="name-title">
                                    <h4>Employee name</h4>
                                    <h6>Last logged in 21 January</h6>
                                </div>
                            </div>
                            <div class="email email-item"><a href="mailto:dpt@degnmarketing.dk">dpt@degnmarketing.dk</a></div>
                            <div class="pending-product pending-item">
                                <h5 class="some-pending">2 Products pending approval</h5>
                            </div>
                            <div class="actions action-item">
                            <a href="<?php echo home_url( 'sortiment-your-employees-order' ) ?>">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/eye-solid.png" alt="view">
                            </a>
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/ellipsis-v-solid.png" alt="edit">
                                <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/trash-alt-solid.png" alt="delete">
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="employee-grid">
                    <div class="items">
                        <div class="item">
                            <div class="top">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <h4 class="product-approve">Approved products : 3</h4>
                                <h5 class="pending">Products needing approval: 0</h5>
                            </div><!--End top-->
                            <div class="bottom">
                                <a class="btn d-block" href="#">See orders</a>
                            </div>
                        </div><!--End item-->

                        <div class="item">
                            <div class="top">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <h4 class="product-approve">Approved products : 3</h4>
                                <h5 class="pending">Products needing approval: 0</h5>
                            </div><!--End top-->
                            <div class="bottom">
                                <a class="btn d-block" href="#">See orders</a>
                            </div>
                        </div><!--End item-->

                        <div class="item">
                            <div class="top">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <h4 class="product-approve">Approved products : 3</h4>
                                <h5 class="pending">Products needing approval: 0</h5>
                            </div><!--End top-->
                            <div class="bottom">
                                <a class="btn d-block" href="#">See orders</a>
                            </div>
                        </div><!--End item-->

                        <div class="item">
                            <div class="top">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <h4 class="product-approve">Approved products : 3</h4>
                                <h5 class="pending">Products needing approval: 0</h5>
                            </div><!--End top-->
                            <div class="bottom">
                                <a class="btn d-block" href="#">See orders</a>
                            </div>
                        </div><!--End item-->

                        <div class="item">
                            <div class="top">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <h4 class="product-approve">Approved products : 3</h4>
                                <h5 class="pending">Products needing approval: 0</h5>
                            </div><!--End top-->
                            <div class="bottom">
                                <a class="btn d-block" href="#">See orders</a>
                            </div>
                        </div><!--End item-->

                        <div class="item">
                            <div class="top">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <h4 class="product-approve">Approved products : 3</h4>
                                <h5 class="pending">Products needing approval: 0</h5>
                            </div><!--End top-->
                            <div class="bottom">
                                <a class="btn d-block" href="#">See orders</a>
                            </div>
                        </div><!--End item-->

                        <div class="item">
                            <div class="top">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <h4 class="product-approve">Approved products : 3</h4>
                                <h5 class="pending">Products needing approval: 0</h5>
                            </div><!--End top-->
                            <div class="bottom">
                                <a class="btn d-block" href="#">See orders</a>
                            </div>
                        </div><!--End item-->

                        <div class="item">
                            <div class="top">
                                <div class="name  name-item">
                                    <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                    <div class="name-title">
                                        <h4>Employee name</h4>
                                        <h6>Last logged in 21 January</h6>
                                    </div>
                                </div>
                                <h4 class="product-approve">Approved products : 3</h4>
                                <h5 class="pending">Products needing approval: 0</h5>
                            </div><!--End top-->
                            <div class="bottom">
                                <a class="btn d-block" href="#">See orders</a>
                            </div>
                        </div><!--End item-->
                        
                    </div><!--End items-->
                </div><!--End employee-grid-->
            </div><!--End employee all--> 
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
	<script>
    

    </script>
    <?php include __DIR__ . '/dashboard-footer.php'; ?>





