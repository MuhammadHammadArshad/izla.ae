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
								<h2 class="title">SSL Certificate</h2>
								<ul class="breadcrumb justify-content-center">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">SSL Certificate</li>
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
            
            <div class="main-content-para">
                <p class="mx-5 pt-5">You are looking for a security protocol that enables your encrypted link between a web server and a web browser? SSL 
                  or Secure Sockets Layer is the answer for that. It???s a digital certificate that ensures you have an encrypted connection and authenticates 
                  your website???s identity.</p>
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
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">SSL Enables Encryption</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Buying an SSL Certificate will encrypt your website, and you can rely 
                on it as it will help provide strong security for your customers??? protection. Using SHA-256 and 2048 bit RSA keys and Elliptic Curve Cryptography 
                (ECC) support will happen.
              </p>
            </div>

            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Help Boost SEO</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Google also states that websites not using SSL Certificates are 
                ???Not Secure.??? And to get yourself ranked websites using a good SSL Certificate is a smarter choice. Get higher customers than those who 
                use cheap ones as it also increases, the risk of losing clients.

              </p>
            </div>

            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Ensures Client Trust</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">Suppose you are a customer and see that your website does not have an SSL 
                Certificate. It might get the Customer the idea that they are not in safe hands, and a Website SSL Certificate helps you earn that priceless trust.
              </p>
            </div>

            <div class="area-content">
                <div class="heading-area-content py-3" style="display: flex;">
                    <i class="fas fa-caret-right" style="padding-top: 5px; font-size: 30px; color: #f31717; margin-left: 4%;"></i>
                    <h5 class="title-content py-2" style="margin-left: 5%; margin-right: auto;">Increase Sale Ratio</h5>
                </div>
                <p class="para-content" style="margin-left: 10%; margin-right: auto;">After earning the client's trust, the outcome will be the number of the customer 
                will increase gradually. It is growing sales as well.
              </p>
            </div>


        </div>
            <div class="col-md-4">
                <img src="../assets/images/services/ssl.png" alt="" width="80%" class="content-image-area">
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
        Reasons to get an SSL Certificate
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>While using different web browsers will help you secure your sessions. Your website will become more credible since it will be secure to browse 
          through SSL certification. Your audience will not have to worry about their credentials, and they will be freely surfing through your website.</p>
      </div>
    </div>
  
    <div class="accordion__item">
      <button class="accordion__btn">
  
        <span class="accordion__caption"><i class="fas fa-caret-right" style="font-size: 30px; color: #f31717; margin-right: 2%;"></i>
        SSL Certificate Benefits
        </span>
        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
      </button>
  
      <div class="accordion__content">
        <p>It is always an excellent choice to take your Customer under trust, and this is where SSL Certificate comes in.</p>
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