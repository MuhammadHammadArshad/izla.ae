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
								<h2 class="title">Search Engine Optimization (SEO)</h2>
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
                <p class="mx-5 pt-5">Search Engine Optimization allows your website to rank better in search engine results. We use organic keywords to optimize 
                  your website. It will help you organize your website to the top without using artificial means. The better a website is optimized according to 
                  the search engine, the better it will rank, and more people will see your website. Our experienced and talented SEO experts optimize your website 
                  in the best way possible. Many result-oriented techniques will help push your website to the top search engine results. Use our coherent, 
                  well-targeted and effective SEO strategy to improve your website's ranking.</p>

                  <p class="mx-5 py-3">Over the past couple of decades, Search Engine Optimization has gone through significant advancements. 
                    Izla.ae optimizes your website according to the Search Engine's latest algorithm. Our integrated approach helps you rank your 
                    website higher in search engine results. Your website becomes more assessable with increased traffic. We also use local map listings 
                    that pop up your business on Google Maps. Our action plan provides immediate results with a sustained growth path. Choose us as your 
                    crucial SEO agency and get your brand ranked on every platform.</p>
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
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">On-Page SEO</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Improve optimizable title tags, content, internal links, and URLs using our 
                best On-Page SEO strategies. Optimize your site's pages according to the keywords and search engine results. Efficient use of keywords is necessary 
                for the web pages by considering keyword density, keyword spacing, number of backlinks, Etc. The better keywords used on your website's page, 
                the better it will rank in search engine results.</p>
            </div>
            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Off-Page SEO</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Off-page SEO allows the search engine to recognize your webpage in the background.
                 Our SEO experts provide a better content submission, link building, social media promotions, ad posting, and guest posting services. That will help in 
                 the Off-Page optimization of your website. These services will allow the search engine to probe your website's pages and produce results efficiently.</p>
            </div>

            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Technical SEO</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Help search engines access, crawl, interpret and efficiently index your site. 
                Our technical SEO team works in all possible domains. We provide technical assistance that will increase the chances of the search engine recognizing
                 your website in no time. Our specialized services are optimized according to the search engine specifications and provide 
                 the best possible results.</p>
            </div>
        </div>
            <div class="col-md-4">
                <img src="../assets/images/services/seo.png" alt="" width="80%" class="content-image-area">
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
        What Does SEO Stand For?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>SEO stands for Search Engine Optimization.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What Is Search Engine Optimization (SEO)?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Search engine optimization refers to optimizing your web page according to the search engine's ranking algorithm. The SEO of a website determines the 
          organic ranking and visibility of the website on the internet. Invest in your website's SEO today to rank it to the top.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What Is On-Page SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>On-page SEO techniques are used on or within a web page to rank it higher in the search engine's list. It involves the content and HTML source code
           of a web page. Image optimization, keyword optimization, backlinks development, Etc., are other features used for On-page SEO.
        </p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Will HTTPS Affect SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Yes, HTTPS does affect Search Engine Optimization. HTTPS is, generally speaking, a securer form of HTTP. Look at the URL of this page. See the "HTTPS" 
          at the beginning and "Secure" on its left side. Google tend to favor such pages more than the rest. It indexes the HTTPS pages first, recognizes the 
          HTTPS as a ranking signal, and places them at the top. HTTPS is also faster and more effective than HTTP by affecting the click-through rate. So yes, 
          changing to HTTPS will improve your website's ranking and help in drawing better results.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What Are SEO Backlinks?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Backlinks are exclusively used links of a website on another page or website. The number and overall quality of backlinks directed to a web page can 
          be a valuable factor in determining the ranking of that particular page. Backlinks provide a sound support system for improving the scale of the site. 
          The likeliness of achieving a higher rank in the search engine increases with increasing quality backlinks.</p>
      </div>
    </div>
	<div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What Can SEO Do For Your Business?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>SEO is the most valuable asset if online marketing is integral to your business. A little research of the ranking techniques and integrating 
          some primary SEO techniques may easily rank your website at the top of the list. SEO improves your ranking and makes your website more visible 
          to the audience. The audience's exposure to your website increases manifolds, increasing your outreach and generating more revenue.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Which Search Results "Organic"?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Organic search results are achieved through quality SEO and content generation. By increasing your site's organic ranking, you will not need 
          any paid promotion to rank it better.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Why Is SEO Important?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>SEO is a beneficial online marketing resource that must integrate into an online business to generate valuable results. 
          By providing quality and well-written content with the right keywords, you can quickly gear up the traffic on your site through organic 
          means—no need to pay for promotions and advertisements for traffic. A well-implemented SEO strategy can win laurels for your online business. 
          By optimizing your website, the search engine can better understand your site, which will increase the visibility of the area against organic keywords. 
          In other words, SEO has the potential to increase traffic on your website 20 times more than the standard PPC strategy.</p>
      </div>
    </div>
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Why Should I Hire An SEO Professional, Consultant, Or Agency?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Every online business does need some SEO. Depending on your availability, willingness to learn, and the complexity of your website(s), you can consult 
          any suitable professional. Your business's level of complexity will determine how proficient and experienced person you need for your website's SEO. 
          If you are running a small scale business without enough bandwidth, you can SEO your site yourself. Either way is okay!
        
          If you decide to look for an SEO expert, many digital marketing companies offer "SEO services". Do make the selection by analyzing their portfolio, marketing 
          experience, and content analysis.
        </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How Do Search Engines Work?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Search engines perform three primary functions:<br>
        1.	Crawling: Search the search engines for content, looking over the code/content for each URL.
        <br>2.	Indexing: Store and organize the content found during the crawling process. After a web page is in the index, it is in the process to be displayed as a result of relevant queries.
        <br>3.	Ranking: Provide the best content that suits the searcher's questions. It implies that results are gathered from most relevant to least one.
        </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What Is Search Engine Ranking?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>When a searcher browses the internet and asks a query, the search engines read and scour the index for the most relevant content, intending to clear 
          the question asked by the searcher. Thus, in this way, search engines work to correctly answer and accommodate the searcher's queries in the best way
          possible. The ordering of the search results and placement of the websites on the window is known as Search Engine Ranking. Thus, the more relevant
          a website is, the higher it will rank in the search engine.</p>
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
        <p>Yes, every online business must invest in SEO. Even if you are not running an online business, you must start looking for one since everything is 
          going online in this cyber era. Due to the increasing online competition, it is getting more challenging day by day to improve the rankings of online 
          platforms and increase visibility. You can achieve increased traffic to your website without paying for any sponsored ads through proper SEO. 
          For this, you will need a professional digital marketing company with expertise in Search Engine Marketing.</p>
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
        <p>SEO is optimizing your website according to the search engine's ranking criteria. Google have more than 200 ranking factors according 
          to which its algorithm works. Each website on the search engine is indexed according to the algorithm against each query or keyword. Content relevance, 
          website authentication, keyword optimization, and the number of relevant products on the website affect the website's ranking.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Why Isn't My Website Ranking On Google?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Your ranking on Google may get affected due to the following reasons.<br>
