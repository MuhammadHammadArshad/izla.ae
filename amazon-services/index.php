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
								<h2 class="title">Amazon Services</h2>
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
                <p class="mx-5 pt-5">Nowadays, millions of people have started buying online from Amazon, raising the market competition daily. 
                  You want your products to be in the limelight, not to vanish under various products; you should get our services before it gets too late. 
                  Our team will help you improve your products' current ranking on Amazon. All of the Customers' queries and reviews are resolved and 
                  accommodated delightedly regarding Amazon. Our experts will tailor the marketing strategy according to your business. Succinctly, we can help you 
                  supervise and even make your product more visible, enhancing your sales.</p>
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
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Amazon Marketing</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Our amazon marketing strategy improves your website with the help of sponsored 
                ads everywhere possible. We can elevate your sales according to your budget and product criteria by having account auditing insights. After that, 
                your product will get more visibility in the relevant search results field. We run paid ads for increased sales and customize your profile according 
                to Amazon's criteria.</p>
            </div>
            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Amazon SEO</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Writing efficient and well-optimized content that can easily be traced by the 
                system, even attaining a reasonable conversion rate, is always a difficult task. TECHBYNEXARISE can help you get over all these challenges ideally. 
                We can make an eminent customized strategy to rank your products at the top and get more views. Our Amazon marketing team will integrate your profile
                 accordingly, which will allow you to get more sales and draw in more profit.</p>
            </div>

            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Amazon PPC/Sponsored Ads</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Through our effective and impressive services, you will draw maximum profit from amazon PPC and sponsored ads. 
                We will publicize and promote your product within Amazon searches using paid ads. Well-curated paid ads run over the Amazon searches to draw more audience to 
                your profile, accelerating the chances of enhancing sales.</p>
            </div>
        </div>
            <div class="col-md-4">
                <img src="../assets/images/services/amazon-services.png" alt="" width="80%" class="content-image-area">
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
        What is Amazon SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>You will often see different products being placed and popped up in the search results of Amazon. Amazon SEO enables your product and profile to rank 
          better and outclass your competitors. It is the process of optimizing your Amazon product listing to rank higher in the search results. Also enables you 
          to reach more audiences and draw more sales.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Why do I need Amazon SEO services?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> All the sellers on Amazon are eager to make more and more sales on Amazon, making more profit. We help you list your products better through our Amazon 
          SEO services and enable you to make progress in your business. Using our holistic Amazon-seller-oriented SEO strategy, we help you oust your competitors. 
          Some of the crucial ways of enhanced ranking on Amazon SEO include the use of optimizing titles and bullet points to attract clicks from web crawlers, 
          modifying images with keywords in their filenames and alt tags, having links back to your web-pages from authentic and influential sites, and making sure 
          people can find your product throughout social media platforms like Facebook and Instagram, Etc.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Why is Amazon marketplace SEO so important?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Amazon SEO is vital because it helps you rank better in Amazon search results, improving sales. Similar to Google, Amazon also has a search engine 
          algorithm that determines how products should be rated, and this is called Amazon SEO. One of the best ways to make yourself remarkable is mastering 
          Amazon SEO. For your product to have an improved ranking on search listings, you must plan to attain a high vital ranking.
        </p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What does it mean to rank on Amazon?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Amazon ranking means how efficiently a product is selling online. You may come across finding the best keywords using Google AdWords Keyword Tool and 
          the Amazon Best Sellers Rank if you've encountered SEO previously. One of the advantages of advertising on Amazon is that they already have managed their 
          user data. You can easily find what people are looking for in the required categories or through searches, then maneuver that information to generate your 
          listing with specific keywords and answers to familiar questions.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Why is Amazon Listing Optimization so Important for you?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Amazon Listing Optimization is essential because it helps you rank better in Amazon search results, increasing your sales.</p>
      </div>
    </div>
	<div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is Amazon's search engine?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Amazon's search engine is named "A9". A high Amazon sales rank is every sellers' goal for its product. Still, some other factors go into determining 
          whether or not it'll be achievable for any given product at a given point in time, including keyword popularity, various competitors releasing reviews, 
          competition level, and products at the same time. The quality or "popularity" of any keyword on Amazon.com is based on the sales made by listing that 
          specific keyword. Sellers rank their keywords according to their priority so consumers know who they should be looking at discerningly. All high-ranking 
          sellers have less competition to fulfill consumers' orders and, therefore, will oust all other competitors with increased presence across all top search 
          results pages on Amazon.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Does Amazon use A9 at the moment?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Yes, Amazon still regulates through A9.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What does the term Amazon algorithm mean?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> The Amazon algorithm (A9) is a proprietary algorithm that determines which products are to be shown to the clients. Amazon's A9 algorithm is a fine-tuned 
          and advanced system that Amazon uses to decide how products are ranked. It ranks each product by the metrics of your predicted interest. 
          It does this through keyword analysis, big data, machine learning, and, most importantly, shoppers' ratings. A9 algorithm aggregates any statistic data 
          (e.g., time spent on the website; the number of customers and sales; most popular searches; most popular sellers) that matters to you as a shopper.
          These scalars then serve as benchmarks for ranking items from best to worst fit with these metrics, giving you the appropriate result product for 
          your needs and saving you time.</p>
      </div>
    </div>
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Does Amazon SEO work with Google SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Yes, Amazon SEO works with Google SEO. Amazon optimization upgrades product page listing to improve the ranking, conversion rates, and reviews. 
          Amazon has a prominent A9 algorithm that can rank products from best to worst. Also, products with features such as competitive pricing, at least four 
          stars in customer reviews, quick delivery options, and bargain-priced shipping will rank higher than those without all these features. In light of this, 
          sellers need to make e-commerce as simple as possible and take advantage of all available resources to complete their products with their desired 
          characteristics. Taking care of this one part now could lead them to a much better future!
        </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How many keywords does Amazon allow?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Amazon allows up to 100 keywords.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What can I do to enhance my Amazon visibility?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Your visibility on Amazon can be increased by optimizing and enhancing your product listing.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How do I increase my sales on Amazon?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> You can increase sales on Amazon by enhancing your product listing.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How do I optimize my current listing on Amazon?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> You can optimize your Amazon listing by ensuring that your product is up-to-date, concise, and relevant to the search item that the customer used. 
          You can optimize your listing by providing that your product title is pertinent to your product. Your description is detailed and contains all the related 
          information, and all of your images are high quality.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is the purpose of an SEO agency?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Overdrive Amazon SEO services allow you to boost your online product listing. Hence, it shows up high in the natural Amazon search results, making 
          it more likely that a consumer will find your item and purchase from you.</p>
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