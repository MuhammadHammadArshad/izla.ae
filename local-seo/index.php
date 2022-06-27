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
								<h2 class="title">Local SEO</h2>
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
                <p class="mx-5 pt-5">Is your business struggling to get calls and leads? Or does your website not show on local search engines? We provide you with the 
                  best SEO facilities to help your business elevate. Our SEO experts increase your website's fluency and help the search engine understand your 
                  business category and locality. We help divert the targeted audience to your website and make it more searchable online.  </p>

                  <p class="mx-5 pt-5"> We will place your website among local searches and help it be more reachable through our local SEO services. 
                    Also, you will attain a high rank in the local market competition. Our SEO team will optimize the demographics of your website. 
                    If you choose our premium offer, your website will be ranked among the top relevant searches in the search engine. This will enable your 
                    local business to grow leaps and bounds in a particular area. Thus increasing your sales and making more profit through it. </p>

                    <p class="mx-5 pt-5"> At Izla.ae, our team's experts use the Local Maps Optimization and Content Marketing strategies to elevate your business 
                      in your area. We develop your profiles online and in your business's local awareness. More people are attracted to your website, increasing 
                      your sales.</p>
            </div>
        </div>
    </div>
</section>

<!--========================================== End Main Content Section For Heading=====================================================-->



<!--========================================== Start FAQs Section =====================================================-->
<div class="accordion">
    <h2 class="accordion__heading">Frequently Asked Questions</h2>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <!-- <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #31A8ED; margin-left: 4%;"></i> -->
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is meant by local search engine optimization (SEO)?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> SEO is what makes your website online and helps rank it on the search engine. SEO helps optimize your website's web pages according to the search 
          engines and compute them accordingly. </p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How is SEO important for small businesses?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>  Search engine optimization is vital for your new and small business as it helps generate more leads, which will get you more sales. 
          Local SEO means targeted SEO techniques for a specific region that can easily divert the regional traffic towards your website. In short, 
          SEO is the most reliable way to attract valuable leads and make more profit eventually.  </p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Who needs SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Deep analysis of keyword research data reveals the particular type of keywords regional/local people search for in a specific area. 
          Your website will attain a better rank in local regional searches by optimizing your website's context with those keywords. 
          A surge in your local sales is definite after utilizing SEO properly.
        </p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How should small business owners begin with local SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Look for the best and most reliable digital marketing company and confirm your specific region through detailed keyword research. 
          Then an SEO expert will strategize and help you improve your local ranking.  </p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is search engine optimization (SEO)?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>  Search engine optimization is optimizing your web page according to the search engine's ranking algorithm. The SEO of a particular 
          website indicates its organic ranking and visibility of that website online. Promote your business by investing in your website's SEO. </p>
      </div>
    </div>
	<div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is meant by on-page SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> It is a strategized technique used on or within a specific web page to enhance its ranking position in the search engine's index by changing existing 
          content and even the page's HTML source code. Also, it can include some keyword optimization, Image optimization, backlinks development, Etc. All these 
          techniques are for on-page SEO. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Do HTTPS affect SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>   HTTPS (Hypertext Transfer Protocol Secure) has a remarkable role in affecting Search Engine Optimization. Generally, HTTPS is a securer form of HTTP. 
          Suppose you Look at the URL of this page. You can quickly encounter the "HTTPS" at the top-beginning and "Secure" on its left side. Google likes these 
          pages more than others without HTTPS. So, it indexes the HTTPS pages at the top by recognizing their HTTPS signal. HTTPS is also more rapid in functioning 
          and efficient than HTTP. So yes, HTTPS plays a vital role in improving your website's ranking, and it also helps in drawing lucrative results.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is meant by SEO backlinks?  
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>  These are a type of link used exclusively on the web pages to go back to or on another website. The overall number and quality of backlinks present 
          on a web page play a vital role in regulating the ranking of that particular page. Backlinks also provide a great support system for improving the 
          scale of the site. In short, the number of good quality backlinks on a page help increase the ranking of that particular page. </p>
      </div>
    </div>
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How does SEO affect a particular business?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> SEO is one of the most valuable, even inevitable, assets if online marketing is an essential part of your business. Some research about the ranking 
          techniques can easily elevate the ranking of your website and help bring them on the first pages regarding searches. Besides improving your current order,
           SEO makes your website more visible to the audience. You will experience that your websites' audience experience has been increased manifolds providing 
           you more sales through the prowess use of SEO.
        </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What are "organic" search results?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Organic search results are achieved through quality SEO and effective content generation. You may not need any paid promotions by increasing your 
          website's organic ranking. It will automatically have a better order.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Why is it the primary importance of SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> SEO can generate more profit, being a productive marketing resource. It will also increase your online visibility, provide your website with quality 
          content, helps in developing more traffic towards your website, and many more. So, use SEO techniques on your website. You may have to invest less in 
          promotions and advertisements because your website's ranking will automatically improve, giving you a better position in online marketing. Generally, 
          SEO can increase the traffic by 20% more than a standard PPC strategy.
