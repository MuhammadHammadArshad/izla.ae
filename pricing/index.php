<?php include('../header.php');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
.card-down-list-ul{
	justify-content:center;
	}
	.card-down-list-li{
	text-align: center;
	}
    .tab-container{
	margin: 5% 5%;
	/* background-color: #c1e3d9; */
	padding: 3%;
	border-radius: 4px;
    margin-top:40%;
}
.tab-menu{}
.tab-menu ul{
	margin: 0;
	padding: 0;
}
.tab-menu ul li{
	list-style-type: none;
	display: inline-block;
}
.tab-menu ul li a{
	text-decoration: none;
	color: #ffffff;;
	background-color: #0f1327;
	padding: 7px 25px;
	border-radius: 4px;
    font-weight: 600;
    margin-bottom:5%;
}
.tab-menu ul li a.active-a{
	background-color: #f31717;
	color: #ffffff;
    
}
.tab{
	display: none;
}
.tab h2{
	color: rgba(0,0,0,.7);
}
.tab p{
	color: rgba(0,0,0,0.6);
	text-align: justify;
}
.tab-active{
	display: block;
}
.tab-heading{
    margin: 5% auto;
    text-align:center
}

.page-banner-area{
    margin-bottom: 4%;
}

.table-area{
    padding-left: 9%;
    padding-right: 12%;
}
.table-heading{
    background-color:#f31717;
    color:#fff;
    font-size:18px;
    font-weight: 600;
    text-align:center;
}
.main-bold{
  color:#f31717;
  font-weight: bold;
}
.accordion-button:not(.collapsed){
  color:white !important;
  background-color:#0f1327 !important;
}
.accordion-button:focus{
  border-color:unset !important;
  box-shadow:unset !important;
}
.accordion-button{
  background-color:red;
  color:white;
  font-size: 18px;
  font-weight: bold;
}
.ppc-pricing{
  text-align: right !important;
  padding-top: 3%;
  font-size: 20px;
  color: #f31717 !important;
  font-weight: bold;
}
</style>
		<div class="section page-banner-area bg-cover" style="background-image: url(../assets/images/banner-img.jpg);">
			<div class="container">
				<div class="page-banner-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<div class="page-banner text-center">
								<h2 class="title">Pricing</h2>
								<ul class="breadcrumb justify-content-center">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pricing</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--==================================================Start ServPricing Section=================================================-->

