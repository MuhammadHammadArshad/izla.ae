<?php include('../header.php');?>
<style>
	.top-heading-form{
	text-align:center;
	text-transform: uppercase;
	color:#0F1327;
	padding-top: 36%;
	}
	.form-tagline{
	color:#F31717;
	font-size:1.2rem;
	}
	.astarik{
	color:#F31717;
	margin-right:2%;
	}
	.astarik-2{
	color:#F31717;
	margin-right:1%;
	}
	#refered-option{
	border: 1px solid transparent;
    box-shadow: none;
    color: #545454;
    border-radius: 40px;
    background-color: #f0f1f5;
    margin-bottom: 0;
    padding-left: 30px;
    padding-right: 40px;
    width: 100%;
    height: 70px;
    font-size: 16px;
    font-weight: 300;
    outline: none;
    transition: all 0.3s linear;
	}
	.required-field{
	color:#F31717;
	font-size:0.8rem;
	font-weight:bold;
	text-align:center;
	}
	.form-subheading{
	padding-left:10%;
	padding-right:10%;
	}
	.business-address-main-area{
	display:flex; 
	width:95%;
	}
	#business-address-col-md-3{
	margin-right:2%;
	margin-left:auto;
	}
	.form-check-input{
	margin-top:6px;
	margin-bottom:auto;
	}
	.submit-btn{
	width: 10%;
    padding: 6px;
    text-transform: uppercase;
    color: white;
    background: #0F1327;
    border: none;
    margin-top: 2%;
    margin-bottom: 2%;
    border-radius: 50px;
    font-weight: bold;
	}
	.submit-btn:hover{
	background-color:#F31717;
	}
	
	@media(max-width:767px){
		.submit-btn{
		width:35% !important;
		}
		label{
		margin-top:2%;
		}
		.business-address-main-area{
		display:unset !important;
		}
	}
	
	@media(max-width:1024px){
		.submit-btn{
		width:18%;
		}
	}
	.btn-success {
		background-color: #f31717 !important;
	}
	
</style>
        <!-- Page Banner Start -->
        <div class="section page-banner-area bg-cover" style="background-image: url(../assets/images/banner-img.jpg);">
            <div class="container">
                <!-- Page Banner Wrapper Start -->
                <div class="page-banner-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Get A Quote</h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Get A Quote</li>
                                </ul>  
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
                <!-- Page Banner Wrapper End -->
            </div>
        </div>
        <!-- Page Banner End -->

<!--===================================Start Form Section===================================-->
<section>
	<div class="main-form-area">
		<div class="col-md-12">
			<div class="main-form-heading">
				<h1 class="top-heading-form">Lead Form</h1>
				<p class="form-tagline text-center">
				Please complete the form to receive a quote
				</p>
				<p class="required-field">* Fields marked with an asterisk are requied</p>
			</div>
			
			
<iframe width="100%" height="900" src="https://crm.izlatechnologies.com/forms/wtl/e5c4ceaa5ad08ffe933e6d5b516663d3" frameborder="0" allowfullscreen style="padding-left: 15%;padding-right: 15%;"></iframe>
			<!-- <h3 class="form-subheading">Where Did You Hear Us?</h3> -->
			
			<!-- <form style="padding-left:10%; padding-right:10%;">
  <div class="row mt-4">
    <div class="col-md-6">
		<label><span class="astarik"></span>Refered By</label>
      <select class="form-select" aria-label="Default select example" id="refered-option">
  <option selected>Choose one of the option</option>
  <option value="1">Social Media</option>
  <option value="2">Referral</option>
  <option value="3">Google</option>
