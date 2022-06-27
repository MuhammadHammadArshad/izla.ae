<?php include('../header.php');?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

<style>
.card-down-list-ul{
	justify-content:center;
	}
	.card-down-list-li{
	text-align: center;
	}
  .center-content-area-start{
        display: flex;
      }

      .fa-plus{
        color:#f31717;
      }
 .accordion {
  width: 80%;
  padding: 1.2rem 0;
  border-radius: 1rem;
  background: white;
  margin-left: 6.5%;
}

.accordion__heading {
  margin-bottom: 1rem;
  padding: 0 1.4rem;
  color:#f31717;
}

.accordion__caption{
    width: 100%;
    display: flex;
    color: #f31717;
    font-weight: 600;
}

.accordion__caption i{
    padding-top:1px ;
}
.accordion__item {
  border-bottom: 1px solid black;
}

.accordion__btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 1.2rem 1.4rem;
  background: white;
  border: none;
  outline: none;
  color: #31A8ED;
  font-size: 1.2rem;
  text-align: left;
  cursor: pointer;
  transition: 0.1s;
}
.accordion__btn:hover {
  color: #31A8ED;
  background: white;
}

.accordion__item--active .accordion__btn {
  color: #0f1327;
  border-bottom: 2px solid #0f1327;
  background: #333;
}

.accordion__icon {
  border-radius: 50%;
  transform: rotate(0deg);
  transition: 0.3s ease-in-out;
  opacity: 0.9;
}
.accordion__item--active .accordion__icon {
  transform: rotate(135deg);
}

.accordion__content {
  font-weight: 300;
  max-height: 0;
  opacity: 0;
  overflow: hidden;
  color: black;
  transform: translateX(16px);
  transition: max-height 0.5s ease, opacity 0.5s, transform 0.5s;
}
.accordion__content p {
  padding: 1rem 1.8rem;
}

.accordion__item--active .accordion__content {
  opacity: 1;
  transform: translateX(0px);
  max-height: 100vh;
}


.info-para{
    font-weight: bold;
    font-size:24px;
  }
		.get_a_qout_area{
		background-color:#000;
		padding-left: 124.6px;
		padding-right: 124.4px;
		padding-top:80px;
		padding-bottom:80px;
		}
		.main-qet-a-quote-section{
		display:flex;
		}
		.quote_underline{
		color: #ffffff; 
		font-size: 14px; 
		margin-top:-2%;
		}
		.get_a_quote_column_section{
		margin-left: 37%;
    	margin-right: auto;
    	margin-top: 2.5%;
		}
		.get_a_quote_button{
		text-transform: uppercase;
    	width: 189px;
    	background: black;
    	color: white;
    	border: 2px solid white;
    	height: 45px;
		padding: 8px 30px;
		font-weight:500;
		}
		.get_a_quote_button:hover{
    	background: white;
    	color: black;
		}
		a.btn-link{
		color:white;
		font-weight:500;
		}
		a.btn-link:hover{
		color:black;
		}
		.quote-heading{
		color: #ffffff;
    	font-size: 42px;
    	line-height: 1.2;
		}

@media (max-width: 767px){
  .center-content-area-start{
        display: inline-block !important;
      }
	.label-content-headding{
		padding-left: unset !important;
		font-size: 21px !important;
		}
	
      .info-para{
    font-size:16px !important;
  }
	.search{
	width:50% !important;
	}
	.top-banner{
		padding-top:30% !important;
		}	
	.content-image-area{
	margin-left:0% !important;
	}
	
}
		

@media (max-width:768px){
  .center-content-area-start{
        display: inline-block !important;
      }
      .content-image-area{
    margin-left: 100%;
    margin-right: auto;
  }
	.main-qet-a-quote-section{
	display:unset;
	text-align:center;
	}
	.get_a_qout_area{
		padding-left:unset;
		padding-right:unset;
		}
	.quote-heading{
    	font-size: 30px !important;
		}
	.get_a_quote_column_section{
	margin-left:unset;
	}
}
		@media (max-width:1024px){
			.get_a_quote_column_section {
			margin-left: 11%;
			}
		}
		

</style>
		<div class="section page-banner-area bg-cover" style="background-image: url(../assets/images/banner-img.jpg); margin-bottom:3%;">
			<div class="container">
				<div class="page-banner-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<div class="page-banner text-center">
								<h2 class="title">Conversion Rate Optimization (CRO)</h2>
								<ul class="breadcrumb justify-content-center">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Digital Marketing</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--========================================== Start Main Content Section For Heading=====================================================-->