<div class="tab-container">
<div class="tab-menu">
      <ul>
         <li><a href="#" class="tab-a active-a" data-id="tab1">Web Design & Development</a></li>
         <li><a href="#" class="tab-a" data-id="tab2">Search Engine Optimization (SEO)</a></li>
         <li><a href="#" class="tab-a" data-id="tab3">Social Media Marketing</a></li>
         <li><a href="#" class="tab-a" data-id="tab4">Pay Per Click (PPC)</a></li>
        <li><a href="#" class="tab-a" data-id="tab5">Productivity Solutions</a></li>
      </ul>
   </div><!--end of tab-menu-->
   <div  class="tab tab-active" data-id="tab1">
         <h2 class="tab-heading">Website Design & Development Pricing</h2>
         <div class="col-md-12">
         <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <div class="single-pricing-box text-center">
                    <!-- <div class="pricing-icon">
                      <i class="flaticon-badge"></i>
                    </div> -->
                    <div class="pricing-price">
                      <h3 class="title">Budget</h3>
                      <h2 class="price">700 AED <span class="duration">/pm</span>
                      </h2>
                    </div>
                    <div class="pricing-content">
                      <ul class="price-list">
                        <li>Static Website (1 to 5 Pages)</li>
                        <li class="price-border">Mobile Responsive Website Design</li>
                        <li class="price-border">Design Revisions – Upto 2 Times</li>
                      </ul>
                      <a class="main-btn" href="#">Buy Now <span>
                          <i class="flaticon-right-arrow-angle"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                  <div class="single-pricing-box text-center">
                    <!-- <div class="pricing-icon">
                      <i class="flaticon-stats"></i>
                    </div> -->
                    <div class="pricing-price">
                      <h3 class="title">Economy</h3>
                      <h2 class="price">1200 AED <span class="duration">/pm</span>
                      </h2>
                    </div>
                    <div class="pricing-content">
                      <ul class="price-list">
                        <li>Static Website (5 to 10 Pages)</li>
                        <li class="price-border">Mobile Responsive Website Design</li>
                        <li class="price-border">1 Contact or Feedback Form</li>
                        <li class="price-border">Design Revisions – Upto 2 Times</li>
                      </ul>
                      <a class="main-btn" href="#">Buy Now <span>
                          <i class="flaticon-right-arrow-angle"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                  <div class="single-pricing-box text-center">
                    <!-- <div class="pricing-icon">
                      <i class="flaticon-medal"></i>
                    </div> -->
                    <div class="pricing-price">
                      <h3 class="title">Startup</h3>
                      <h2 class="price">2000 AED <span class="duration">/pm</span>
                      </h2>
                    </div>
                    <div class="pricing-content">
                      <ul class="price-list">
                        <li>Dynamic Website (10 to 20 Pages)</li>
                        <li class="price-border">Mobile Responsive Website Design</li>
                        <li class="price-border">Content Management System (CMS)</li>
                        <li class="price-border">1 Contact or Feedback Form</li>
                        <li class="price-border">Creative Design Team Involvement</li>
                        <li class="price-border">Design Revisions – Upto 4 Times</li>

                      </ul>
                      <a class="main-btn" href="#">Buy Now <span>
                          <i class="flaticon-right-arrow-angle"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
         </div>


         <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <div class="single-pricing-box text-center">
                    <!-- <div class="pricing-icon">
                      <i class="flaticon-badge"></i>
                    </div> -->
                    <div class="pricing-price">
                      <h3 class="title">Corporate</h3>
                      <h2 class="price">4,500 AED <span class="duration">/pm</span>
                      </h2>
                    </div>
                    <div class="pricing-content">
                      <ul class="price-list">
                        <li>Dynamic Website (Unlimited Pages)</li>
                        <li class="price-border">Mobile Responsive Website Design</li>
                        <li class="price-border">Content Management System (CMS)</li>
                        <li class="price-border">1 Contact or Feedback Form</li>
                        <li class="price-border">Creative Design Team Involvement</li>
                        <li class="price-border">Design Revisions – Upto 8 Times</li>
                      </ul>
                      <a class="main-btn" href="#">Buy Now <span>
                          <i class="flaticon-right-arrow-angle"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                  <div class="single-pricing-box text-center">
                    <!-- <div class="pricing-icon">
                      <i class="flaticon-stats"></i>
                    </div> -->
                    <div class="pricing-price">
                      <h3 class="title">Ecommerce</h3>
                      <h2 class="price">8,500 AED <span class="duration">/pm</span>
                      </h2>
                    </div>
                    <div class="pricing-content">
                      <ul class="price-list">
                        <li>Dynamic Website (Unlimited Pages)</li>
                        <li class="price-border">Mobile Responsive Website Design</li>
                        <li class="price-border">Content Management System (CMS)</li>
                        <li class="price-border">1 Contact or Feedback Form</li>
                        <li class="price-border">Creative Design Team Involvement</li>
                        <li class="price-border">Design Revisions – Unlimited</li>
                        <li class="price-border">Ecommerce Product Manager</li>
                        <li class="price-border">Linking of Online Payment Gateway (bank Fee Additional)</li>
                      </ul>
                      <a class="main-btn" href="#">Buy Now <span>
                          <i class="flaticon-right-arrow-angle"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                  <div class="single-pricing-box text-center">
                    <!-- <div class="pricing-icon">
                      <i class="flaticon-medal"></i>
                    </div> -->
                    <div class="pricing-price">
                      <h3 class="title">Conversions</h3>
                      <h2 class="price">12,500 AED <span class="duration">/pm</span>
                      </h2>
                    </div>
                    <div class="pricing-content">
                      <ul class="price-list">
                        <li>Dynamic Website (Unlimited Pages)</li>
                        <li class="price-border">Mobile Responsive Website Design</li>
                        <li class="price-border">Content Management System (CMS)</li>
                        <li class="price-border">1 Contact or Feedback Form</li>
                        <li class="price-border">Creative Design Team Involvement</li>
                        <li class="price-border">Design Revisions – Unlimited</li>
                        <li class="price-border">Onsite SEO Optimization for Maximizing Traffic</li>
                        <li class="price-border">Integrating Lead Capture Techniques</li>
                        <li class="price-border">Implementing Strategies for Converting Visitors to Sales</li>
                      </ul>
                      <a class="main-btn" href="#">Buy Now <span>
                          <i class="flaticon-right-arrow-angle"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
         </div>
         
   </div><!--end of tab one--> 

   <div  class="tab " data-id="tab2">
   <h2 class="tab-heading">SEO Pricing</h2>
   <div class="table-area table-responsive">
   <table class="table">
  <thead>
    <tr class="table-heading">
      <th scope="col">SEO Deliverables</th>
      <th scope="col">Budget</th>
      <th scope="col">Economy</th>
      <th scope="col">Startup</th>
      <th scope="col">Growth</th>
      <th scope="col">Corporate</th>

    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td>Best Results Within</td>
      <td>8 - 10 Months</td>
      <td>7 - 9 Months</td>
      <td>6 - 8 Months</td>
      <td>5 - 7 Months</td>
      <td>4 - 6 Months</td>
    </tr>

    <tr class="text-center">
      <td>Minimum Duration of Campaign</td>
      <td class="main-bold">6 Months</td>
      <td class="main-bold">6 Months</td>
      <td class="main-bold">6 Months</td>
      <td class="main-bold">6 Months</td>
      <td class="main-bold">6 Months</td>
    </tr>

    <tr class="text-center">
      <td>No of Keywords Optimized</td>
      <td>10</td>
      <td>10</td>
      <td>10</td>
      <td>15</td>
      <td>15</td>
    </tr>

    <tr class="text-center">
      <td>Monthly Price	</td>
      <td>AED 750</td>
      <td>AED 1,250</td>
      <td>AED 1,500</td>
      <td>AED 1,750</td>
      <td>AED 2,000</td>
    </tr>

    <tr class="table-heading">
      <th scope="col">Website & Keyword Analysis	</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>

    <tr class="text-center">
      <td>Initial Website Analysis</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Website Loading Speed Analysis</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Initial SEO Ranking Analysis</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Initial Competitive Analysis</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Keyword Research</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>


    <tr class="table-heading">
      <th scope="col">On Page Optimization</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>

    <tr class="text-center">
      <td>Internal Links & Website Structure Optimization</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Title & Meta Tag Optimization	</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Image, Alt, Hyperlink & Header Tag Optimization</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Robots.txt Optimization</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>HTML Source Code Optimization</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Google Analytics Integration</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Onsite Blog Setup</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Lead Capturing Strategy & Setup</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Website Content Optimization</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>


    <tr class="table-heading">
      <th scope="col">Off Page Optimization (Starts After 2 months)</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>

    <tr class="text-center">
      <td>Google Local Business Listing Setup</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Google My Business Setup & Verification</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Google Map Integration</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Setting Geo Targeting in Google</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Quality Backlinks Creation</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Government & Other Local Business Listings</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Linking to Social Profiles</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Customer Reviews & Ratings Setup</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Social Media Account Setup</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>
    
    <tr class="table-heading">
      <th scope="col">Content Marketing (Starts After 2 months)</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>

    <tr class="text-center">
      <td>Informational Article Writing & Submission</td>
      <td>1 in 2 Month</td>
      <td>1 / Month	</td>
      <td>2 / Month	</td>
      <td>3 / Month	</td>
      <td>4 / Month </td>
    </tr>

    <tr class="text-center">
      <td>Blog Writing & Submission	</td>
      <td>1 in 2 Month</td>
      <td>1 / Month	</td>
      <td>2 / Month	</td>
      <td>3 / Month	</td>
      <td>4 / Month </td>
    </tr>

    <tr class="text-center">
      <td>Directory & Classified Submissions</td>
      <td>5 / Month</td>
      <td>5 / Month</td>
      <td>10 / Month</td>
      <td>15 / Month</td>
      <td>15 / Month</td>
    </tr>

    <tr class="text-center">
      <td>Social Bookmarking</td>
      <td>3 / Month</td>
      <td>3 / Month</td>
      <td>5 / Month</td>
      <td>5 / Month</td>
      <td>5 / Month</td>
    </tr>

    <tr class="text-center">
      <td>PPT / PDF / Doc Submission</td>
      <td>N/A	</td>
      <td>1 in 3 Month</td>
      <td>1 in 3 Month</td>
      <td>1 in 3 Month</td>
      <td>1 in 3 Month</td>
    </tr>

    <tr class="text-center">
      <td>Video Promotion (if available with Client)</td>
      <td>N/A	</td>
      <td>1 in 3 Month</td>
      <td>1 in 3 Month</td>
      <td>1 in 3 Month</td>
      <td>1 in 3 Month</td>
    </tr>

    <tr class="text-center">
      <td>Q & A Posting	</td>
      <td>N/A	</td>
      <td>N/A	</td>
      <td>1 / Month</td>
      <td>2 / Month</td>
      <td>3 / Month</td>
    </tr>

    <tr class="table-heading">
      <th scope="col">Off Page Optimization (Starts After 2 months)</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>

    <tr class="text-center">
      <td>Monthly Traffic Reports</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Monthly Keyword Ranking Reports</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Monthly Google Analytics Report	</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

  </tbody>
