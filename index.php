<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.5.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.5.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="jjj.jpg" type="image/x-icon">
  <meta name="description" content="Intro tech & technical services company offer reliable and efficient value added services, Mobile applications and GSM solutions.

">
  <title>Intro tech</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <!--link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

  <script>
  (function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });

  // start all the timers
  $('.timer').each(count);

  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});

  </script>

     <style type="text/css">
        body
        {
            padding: 10pt !important;
        }

		.counter {
    background-color:#f5f5f5;
    padding: 20px 0;
    border-radius: 5px;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 13px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #4ad1e5;
}


 
    </style>

</head>
<body>
    <!-- Bootstrap -->



    <!-- Bootstrap -->


<section id="menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top" style="background: #fff">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.html" class="navbar-logo"><img src="jjj.jpg" alt="intro" title="Intro tech"></a>

                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="#menu-0" style="color: #000000">Home</a></li>
					<li class="nav-item"><a class="nav-link link" href="#header3-0" style="color: #000000">About</a></li>
					<li class="nav-item"><a class="nav-link link" href="#header3-2" style="color: #000000">What we do</a></li>
					<li class="nav-item"><a class="nav-link link" href="#msg-box8-0" style="color: #000000">Services</a></li>
                                        <li class="nav-item"><a class="nav-link link" href="#form1-0" style="color: #000000">Contact</a></li>
                                        <li class="nav-item"><a class="btn btn-social" title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCnFa8gD5Hfv8ALCFvTPo12A" style="padding: 0px"><i class="socicon socicon-youtube" style="font-size:  1.75rem"></i></a></li>
                                        <li class="nav-item"><a class="btn btn-social" title="Facebook" target="_blank" href="https://www.facebook.com/NWMmob" style="padding: 0px"><i class="socicon socicon-facebook" style="font-size:  1.75rem"></i></a></li>
					
					</ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<!--section class="engine"><a rel="external" href="#">Programming Solutions to web site building</a></section-->
<section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header4-0" data-bg-video="https://youtu.be/JoTq2j-h3do?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0">
    
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(41, 105, 176 ,0.25);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10">
                    <h2 class="mbr-section-lead " style="font-size: x-large;">Welcome To</h2>
                    <h1 class="mbr-section-title display-1" style="text-decoration: underline;">Intro tech</h1>

                    <p class="mbr-section-lead lead">We offer reliable and efficient Value Added Services, Mobile Applications and GSM Solutions.<br></p>
                    <br><br>   <div style="">
                        <small class="mbr-section-subtitle" style="margin-top:10px; border-radius: 25px;
  border: 2px solid #fff;
  padding: 20px;
  width: 50%;
  height: 150px;box-shadow: 10px 10px 5px #75FF43; -moz-box-shadow: 0 0 10px  5px #75FF43;
      -webkit-box-shadow: 0 0 10px 5px #E8E8E8;
      -o-box-shadow: 0 0 10px 5px #75FF43;background: #FFFFFFA3;">
                    <h2   style="font-size: 18px;
color: #0d1b37;
font-family: 'calibri light';
font-style: normal;
font-weight: bold;">Enter Your GSM Number to Subscribe to Our Services</h2>
                 
<p  > <form><input type="number" placeholder="your number"></form><br></p>
                        </small>
                </div>
                </div>
                
                 
            </div>
        </div>
    </div>



</section>