· The website is in the introductory stage and needs good SEO to get ranked better.<br>
· The website is not meeting the browser's intent.<br>
· The website may not be secure for the browsers and can block the search engine's access.<br>
· Indexing of the website is yet to be done.
</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Should I Do SEO, Run PPC Ads, Or Both?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>For sustainable business and marketing of your website, you must build and develop various digital marketing resources. 
          But in the case of small businesses, the overall budget maintenance is tricky. It must allocate the resources efficiently to generate maximum turnout. 
          Targeted PPC campaigning on a smaller scale with a well-maintained SEO strategy is the key to the optimum promotion of your brand/website.</p>
      </div>
    </div>
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What Is The Difference Between On-Page SEO And Technical SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>On-page SEO covers your page's content, Meta tags, images, and the like. These are the elements of the page that are visible to the users. In contrast, 
          technical SEO is related to Google crawls and Indexing.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How Do I Create SEO-Friendly Content?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>By SEO-friendly content, we mean the best-optimized content with the search engine. The search engine can conveniently read and probe the content. 
          By SEO- friendly, we do not mean keyword-stuffed content. Initiate your SEO writing with keyword research. It will help you understand the high demand terms 
          that every searcher is looking for. Place the keywords while maintaining an ideal keyword density, keyword spacing and placing them in appropriate 
          places within your content. All these techniques and many more will help you develop perfect SEO- friendly content.</p>
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