</select>
    </div>
    <div class="col-md-6">
		<label><span class="astarik">*</span>Person Phone Number</label>
      <input type="text" class="form-control">
    </div>
  </div>
			
				
	<div class="row mt-4">
    <div class="col-md-12">
		<label><span class="astarik-2">*</span>Person Email Address</label>
   <input type="text" class="form-control" />
    </div>
  </div>
				
	<div class="row mt-4">
    <div class="col-md-12">
	<h3 class="form-subheading-2 pb-4">Business Information</h3>
		<label><span class="astarik-2">*</span>Business Name</label>
   <input type="text" class="form-control" />
    </div>
  </div>
				  <div class="row mt-4">
    <div class="col-md-6">
		<label><span class="astarik">*</span>Business Type</label>
      <input type="text" class="form-control">
    </div>
    <div class="col-md-6">
		<label><span class="astarik"></span>Company Registration Number (Compulsory for registered businesses )</label>
      <input type="text" class="form-control">
    </div>
  </div>
				
	<div class="row mt-4">
    <div class="col-md-12">
	<label><span class="astarik-2">*</span>Business Address</label>
   <input type="text" class="form-control" />
    </div>
  </div>
	
	<div class="row mt-4">
    <div class="col-md-12 business-address-main-area">
		<div class="col-md-3" id="business-address-col-md-3">
			<label><span class="astarik-2">*</span> Country</label>
   <select class="form-select" aria-label="Default select example" id="refered-option">
  <option selected>United Arab Emirates (UAE)</option>
  <option value="1">United Kingdom (UK)</option>
  <option value="2">United States (US)</option>
</select>
		</div>
		<div class="col-md-3" id="business-address-col-md-3">
			<label><span class="astarik-2">*</span> City</label>
   <input type="text" class="form-control" />
		</div>
		<div class="col-md-3" id="business-address-col-md-3">
			<label><span class="astarik-2">*</span>State</label>
   <input type="text" class="form-control" />
		</div>
		<div class="col-md-3" id="business-address-col-md-3">
			<label><span class="astarik-2">*</span>Postal Code</label>
   <input type="text" class="form-control" />
		</div>
	
    </div>
  </div>
				
	<div class="row mt-4">
    <div class="col-md-12">
	<h3 class="form-subheading-2 pb-4">Tell us about yourself</h3>
    </div>
		
		<div class="row">
    <div class="col-md-6">
		<label><span class="astarik">*</span>Name</label>
      <input type="text" class="form-control">
    </div>
    <div class="col-md-6">
		<label><span class="astarik">*</span>Preferred Language</label>
      <input type="text" class="form-control">
    </div>
  </div>
  </div>
				
	<div class="row mt-4">
    <div class="col-md-6">
		<label><span class="astarik">*</span>Your Position</label>
      <input type="text" class="form-control">
    </div>
    <div class="col-md-6">
		<label><span class="astarik">*</span>Your Email</label>
      <input type="text" class="form-control">
    </div>
  </div>
				
	<div class="row mt-4">
    <div class="col-md-6">
	<label><span class="astarik">*</span>Preferred Time for Callback</label>
    <input type="text" class="form-control">
    </div>
    <div class="col-md-6">
	<label><span class="astarik">*</span>Contact Number (Include Country Code)</label>
    <input type="text" class="form-control" placeholder="052-514-9868">
    </div>
  </div>
				<!--============================ Start Inline Checkbox ============================-->
				<!-- <div class="row mt-4">
    <div class="col-md-12" style="display:inline;">
		<label><span class="astarik-2">*</span>Services</label>
			<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">Digital Marketing</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
		
		<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">Web Design</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
		
		<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">Graphic Desig</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
		
		<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">Hosting Services</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
		
		<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">Domain Registration</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
		<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">SSL Certificate</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
		
		<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">SEO</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
		
		<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">Mobile Apps</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
		
		<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">PPC Adwords</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
		
    </div>				
  </div>		
			<!--============================ End Inline Checkbox ============================-->
	<!-- <div class="row mt-4">
    	<div class="col-md-12">
			<label>Any Message (Optional)</label>
			<textarea type="text" class="form-control"></textarea>
    </div>
  </div>
				
<div class="row mt-4">
<div class="form-check form-check-inline">
<span class="form-check-label" for="inlineCheckbox1">I confirm that I am authorised to request a quote on behalf of this business.</span>
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
  </div>
				
				<button type="submit" class="submit-btn">Submit</button>
	
</form> -->
			
			
		</div>
	</div>
</section>


<!--===================================End Form Section===================================-->

<?php include('../footer.php');?>