<section class="mbr-section mbr-section__container" id="header3-0" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2" style="font-size:26px;" ><p>About us<br></p></h3>
                
                <small class="mbr-section-subtitle" style="margin-top:10px; border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 20px;
  width: 100%;
  height: 150px;box-shadow: 10px 10px 5px #75FF43; -moz-box-shadow: 0 0 10px  5px #75FF43;
      -webkit-box-shadow: 0 0 10px 5px #75FF43;
      -o-box-shadow: 0 0 10px 5px #75FF43;">
                     <h3 class="mbr-section-title display-2" style="font-size:19px;font-family:'tahoma';font-style:normal;" ><p> Brief Historical Review<br></p></h3>
                   <div style="font-family:'calibri light';">
                    Established in 2005 in Yemen and expanded to other countries One of the leading VAS and GSM Solutions providers in region Well Skilled and qualified technical team Committed to assisting customers worldwide with their unique needs by providing them with comprehensive, value-added solutions.
                   
                   </div></small>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section__container" id="header3-3" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                
                <div style="margin-top:0px; border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 20px;
  width: 68%;display: inline-table;
  height: 230px;box-shadow: 10px 10px 5px #75FF43; -moz-box-shadow: 0 0 10px  5px #75FF43;
      -webkit-box-shadow: 0 0 10px 5px #75FF43;
      -o-box-shadow: 0 0 10px 5px #75FF43;"> 
                      <h3 class="mbr-section-title display-2" style="font-size:19px;font-family:'tahoma';font-style:normal;" ><p> Brief Introduction <br></p></h3>
                      <div style="font-family:'calibri light'; color: #2969b0;">
                          
                     <strong>Intro tech</strong> Mobile Solution works closely with strategic partners to provide customized solutions via bespoke software development and professional services. <strong>Intro tech</strong> Mobile Solution aims to exceed the expectations of every client by offering outstanding customer service, increased flexibility, and greater value, thus optimizing system functionality and improving operation efficiency. And exceptional functional and technical expertise coupled with extensive industry knowledge makes <strong>Intro tech</strong> Mobile solution the ideal choice for a client to manage the implementation of VAS and GSM Solutions. 
                  </div>
                      </div>
                
                   <div class="mbr-section-subtitle" style="margin-top:0px; border-radius: 25px;margin-left: 17px;
  border: 2px solid #73AD21;
  padding: 20px;
  width: 30%;display: inline-table;
  height: 230px;box-shadow: 10px 10px 5px #75FF43; -moz-box-shadow: 0 0 10px  5px #75FF43;
      -webkit-box-shadow: 0 0 10px 5px #75FF43;
      -o-box-shadow: 0 0 10px 5px #75FF43;"> 
                      <h3 class="mbr-section-title display-2" style="font-size:19px;font-family:'tahoma';font-style:normal;" ><p> Mission <br></p></h3>
        
                      <div style="font-family:'calibri light'; color: #2969b0;font-size: 1rem;font-style:normal;"><strong>Intro tech</strong> mobile solution is committed to assisting customers’ world -wide with their unique needs by providing them with comprehensive, value-added solutions.  </div>
           </div> </div>
        </div>
    </div>
</section>


<section class="mbr-section mbr-section__container" id="header3-2" style="background-color: rgb(255, 255, 255); padding-top: 60px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2" style="font-family: 'Montserrat', sans-serif;color: #51b848;font-size: 26px; ">What We Do</h3>
                <small class="mbr-section-subtitle" style="color: #2969b0;font-family: 'calibri light';">With a highly skilled team and reliable pre &amp; after sale services, you have a technology partner who is dedicated to helping you grow your business for years to come.<br></small>
            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery3-0" data-filter="true" style="background-color: #fff; padding-top: 1.5rem; padding-bottom: 1.5rem;">
    <!-- Filter -->
    <div class="mbr-gallery-filter container gallery-filter-active gallery-filter-li" style="background-color: white">
    </div>

    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="0" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/001.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="1" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/002.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="2" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/003.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="3" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/004.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="4" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/005.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="5" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/006.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="6" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/007.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="7" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/008.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="8" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/009.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="What We Do" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="9" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/010.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Our Clients" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="10" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/C0.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Our Partners" data-video-url="false">
                        <div href="#lb-gallery3-0" data-slide-to="11" data-toggle="modal">



                            <img alt="" src="assets/images/wwd/thum/P0.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-0">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="0"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="1"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="2"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="3"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="4"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="5"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="6"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="7"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="8"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="9"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="10"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="11" class=" active"></li>
						<!--li data-app-prevent-settings="" data-target="#lb-gallery3-0" data-slide-to="12" ></li-->
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="" src="assets/images/wwd/1.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/2.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/3.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/4.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/5.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/6.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/7.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/8.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/9.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/10.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/C0.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="" src="assets/images/wwd/P0.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery3-0">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery3-0">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="msg-box8-0" style="background-color: rgb(39, 68, 147); padding-top: 80px; padding-bottom: 40px;">


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2" style="font-size: 26px;" >Services We Offer</h3>

                <div><a class="btn btn-info" href="NWM-SERVICE.pdf"><span class="etl-icon icon-download mbr-iconfont mbr-iconfont-btn"></span>Download Services Guide</a></div>
            </div>
        </div>
    </div>