</table>
   </div>
   
   </div><!--end of tab two--> 

      <div  class="tab " data-id="tab3">
      <h2 class="tab-heading">Facebook Marketing Prices</h2>
      <div class="table-area table-responsive">
   <table class="table">
  <thead>
    <tr class="table-heading">
      <th scope="col">Facebook Marketing Deliverables	</th>
      <th scope="col">Budget</th>
      <th scope="col">Economy</th>
      <th scope="col">Startup</th>
      <th scope="col">Growth</th>
      <th scope="col">Corporate</th>

    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td>Minimum Duration of Campaign</td>
      <td>3 Months</td>
      <td>3 Months</td>
      <td>3 Months</td>
      <td>3 Months</td>
      <td>3 Months</td>
    </tr>

    <tr class="text-center">
      <td>Monthly Price (AED)</td>
      <td class="main-bold">AED 750	</td>
      <td class="main-bold">AED 1,000	</td>
      <td class="main-bold">AED 1,250	</td>
      <td class="main-bold">AED 1,500	</td>
      <td class="main-bold">AED 2,000 </td>
    </tr>

    <tr class="text-center">
      <td>Facebook Company Page Design</td>
      <td>2 Concept	</td>
      <td>2 Concept	</td>
      <td>2 Concept	</td>
      <td>3 Concept	</td>
      <td>3 Concept	</td>
    </tr>

    <tr class="text-center">
      <td>No Setup Fee</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Landing Page Consultation</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>

    </tr>

    <tr class="text-center">
      <td>Content Research & Creation</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Social Media Posts / Month</td>
      <td>6</td>
      <td>12</td>
      <td>18</td>
      <td>24</td>
      <td>30</td>
    </tr>

    <tr class="text-center">
      <td>Contest or Promotions / Month</td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td>1</td>
      <td>1</td>
      <td>2</td>
    </tr>

    <tr class="text-center">
      <td>Facebook Paid Ads Creation & Management</td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
    </tr>

    <tr class="text-center">
      <td>Engagement with Customers*	</td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Monthly Progress Report</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

  
  </tbody>
