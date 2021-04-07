<?php
/**
 * The Template for displaying Dashboard Your Employees.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

//$get_companyid = get_user_meta($userid, 'company_id');
//$company_id = $get_companyid[0];

$result = count_users();

if (isset($_POST['import'])) {
    global $wpdb;

    if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'new-employee-user-excel' ) ) {
        echo "<script>alert('Nonce verification failed!')</script>";
    }

    $company_id = $_POST['company_id'];	
    $product_id = $_POST['product_id'];	

    $file_mimes = array(
        'text/x-comma-separated-values', 
        'text/comma-separated-values', 
        'application/octet-stream', 
        'application/vnd.ms-excel', 
        'application/x-csv', 
        'text/x-csv', 
        'text/csv', 
        'application/csv', 
        'application/excel', 
        'application/vnd.msexcel', 
        'text/plain', 
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    );
 
    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
     
        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);
     
        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } elseif('xlsx' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }else{
            echo "<script>alert('We only support CSV and Xlsx file format.')</script>";
        }
 
        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
 
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
           // var_dump($sheetData);
        if (!empty($sheetData)) {
            for ($i=1; $i<count($sheetData); $i++) {
                $name = $sheetData[$i][0];
                $email = $sheetData[$i][1];
                $genarate_pass = 'sortiment@2021';

                $userdata = array(
                    'user_login'        =>   $name ,
                    'user_email'	    =>   $email,
                    'user_pass' 	    =>   $genarate_pass,
                    //'first_name'        =>   $name,
                    //'last_name'         =>   $name,
                    //'nickname'          =>   $name,
                    'role'              =>  'employee',
            
                );
                $user = wp_insert_user( $userdata );
                add_user_meta($user, 'company_id', $company_id);

                if($user==true){
							
                    echo "<script>alert('Form Successfuly Submited.')</script>";

                    $employeedata = $wpdb->insert("{$wpdb->prefix}company_employee", array(
                        'company_id' 	        =>   $company_id,
                        'employee_name' 	    =>   $name,
                        'employee_email' 	    =>   $email,
                        'employee_pass'	        =>   $genarate_pass,
                        'employee_address' 	    =>  '',
                        'assigned_product_id'   =>   $product_id,
        
                    ));
                    
                }
                else{								
                    echo "<script>alert('Opps! error')</script>";
                   }
            }
        }
    }else {
        echo "<script>alert('Opps! employee Data Error')</script>";
    }

}


if (isset($_POST['add_employee']) && ( $_REQUEST['fullname'] ) && ( $_REQUEST['email'] )) {
    global $wpdb;
    if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'new-employee-user' ) ) {
        echo "<script>alert('Nonce verification failed!')</script>";
    }

        $company_id          =  $_REQUEST['company_id'];
        $product_id          =  $_REQUEST['product_id'];
        $employee_name       =  $_REQUEST['fullname'] ;
        $employee_email      =  $_REQUEST['email'] ;
        $genarate_pass       =  'sortiment@2021';

if(!empty( $employee_name ) && !empty( $employee_email)){
    
    for ($i=0; $i<= (count($employee_name)-1); $i++) {

            $userdata = array(
                'user_login'        =>   $employee_name[$i],
                'user_email'	    =>   $employee_email[$i],
                'user_pass' 	    =>   $genarate_pass,
                //'first_name'        =>   $name,
                //'last_name'         =>   $name,
                //'nickname'          =>   $name,
                'role'              =>  'employee',
        
            );
            $user = wp_insert_user( $userdata );
           
            add_user_meta($user, 'company_id', $company_id);

            if($user==true){
                        
                

                $employeedata = $wpdb->insert("{$wpdb->prefix}company_employee", array(
                    'company_id' 	        =>   $company_id,
                    'employee_name' 	    =>   $employee_name[$i],
                    'employee_email' 	    =>   $employee_email[$i],
                    'employee_pass'	        =>   $genarate_pass,
                    'employee_address' 	    =>  '',
                    'assigned_product_id'   =>   $product_id,
    
                ));
                
            }
            else{								
                echo "<script>alert('Opps! error')</script>";
        }


    }
        echo "<script>alert('Form Successfuly Submited.')</script>";
    }else {
        echo "<script>alert('Opps! employee Data Error')</script>";
    }


}

?>
		
		<div class="dashboard-right-side your-employees">
		    
		    <div id="employee_chose">
                
                <div class="excel-manually-div">
                    <div class="excel-upload-div">
                        <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/excel-icon.png" >
                        <div class="upload-excel">
                            <h4>Import employees using excel</h4>
                            <form id="" action="" method="POST" enctype="multipart/form-data">
                                <input type="file" class="employee_excel_file" id="exampleInputFile" name="file">
                             
                                <?php wp_nonce_field( 'new-employee-user-excel' ); ?>
                                <input type="hidden"  name="company_id" value="<?php echo $retrieved_data->company_id ; ?>">
                                <input type="hidden"  name="product_id" value="<?php 
                                if ( !empty($employee_name) ) {
                                    echo $productid; 
                                }else{echo 'not define';}?>">
                                <button type="submit" name="import" id="submit" class="btn btn-submit">Upload Excel</button>
                            </form>
                            <a href="https://www.haderslevgaver.dk/wp-content/uploads/2020/08/csv-fil-guide-haderslev.pdf" target="_blank">click here</a> to download Excel template
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
                        <h5><?php
                            $args = array(
                                'role'    => 'employee',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'company_id',
                                            'value' => $set_companyid,
                                            'compare' => '=',
                                        ),

                                    )
                                );
                        
                        echo count( get_users ( $args));?> employees found  </h5>
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
                        


                        <?php 
                            $sl= 0;
                            $args = array(
                                           'role'    => 'employee',
                                            'meta_query' => array(
                                                array(
                                                    'key' => 'company_id',
                                                    'value' => $set_companyid,
                                                    'compare' => '=',
                                                ),

                                            )
                                        );
                                        
                                // The Query
                                $user_query = new WP_User_Query( $args );
                                
                               // echo "Last SQL-Query: {$customPosts->request}";

                                $last_login = get_the_author_meta('last_login');
                                $the_login_date = date('M j, Y h:i a', $last_login);
                                
                                // User Loop
                                if ( ! empty( $user_query->get_results() ) ) {
                                    foreach ( $user_query->get_results() as $user ) {
                                        ?>
                                        <div class="list">
                                            <div class="name  name-item">
                                            <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                            <div class="name-title">
                                                <h4><?php echo $user->display_name ; ?> </h4>
                                                <h6> <?php echo 'Last logged in: '. do_shortcode('[lastlogin]') .''; ?></h6>
                                            </div>
                                        </div>
                                        <div class="email email-item"><a href="mailto:<?php echo $user->user_email ; ?>"> <?php echo $user->user_email; ?></a></div>
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


                                <?php

                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                                    
                                ?>
                        
                    </div>
                    
                </div>

                <div class="employee-grid">
                    <div class="items">


                    <?php 
                            $args = array(
                                'role'    => 'employee',
                                'meta_query' => array(
                                    array(
                                        'key' => 'company_id',
                                        'value' => $set_companyid,
                                        'compare' => '=',
                                    ),
                                )
                            );
                                        
                                // The Query
                                $user_query = new WP_User_Query( $args );
                                $last_login = get_the_author_meta('last_login');
                                // User Loop
                                if ( ! empty( $user_query->get_results() ) ) {
                                    foreach ( $user_query->get_results() as $user ) {
                                       // echo '<p>' . $user->display_name . '</p>';

                                 ?>

                                <div class="item">
                                    <div class="top">
                                        <div class="name  name-item">
                                            <img class="img-fluid" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/employee.png" alt="employee">
                                            <div class="name-title">
                                            <h4><?php echo $user->display_name ; ?> </h4>
                                                <h6><?php echo $last_login ; ?> </h6>
                                            </div>
                                        </div>
                                        <h4 class="product-approve">Approved products : 3</h4>
                                        <h5 class="pending">Products needing approval: 0</h5>
                                    </div><!--End top-->
                                    <div class="bottom">
                                        <a class="btn d-block" href="#">See orders</a>
                                    </div>
                                </div><!--End item-->


                        <?php

                        }
                        } else {
                        echo 'No users found.';
                        }
                                        
                        ?>

                        
                    </div><!--End items-->
                </div><!--End employee-grid-->
            </div><!--End employee all--> 
                <div class="form-popup addemployee" id="myForm">
               
                    <form action="#" method="post" class="form-container addemployee-form" id="add_employee-form">
                        <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/close-icon.png" class="close-icon"  onclick="closeForm()" />     
                        
                        <div class="modal-header">
                                <h3 class="request-title"><strong>Add employees manually</strong></h3>
                                <p class="sub-title"> We will automatically generate a user and password for each employee </p>
                        </div> 

                        <div class="add-new-employee-div">
                            <div class="request-form add_employee_div increase-employee-div" id="empdiv_1">
                                <div class="name-field">
                                    <label for="title"><b>Name & Last name</b></label>
                                    <input type="text" name="fullname[]" placeholder="Employee name" require="require">
                                </div>
                                <div class="email-field">
                                    <label for="email"> <b>Email</b> </label>
                                    <input type="email" name="email[]"  placeholder="Employee email" require="require">
                                </div>
                                                    
                            </div>
                
                        </div>
                        
                        <div class="buttn-item">
                        <?php wp_nonce_field( 'new-employee-user' ); ?>
                        <input type="hidden"  name="company_id" value="<?php echo $retrieved_data->company_id ; ?>">
                            <input type="hidden"  name="product_id" value="<?php 
                            if ( !empty( $employee_name) ) {
                                echo $productid ; 

                            }else{
                                echo 'not define' ; 
                            }
                            
                        ?>">
                           <input type="hidden" name="action" value="softx_sortiment_employee_registation">
                            <a class="btn add-btn addanotherbtn" id="add_new_employee_btn"> Add another </a>

                            <input class="btn blue-btn requestbtn" type="submit" id="submit" name="add_employee" value="<?php esc_attr_e( 'Done', 'softx-sortiment' ); ?>">
                            
                        </div>  
                        <div class="message">
                            <p class="description success"></p>
                        </div>  
                    </form>
              
                </div>		    
		</div> <!-- right side end -->

    <?php include __DIR__ . '/dashboard-footer.php'; ?>