</section>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mobile Applications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
¦ Mobile Backup<br>
¦ Anti-Theft  <br>
¦ Mobile Ticker <br>
¦ Location Based <br>
¦ Mobile Ticker Application for Advertisement  <br>
¦ Video Ads Call <br>
¦ Mobile Financial Solutions<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">USSD Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
¦ USSD Gateway<br>
¦ USSD Polling Service<br>
¦ USSD Mobile Banking System <br>
¦ USSD Call-back Service
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">IVR &amp; VOICE Solutions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
¦ Get User Location<br>
¦ Music All Platform<br>
¦ Voice Changer   <br>
¦ Song Dedication & Karaoke <br>
¦ Voice Change
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Roaming Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
¦ Caller Line Identification for Outbound Roamer<br>
¦ Welcome SMS Solution                         <br>
¦ Local Roaming Number                <br>
¦ Corrective Dialing Solution       <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--section class="mbr-section mbr-section-md-padding"
 <div class="container">
  <iframe  src="counter/index.html"  height="386" width="100%" allowfullscreen="1" frameborder="0"></iframe>
 </div>
</section-->

<section class="mbr-section" id="form1-0" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">Get in touch&nbsp;</h3>
                    <small class="mbr-section-subtitle">Text us to asking about anything , be sure you will get answers and good offers.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <!--div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid"-->
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">


                    <!--div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
                    </div-->


                    <!--form action="csender.php" method="post" data-form-title="Get in touch&amp;nbsp;"-->
                    <form action="csender.php" method="POST" autocomplete="off">

                        <!--input type="hidden" value="w8cqkO+3rq+/dzUuNbb9A6Ho7gdIJSe8Ua4NeV6uNqrWtuiyGWmHF1aEOVUA6I7QZKtjOfEXLkzChs0rICLDu7H37sjwFeTCDYa/5NkBbkYJy8DPEJuTqjD3BWmFFUMN" data-form-email="true"-->

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-name">Name<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required data-form-field="Name" id="form1-0-name"  placeholder="Ex: John Clony">

                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required data-form-field="Email" id="form1-0-email" placeholder="Ex: info@nwm.et">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" required data-form-field="Phone" id="form1-0-phone" placeholder="Ex: +251116183444 or 00967744012345">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="form1-0-message">Message</label>
                            <textarea class="form-control" name="message" rows="7" required data-form-field="Message" id="form1-0-message" placeholder="Ex: Fill your application or question and you will get fastest answer by email or call."></textarea>
                        </div>

                        <div><button name="submit" type="submit" value="Submit" class="btn btn-info" >Send</button></div>
                        <!--input type="submit" class="btn btn-info" value="Send"-->
                    </form>
                <!--/div-->
            </div>
        </div>
    </div>
</section>



<section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-0" style="background-color: rgb(39, 68, 147); padding-top: 90px; padding-bottom: 90px;">

    <div class="container">
        <div class="row">
                       <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Address</strong><br>Yemen, Sanaa<br><br>
<strong>Contacts</strong><br>
Emails: tawfiq@introtech-me.com<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

Phone: +251 97 934 3435<br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3"><p><strong>Links</strong></p><ul><li><a class="text-white" href="http://www.nwm.et" target="_blank">http://www.intro_tech.com</a></li><li><a href="http://www.nwmsolution.com" target="_blank" class="text-white">http://www.introtech.com</a></li></ul><p></p></div>
           <div class="col-xs-12 col-md-6">
                <div class="mbr-map" data-state="error"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.7202690296717!2d38.766959314786455!3d8.997866993542448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNTknNTIuMyJOIDM4wrA0NicwOC45IkU!5e0!3m2!1sen!2set!4v1591989079766!5m2!1sen!2set" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-0" style="background-color: rgb(39, 68, 147); padding-top: 1.75rem; padding-bottom: 1.75rem;">

    <div class="container">
        <p class="text-xs-center"></p><p><strong>Copyright (c) 2020.</strong></p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>




 
  <input name="animation" type="hidden">






  </body>


</html>
