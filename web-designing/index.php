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
								<h2 class="title">Website Design</h2>
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
                <p class="mx-5 pt-5">We offer adjustable, functional, and affordable solutions, leaving a better impression. Suppose your company needs a new portal 
                  for your employees or a new website to reach your customers. Izla.ae has the proper expertise and the experience to build it efficiently and align 
                  it perfectly with your aims. Our web designers deliberately analyze everything and continuously remains engaged with you to provide you 
                  with the best web design solution that your business deserves. We have departments like search engine optimization, user journey, and web 
                  hosting that consistently deliver the quality-based solution needed for your business growth. Besides designing your website, we also make 
                  sure that it is visible to the audience you want to target with the help of search engine optimization. We assure you that your website's 
                  ranking appears higher on all the desired search engines when searched with specific keywords. A website needs to be optimized according to 
                  the type of device it’s being searched on. Nowadays, integrating your website with a business has become necessary, increasing the online audience.
</p>

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
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">UI/UX Template Design</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Our UI/UX template designers embellish your website with desired features 
                and a dynamic and ambitious approach. We assure a convenient and complacent experience while browsing through your website. How is the audience 
                going to navigate through your website? Is it going to be a versatile experience for the user? The above factors are undoubtedly the primary factors 
                considered while designing a website or even an app. To create a better impression of your brand, you need to display all of your products, 
                viewing how your product will be displayed.
              
                We at Izla.ae.ae.ae have an in-house expert team that completely comprehends the user journey and creates digital platforms for desktop, mobile, 
                and other devices where users mainly visit to buy products. We reduce the overall bandwidth of the medium, enhance the quality of content and images
                 overall, reduce the page loading time, and many more. Once all the initial steps to improve the user experience are done, we conduct various tests 
                 by introducing different versions and auditing them.
              </p>
            </div>
            

            

            

            
        </div>
            <div class="col-md-4">
                <img src="../assets/images/services/web-design.png" alt="" width="80%" class="content-image-area">
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
        How much time is required to make a website?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>It generally depends on the complexity of the website and the type of business you run. We try our best to deliver before the deadline. 
          Delay becomes inevitable if the client doesn't provide the content on time.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Do we need to have a meeting before the work on the website starts?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> A meeting in person is not a necessity. You can quickly call or email our representatives, which are always there to assist you. 
          We also provide private access to our clients to discuss the content in person or even online as possible. After all the discussion, we strategies 
          to configure all the changes. We keep the website private under customization until the desired outcome is achieved. The site goes online as soon as 
          the customer allows.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is the cost of designing a website?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>The complexity, interaction, and interface of the website determine its cost. It would be a pleasure to discuss everything needed to develop your 
          website and assimilate everything according to your budget.
        </p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Do you design search-engine-friendly websites?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>We believe in making websites according to the guidelines provided by search engines. You should review your website regularly because the rules and
           regulations of search engines keep on changing. It will allow you to make sure whether your website is up to date or not. </p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        I run a small business and want an online presence to promote my business. What's the first step?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Firstly, you need a domain name, a fully functioning website, and a webserver. Also, you, a host required to upload your website and promote it 
          on the search engine. We provide you with everything and ensure the website is working correctly. </p>
      </div>
    </div>
	<div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Do you provide Web design and hosting services?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Izla.ae.ae provides all the services from scratch to ensure that you develop a great website. We can also assist you during your domain name 
          registration and maintenance of your website correctly for years to come. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How do I get my website on search engines, especially Google?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Advanced search engines find your site automatically via links to your website from other sites. Some websites like Google decide the popularity and 
          relevance depending on your website's incoming links. Look at our white paper "Promoting Your Website" to get more information about your site's 
          subscriptions and promotion through search engines.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How many pages can my website possess?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>It's limitless, and you can include as many pages as possible. Search engines prefer websites containing more pages.</p>
      </div>
    </div>
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        My website needs updating. Can you help me?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Of course, it would be a pleasure. We will update your website according to your desire.
        </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Do you redesign existing websites?  
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> We will revamp your website from scratch without disturbing your organization's style and give it a modern look. 
          We can provide you with a free website evaluation and share your ideas on how your website can benefit from the latest Web technologies. 
          We offer free website evaluation and suggest the best ideas to satisfy your present website following the latest web technologies.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Who owns the website once the design work is complete? 
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> You will own it and send a copy of the site to you. Suppose you are interested in working with another Web designer or any hosting company. 
          In that case, you can send the provided copy to them.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How much does a new website cost?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> It depends on various perspectives, so there's no one-line answer to this question. A website is designed and built according to the requirements of 
          your business. Each website is unique, has its prospects, and depends on several components. We custom websites specifically for small businesses. 
          By having a glimpse of your business and desires, we develop an idea about your needs and proceed accordingly. We also provide quotes based assessments. 
          Our sites range from $3,000 to $5,000.</p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is the difference between professional Website designers and low-budget Website designers advertising on the internet?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Low-budget designers use templates, and each client takes one of these templates and modifies it according to their needs. It will help make 
          your website look like all other websites. Contrarily, professional website designers work from the start to create an individually unique design 
          for your business. Established companies also have experienced staff members in their teams to handle all the complexities. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How much time is required to create a website?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Generally, it takes 6 to 8 weeks to design a new website, but it may vary according to the business and client needs. Also, 
          it depends on your availability and the content you will provide to integrate into your website. While developing your website, 
          we will consider all of your suggestions and demands. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Do you provide your service to local clients only?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> We provide our services all over the world. We communicate with our international clients online and have many satisfied clients worldwide. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Will you maintain my site for me?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Sure, we provide our services as long as the customer wants. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Do you make mobile-friendly websites?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Yes, nowadays, people mostly use mobile devices to visit your website. Our team makes sure that your website works on all kinds of devices. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Do you make responsive websites?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p> Yes, we highly emphasize ensuring that the visitor experience to your website, especially on a mobile device, is beyond comparison. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        How long does it take to build a website?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>It takes at least 4 to 6 weeks to launch the website. Feel free to contact us, even if any deadline is given to you. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Who owns the completed website?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>You will be the owner once the website is complete. We will not bound you, and you will have absolute free will and authority. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Can you revise or complete my incomplete website?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>We have specially designed tools and techniques to build a website. Usually, companies avoid this. However, suppose you want to keep a few elements
           from the previous website. In that case, we can help and assimilate all the things into your new website. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        I already have a domain name. Can I use it?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Yes, you can use that. We can manage to use the domain on your behalf by porting the domain to us. You can keep your existing domain registrar and 
          send it to the website we build. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Can I see the design while my website is under development?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>We upload the website on our server so you can have a better idea of your website; then, upon your approval and suggestions, we complete the website. </p>
      </div>
    </div>

    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        Will my website be set up for SEO?
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>We build our websites with best practices without bloating codes, and we also optimize them for Search Engines. We want to add SEO Audits to all of our website projects. </p>
      </div>
    </div>
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        What is included in support? 
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>Suppose you come across any disruptions in your infrastructure and website maintenance. In that case, we are available to remove them as soon as possible. 
          Our support team is there for you every time through a 24/7 ticketing system on our phone from 8 am to 6 pm PST. To help you out, we need answers to a 
          few questions about the site and suggest options to resolve issues. Our support team will give you choices regarding different designs to help you with 
          significant changes.</p>
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