</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What benefits hiring an SEO professional, consultant, or agency?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Every online business does need and utilizes some SEO. It generally depends on your availability, your willingness to learn, and the complexity 
          of your website. You can consult an SEO expert for this purpose. Your business's expansion level will determine how much proficient and experienced 
          an SEO expert you need for your website. You can SEO your site yourself if you run a small-scale business and have limited bandwidth. And that is 
          acceptable if you know SEO. If you are looking for an SEO expert, remember that many digital marketing companies offer "SEO services." Please select 
          the one that suits you better, taking their portfolio and marketing experience and marketing experience into account.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How do search engines operate?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Search engines work on three primary functions:<br>
1.	Crawling: Search for the content required, review all over the content/code for every URL.<br>
2.	Indexing: Storing and organizing the content passed through the crawling process. In this phase, the web page gets ready to be displayed in relevant searches.<br>
3.	Ranking: Ushering the best and most relevant content suits the searcher's queries. As it implies that results are from most relevant to least one. 
 </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is Search engine ranking?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> The order of the search results and placement of the websites' links on display is known as Search Engine Ranking. Thus, the website's relevancy to 
          the search results decides the site’s ranking. Whenever a client browses the internet and requests a query, the search engines read and purify the index 
          for the most relevant content. Finally, usher the content expecting to compensate for the question asked by the searcher. Thus, in this way, search 
          engines try their best to accommodate and answer possibly the searcher's queries.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Does My Business Need SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>If your business has an online integration, you must invest in SEO. And if you don't have online integration of your business, start it today because 
          everything is going online in this era. Due to the surge of online competition, ranking your website higher is getting more complex daily as the number 
          of websites increases. A proper SEO can support you by increasing traffic to your website without paying for any sponsored ads. We recommend a professional 
          digital marketing company with expertise and better experience in Search Engine Marketing.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How Does SEO Work?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>SEO is the optimization of your website according to the criteria of particular search engines. The algorithm of Google works on 200 different 
          ranking factors content relevancy, keyword optimization, website authentication, and the number of related products present on the website affect 
          the website's ranking. According to the algorithm, each website on the search engine is crawled against relevant queries.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Why Isn't My Website Ranking on Google?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>•	Your ranking on Google depends on the following reasons.<br>
•	The website is in the introductory stage and needs professional SEO to rank better.<br>
•	The website does not meet the browser's criteria.<br>
•	The website may not be secure having HTTPS for the browsers and may block the search engine's smooth access.<br>
•	Indexing of the website is pending
</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Should I Do SEO or Run PPC Ads?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>For a flourishing business and marketing of your website, you should develop several digital marketing resources. However, in the case of small companies,
           maintenance of the budget is the priority, and to achieve maximum turnout, the resources are managed proficiently. Strategize a small-scale PPC campaigning 
           with effective SEO.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What Is the Main Difference Between On-Page SEO and Technical SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>On-page SEO includes your page's content images, Meta tags, Etc. These are the elements visible mainly to visitors. Contrarily, technical SEO is 
          related to Google crawls and the current index on search engines. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How SEO-friendly is content created?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>SEO-friendly content means the best-optimized content so the search engine can easily read and probe through it. It doesn't just mean keyword-stuffed 
          content. Begin your SEO writing with the best keyword search. It will help you comprehend the high-demand terms and what searchers are looking for? 
          Manage an ideal keyword density keyword spacing and place them in appropriate places within your content. All of these techniques and many more will help 
          you develop perfect SEO- friendly content.  </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How long should I pay for an SEO or map optimization service? 
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>You should pay for map optimization for the time you want to make more sales and enhance your online business. The longer the 
          investment in SEO better will be the results. </p>
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