</table>
   </div> 


   <h2 class="tab-heading">Instagram Marketing Prices</h2>
      <div class="table-area table-responsive">
   <table class="table">
  <thead>
    <tr class="table-heading">
      <th scope="col">Instagram Marketing Prices</th>
      <th scope="col">Budget</th>
      <th scope="col">Economy</th>
      <th scope="col">Startup</th>
      <th scope="col">Growth</th>
      <th scope="col">Corporate</th>

    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td>Minimum Duration of Campaign</td>
      <td>3 Months</td>
      <td>3 Months</td>
      <td>3 Months</td>
      <td>3 Months</td>
      <td>3 Months</td>
    </tr>

    <tr class="text-center">
      <td>Monthly Price (AED)</td>
      <td class="main-bold">AED 750	</td>
      <td class="main-bold">AED 1,000	</td>
      <td class="main-bold">AED 1,250	</td>
      <td class="main-bold">AED 1,500	</td>
      <td class="main-bold">AED 2,000 </td>
    </tr>

    <tr class="text-center">
      <td>Instagram Profile Creation</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Content Research & Creation	</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Instagram Posts / Month</td>
      <td>6</td>
      <td>12</td>
      <td>18</td>
      <td>24</td>
      <td>30</td>

    </tr>

    <tr class="text-center">
      <td>Instagram Paid Ads Creation & Management</td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
    </tr>

    <tr class="text-center">
      <td>Development Of Instagram Strategy</td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>

    </tr>

    <tr class="text-center">
      <td>Engagement with Customers</td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Monthly Progress Report</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

  </tbody>
