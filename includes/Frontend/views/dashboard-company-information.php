<?php
/**
 * The Template for displaying Dashboard Company Information.
 *
 * @package sortiment
 */ 
include __DIR__ . '/dashboard-header.php';
include __DIR__ . '/dashboard-leftside.php';


?>
		
		<div class="dashboard-right-side">
		    
		    <div class="product-page-right company_information_right_side">
		        <h2 class="company-information-title"> Your company information <span> company name here </span></h2>
		        <div class="rightside-form-image-div">
		        
    		        <div class="rightside-form-div">
    		            <form action="#">
        				<div class="full-div">
        				<div class="half-div"> <label>Company name</label> <input type="text" id="fname" name="fname" placeholder="Company name here"> </div>
        				<div class="half-div"> <label>Zip code</label> <input type="text" id="fname" name="fname" placeholder="Company name"> </div>
        				</div>				
        				
        				<div class="full-div">
        				<div class="half-div"> <label>Contact person</label> <input type="text" id="fname" name="fname" placeholder="Name of contact person"> </div>
        				<div class="half-div"> <label>Address</label> <input type="text" id="fname" name="fname" placeholder="Abcd"> </div>
        				</div>
        
        				<div class="full-div">
        				<div class="half-div"> <label>Phone number</label> <input type="text" id="fname" name="fname" placeholder="+00 00 00 00"> </div>
        				<div class="half-div"> <label>Address 2</label> <input type="text" id="fname" name="fname" placeholder="Abcd"> </div>
        				</div>
        
        				<div class="full-div">
        					<a class="btn blue-btn" href="#">Save changes </a>
        				</div>
        			</form>
    		        </div>
    		        <div class="rightside-image-div">
    		            <img src="<?php echo SF_SORTIMENT_ASSETS ?>/images/holder.png" class="company-information-img">
    		        </div>
    		        
    		        
    		    </div>
    		    
    		    <h2 class="company-information-title"> Your logo with color(s) </h2>
    		    <div class="uploadimage-div">
    		        <div class="format-div">
    		            JPG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />  
    		        </div>
    		        <div class="format-div">
    		            PNG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            AI Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            SVG Format
    		            <input type='file' id="imgInp" class="inputimage" />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            PDF Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		    </div>
    		    
    		    <h2 class="company-information-title"> Your logo in white </h2>
    		    <div class="uploadimage-div">
    		        <div class="format-div">
    		            JPG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />  
    		        </div>
    		        <div class="format-div">
    		            PNG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            AI Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            SVG Format
    		            <input type='file' id="imgInp" class="inputimage" />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            PDF Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		    </div>
    		    
    		    <h2 class="company-information-title"> Your logo in Black </h2>
    		    <div class="uploadimage-div">
    		        <div class="format-div">
    		            JPG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />  
    		        </div>
    		        <div class="format-div">
    		            PNG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            AI Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            SVG Format
    		            <input type='file' id="imgInp" class="inputimage" />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            PDF Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		    </div>
    		    
    		    <h2 class="company-information-title"> Alternative version </h2>
    		    <div class="uploadimage-div">
    		        <div class="format-div">
    		            JPG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />  
    		        </div>
    		        <div class="format-div">
    		            PNG Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            AI Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            SVG Format
    		            <input type='file' id="imgInp" class="inputimage" />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		        <div class="format-div">
    		            PDF Format
    		            <input type='file' id="imgInp" class="inputimage"  />
    		            <img id="blah" src="<?php echo SF_SORTIMENT_ASSETS ?>/images/upload-icon.png" class="upload-img" />
    		        </div>
    		    </div>
		        
		    </div> <!-- rproduct-page-right div end -->  
		</div> <!-- right side end -->
	
<?php include __DIR__ . '/dashboard-footer.php'; ?>