<section>
    <div class="main-content-heading">
        <div class="col-md-12">
            <!--<div class="main-heading">
                <h2 class="text-center my-5" style="color: #31A8ED">Search Engine Marketing (SEM)</h2>
            </div>-->
            <div class="main-content-para">
                <p class="mx-5 pt-5">If you are sure that your site has many visitors, but you are not getting enough sales, you are at the right place then. 
                  One of the key reasons might be that your website has a lesser conversion rate. A customer might have landed on your page. However, the visitor 
                  may ignore your website due to the lack of alluring and persuasive Call to Actions (CTAs). It would be best to start considering the best 
                  conversion rate for optimization services. Izla.ae can help you improve your website's conversion rate, which will generate more sales. 
                  Our experienced marketing staff and copywriters know customer psychology and can make your website more captivating and engaging. 
                  We attract your audience through Call to Action and entice them to subscribe, register, buy, Etc.</p>

                  <p class="mx-5 pt-5">Conversion rate optimization helps elevate the number of users visiting your website and appoint them to perform specific 
                    actions on the website. We set the aims needed for your website and facilitate determining the conversion rate through the required steps. 
                    The rate of people clicking on your defined goals is directly proportional to your website's conversion rate. Some of the desired actions include 
                    "Contact Us," "Buy," "Add to Cart," Etc. Our digital marketing experts will help optimize your website for generating more conversion rates,
                     which will help increase traffic on your website specifically. One of the reasons your conversion rate may get neglected is the website's 
                     lack of on-site vision and glamour. Izla.ae's priority is configuring the conversion rate according to your website's demands.</p>
            </div>
        </div>
    </div>
</section>

<!--========================================== End Main Content Section For Heading=====================================================-->


<!--========================================== Start Main Content Center Section For Heading=====================================================-->

<section>
    <div class="center-content-area">
        <div class="col-md-12 center-content-area-start">
            <div class="col-md-8">
                <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Business Objectives</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Our team is dedicated to pointing out and devising all digital goals of your 
                website. To grasp your website goals, a comprehensive analysis of business aims, traffic generating methods, and marketing strategies are needed. 
                It helps to drive a plan for your business. We do not believe in just making the best plan for you but also helping you manifest them. We work on 
                every phase, meeting the deadlines and achieving the goals to keep the suggestions on track.</p>
            </div>
            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Customer Research</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Understanding your customer searches and demands will help our analytical 
                strategists enter their mind-frames while analyzing your website. We specify your targeted audience and generate a website according to their 
                behaviors and needs. It will help in developing a marketing strategy respectively and generating more leads.</p>
            </div>

            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Website Analytics</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">We look deeply into your website's analytics to understand the visitor's 
                interactions and those areas of your website that need rectification. Our website development team analyzes the people who visit your website and 
                its interaction. Our experts optimize it according to their desires. We use some reliable and authentic tools throughout this process so that you 
                can get a quality service.</p>
            </div>

            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Heuristic Analysis</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">A holistic review of the website experience from your perspective is covered 
                through web analytics data to insert consistency. Our dedicated web development team will eliminate all the hindrances your customers experience 
                visiting your website; we will rectify all the issues after a comprehensive analysis. This will increase your website's reliability and improve the 
                user interface. Succinctly, our team will make sure that your website's audience can browse through 
                it more conveniently, making it more user-friendly.</p>
            </div>
        </div>
            <div class="col-md-4">
                <img src="../assets/images/services/cro.png" alt="" width="80%" class="content-image-area">
            </div>
        </div>
    </div>
</section>



<!--========================================== End Main Content Center Section For Heading=====================================================-->

<!--========================================== Start FAQs Section =====================================================-->
<div class="accordion">
    <h2 class="accordion__heading">Frequently Asked Questions</h2>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <!-- <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #31A8ED; margin-left: 4%;"></i> -->
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is meant by conversion rate optimization (CRO)?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Conversion rate optimization (CRO) is defined as increasing conversions from your current web traffic. It can also be done for email marketing.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Why is conversion rate optimization so important?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Conversion rate optimization supports capitalizing on the already attracted audience or traffic. This helps make your marketing more proficient, 
          so you do not have to approach the audience directly but engage them for a hike in the conversion rate. This integration of CRO also increases profits 
          through investments.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How do you calculate your conversion rate?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Conversion rate is the ratio between the number of current audiences and the number of audiences that divert/convert. For example, suppose you 
          sent an email to a particular number of your subscribers (let's say 10000), and the total number of subscribers that responded by converting is 500. 
          Then, the CRO will be 5%.
        </p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What to determine a reasonable conversion rate?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Describing conversion rates has always been a difficult task. Typically 25% conversion rate is considered to be good. Meaning that if the total number 
          of audience is 100, then 25 members from the audience must respond; thus, it would be considered a reasonable conversion rate. It varies a lot according 
          to your aims and expectations and the type of industry.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is a conversion goal/aim?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> After optimizing the web page or email, a conversion goal is the desired aim you want.</p>
      </div>
    </div>
	<div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What are some conversion rate optimization best practices?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Some of the best conversion rate optimization practices include:<br>
•	Make sure that the test is set up correctly<br>
•	Make sure your trial last long<br>
•	Make sure that your test results are reliable enough
</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        When is CRO right for your business?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> If your website attracts some visitors, you should consider CRO. It doesn't depend on how many well-established or large-scale companies you run. 
          You must convert your current traffic to brand advocates, leads, and customers. You should always follow CRO to manifest a 
          hike in your return on investment.</p>
      </div>
    </div>

  </div>



<!--========================================== End FAQs Section =====================================================-->
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
		

    <script>
        // select all accordion items
const accItems = document.querySelectorAll(".accordion__item");

// add a click event for all items
accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

function toggleAcc() {
  // remove active class from all items exept current item
  accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
  );

  // toggle active class on current item
  if (this.classList != "accordion__item--active") {
    this.classList.toggle("accordion__item--active");
  }
}


//Search Javascript

$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});
    </script>

		<?php include('../footer.php');?>