</table>
   </div> 

   <h2 class="tab-heading">LinkedIn Marketing Prices</h2>
      <div class="table-area table-responsive">
   <table class="table">
  <thead>
    <tr class="table-heading">
      <th scope="col">Linkedin Marketing Deliverables</th>
      <th scope="col">Budget</th>
      <th scope="col">Economy</th>
      <th scope="col">Startup</th>
      <th scope="col">Growth</th>
      <th scope="col">Corporate</th>

    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td>Minimum Duration of Campaign</td>
      <td>3 Months</td>
      <td>3 Months</td>
      <td>3 Months</td>
      <td>3 Months</td>
      <td>3 Months</td>
    </tr>

    <tr class="text-center">
      <td>Monthly Price (AED)</td>
      <td class="main-bold">AED 750	</td>
      <td class="main-bold">AED 1,000	</td>
      <td class="main-bold">AED 1,500	</td>
      <td class="main-bold">AED 2,000	</td>
      <td class="main-bold">AED 3,000 </td>
    </tr>

    <tr class="text-center">
      <td>Linkedin Company Page Design</td>
      <td>2 Concept	</td>
      <td>2 Concept	</td>
      <td>2 Concept	</td>
      <td>3 Concept	</td>
      <td>3 Concept	</td>
    </tr>

    <tr class="text-center">
      <td>Landing Page Consultation</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>LinkedIn Posts / Month</td>
      <td>4</td>
      <td>6</td>
      <td>8</td>
      <td>10</td>
      <td>12</td>

    </tr>

    <tr class="text-center">
      <td>LinkedIn Lead Direct Messaging / Month</td>
      <td><i class="fa fa-times"></i></td>
      <td>5</td>
      <td>10</td>
      <td>15</td>
      <td>25</td>
    </tr>

    <tr class="text-center">
      <td>LinkedIn Paid Ads Creation & Management</td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td>1</td>
      <td>2</td>
      <td>3</td>

    </tr>

    <tr class="text-center">
      <td>Engagement with Customers</td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Create & Manage Industry Related Group</td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-times"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

    <tr class="text-center">
      <td>Monthly Progress Report</td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
      <td><i class="fa fa-check"></i></td>
    </tr>

  </tbody>
</table>
   </div> 
   </div><!--end of tab three--> 

   <div  class="tab " data-id="tab4">
          <h2 class="tab-heading">PPC / Paid Ad Campaign Prices</h2>
         <div class="table-area">
         <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Google Text Ad Campaigns
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Package Includes: Google Text Ad Creation & Posting + Creative Copywriting + Keyword Research + Identifying Negative Keywords + A/B Ad Testing + Optimizing 
          Ads for Maximum Conversions + Monthly Conversion Reports (Note: Ad Budget cost will be additional)</p>

          <p class="ppc-pricing">AED 750 per month</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Google Display Ad Campaigns
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Package Includes: Google Display Ad Creation & Posting + Creative Copywriting + Keyword Research + Ad Image Design & Editing + Identifying Negative Keywords 
        + A/B Ad Testing + Optimizing Ads for Maximum Conversions + Monthly Conversion Reports (Note: Ad Budget cost will be additional)</p>

          <p class="ppc-pricing">AED 1,500 per month</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Google Remarketing Ad Campaigns
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Package Includes: Google Remarketing Campaign for either Text Ad or Display Ad on the Adwords platform (Note: Ad Budget will be Additional)</p>

          <p class="ppc-pricing">AED 250 per month</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      Facebook Ad Campaigns
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Package Includes: Facebook Photo or Video Ad Creation & Posting + Creative Copywriting + Ad Image Design & Editing + Target Audience Research + 
        Content & Hashtag Research + Optimizing Ads for Maximum Conversions + A/B Ad Testing + Real Time Analytics + Monthly Conversion Reports 
        (Note: Ad Budget cost will be additional)</p>

          <p class="ppc-pricing">AED 375 per month</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      Instagram Ad Campaign
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Package Includes: Instagram Photo or Video Ad Creation & Posting + Creative Copywriting + Ad Image Design & Editing + Target Audience Research + 
        Content & Hashtag Research + Optimizing Ads for Maximum Conversions + A/B Ad Testing + Real Time Analytics + Monthly Conversion Reports 
        (Note: Ad Budget cost will be additional)</p>

          <p class="ppc-pricing">AED 375 per month</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      LinkedIn Ad Campaign - Sponsored Content
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Package Includes: LinkedIn Sponsored Content Ad Creation & Posting + Creative Copywriting + Ad Image Design & Editing + Target Audience Research + 
        Content & Hashtag Research + Optimizing Ads for Maximum Conversions + A/B Ad Testing + Real Time Analytics + Monthly Conversion Reports 
        (Note: Ad Budget cost will be additional)</p>

          <p class="ppc-pricing">AED 500 per month</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      LinkedIn Ad Campaign - Sponsored Messages
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Package Includes: LinkedIn Message Ad Creation & Posting + Creative Copywriting + Target Audience Research + Content Research & Writing + 
        Optimizing Ads for Maximum Conversions + A/B Ad Testing + Real Time Analytics + Monthly Conversion Reports (Note: Ad Budget cost will be additional)</p>

          <p class="ppc-pricing">AED 500 per month</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
      LinkedIn Ad Campaigns (Sponsored InMail)
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Package Includes: Dedicated Account Manager + Ad Copywriting Team + Target Audience Research + LinkedIn InMail Content Writing + Sending Personalized 
        InMail Messages + Monthly Conversion Reports (Note: Ad Budget cost will be additional)</p>

          <p class="ppc-pricing">AED 375 per month</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingNine">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
      Instagram Ad Campaigns (Story or Carousel Ad)
      </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Package Includes: Dedicated Account Manager + Instagram Story Ad or Carousel Ad Posting + Target Audience Research + Ad Image Design & Editing + 
        Content & Hashtag Research & Posting + Monthly Conversion Reports (Note: Video Ad Creatiion & Ad Budget cost will be additional)</p>

          <p class="ppc-pricing">AED 750 per month</p>
      </div>
    </div>
  </div>
</div>
         </div>   
   </div><!--end of tab four--> 

   <div  class="tab " data-id="tab5">
   <h2 class="tab-heading">Productivity Solutions Prices</h2>
   <div class="table-area table-responsive">
   <table class="table">
  <thead>
    <tr class="table-heading">
      <th scope="col">Productivity Software Prices</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>

    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td>Sales Team Reporting Software (CRM)</td>
      <td>Customer Database Management + Sales Pipeline + Deal Management + Team Activity Tracking + Reports, Charts & KPIs	</td>
      <td><strong>AED 2,000 per year (Upto 5 Users)</strong></td>
    </tr>

    <tr class="text-center">
      <td>Quotation Software</td>
      <td>Online Quotation Maker + Product & Image Inventory + PDF Creator + Invoice & DO Management + Reports, Charts & KPIs</td>
      <td><strong>AED 1,000 per year (Upto 5 Users)</strong></td>
    </tr>

    <tr class="text-center">
      <td>Customer Feedback Software</td>
      <td>See what customers have to say about your business, identify any problems in your product or service, and find opportunities for growth with our easy to use customer feedback software	</td>
      <td><strong>AED 100 Monthly / AED 750 Yearly</strong></td>
    </tr>

    <tr class="text-center">
      <td>Customer Loyalty Software & App	</td>
      <td>Create a loyalty program for your business in minutes and start to engage and retain your customers. Available on Android and iOS App Store	</td>
      <td><strong>AED 100 Monthly / AED 750 Yearly</strong></td>
    </tr>

  </tbody>
</table> 
</div>  
   </div><!--end of tab five--> 

</div><!--end of container-->

<!--===================================End Pricing Sections===============================================-->
<div class="section counter-area section-padding">
			<div class="container">
				<div class="counter-wrapper">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-counter text-center">
								<div class="counter-content">
									<h3><span class="odometer" data-count="500">00</span><span class="plus">+</span></h3>
									<p class="wow fadeInUp" data-wow-delay=".2s">Business Strategy</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-counter text-center">
								<div class="counter-content">
									<h3><span class="odometer" data-count="35">00</span><span class="plus">+</span></h3>
									<p class="wow fadeInUp" data-wow-delay=".3s">Expert Consultants</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-counter text-center">
								<div class="counter-content">
									<h3><span class="odometer" data-count="80">00</span><span class="plus">%</span></h3>
									<p class="wow fadeInUp" data-wow-delay=".4s">Client Satisfaction</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-counter text-center">
								<div class="counter-content">
									<h3><span class="odometer" data-count="120">00</span><span class="plus">+</span></h3>
									<p class="wow fadeInUp" data-wow-delay=".5s">Award Winning</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section question-area" style="background-image: url(assets/images/bg/question-bg.jpg);">
			<div class="container">
				<div class="question-wrapper section-padding">
					<div class="row align-items-center">
						<div class="col-lg-8 col-md-8">
							<div class="question-content">
								<div class="section-title">
									<h2 class="title wow fadeInUp" data-wow-delay=".3s">Start your project with us.</h2> </div>
								<p class="wow fadeInUp" data-wow-delay=".5s">We are here to make your brand.</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="question-btn text-md-end"> <a class="main-btn wow fadeInUp" data-wow-delay=".5s" href="#">Get A Quote <span><i class="flaticon-right-arrow-angle"></i></span> </a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>

        
		
		<?php include('../footer.php');?>

        <script>
            $(document).ready(function(){ 
    $('.tab-a').click(function(){  
      $(".tab").removeClass('tab-active');
      $(".tab[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active");
      $(".tab-a").removeClass('active-a');
      $(this).parent().find(".tab-a").addClass('active-a');
     });
});
        </script>