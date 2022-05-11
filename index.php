
<?php
require_once('globals.php');
?>
<html> 
<head>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into Light&amp;display=swap" media="all" id="shr-font-shadows-into light">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="<?php echo($GLOBALS['pageUrl']) ?>/assets/css/style5.css" rel="stylesheet">
        <link href="<?php echo($GLOBALS['pageUrl']) ?>/assets/css/star_rating.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css">
        <script src="https://connect.facebook.net/en_US/sdk.js?hash=9fd289b669a723c54e0d115f45a6f418&amp;ua=modern_es6" async="" crossorigin="anonymous"></script><script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v5.0"></script>
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        <link href="<?php echo($GLOBALS['pageUrl']) ?>/assets/css/ladda-themeless.min.css" rel="stylesheet">
        <link href="<?php echo($GLOBALS['pageUrl']) ?>/assets/css/prism.css" rel="stylesheet">
        
         <meta property="og:image" content="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/userinformation/6277af1799ce3download (88).png" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Ravinder  (Proprietor)" />
        <title>Devbhoomi Travels</title>
        <link rel="manifest" id="manifest-placeholder">
                <script>
            function ColorLuminance(hex, lum) {
                // validate hex string
                hex = String(hex).replace(/[^0-9a-f]/gi, '');
                if (hex.length < 6) {
                    hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
                }
                lum = lum || 0;

                // convert to decimal and change luminosity
                var rgb = "#", c, i;
                for (i = 0; i < 3; i++) {
                    c = parseInt(hex.substr(i*2,2), 16);
                    c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
                    rgb += ("00"+c).substr(c.length);
                }
                return rgb;
            }
            document.documentElement.style.setProperty('--theme-color', "#1700ff");
            document.documentElement.style.setProperty('--theme-color-light', "#1700ff26");
            document.documentElement.style.setProperty('--theme-color-dark1', ColorLuminance("#1700ff", -0.20));
            document.documentElement.style.setProperty('--theme-color-dark2', ColorLuminance("#1700ff", -0.40));
            document.documentElement.style.setProperty('--theme-color-dark3', ColorLuminance("#1700ff", -0.60));
        </script>
        <style type="text/css">
            .enquiry-form input[type=email],input[type=number], select, textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 0px;
                resize: vertical;
                outline: none;
                font-size: 14px;
                font-family: 'Uniform', sans-serif;
            }
            .card-title {
                cursor: pointer;
            }
            .shadow-button {
                cursor: pointer;
            }
            .ladda-button {
                background-color: #1700ff;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin: 6px 0;
                font-family: 'Uniform', sans-serif;
            }
            .error {
                color: red;
                font-size: 12px;
            }
            .h-60 {
                height: 60px;
            }
            .h-80 {
                height: 80px;
            }
        </style>
                    </head>
    <body>
        <div class="page-wrapper" id="home-section">
            <div class="corner"></div>
                        <div class="views-label "><i class="fas fa-eye"></i> Views: <b>13</b></div>
                                    <div class="upper">
                <!-- User Profile Pic -->
                                <img src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/userinformation/6277af1799ce3download (88).png" width="120px" class="rounded-circle shadow-sm">
                                <!-- User Company Name -->
                <div class="firmname">Devbhoomi Travels</div>
                <div style="width: 40%;background-color: #1700ff;height:2px;margin-bottom: 10px;"></div>
                <!-- User First Name and Last Name -->
            <div class="name">Ravinder <span style="margin-top: 5px;display: block"><i style="font-size: 12px;">(Proprietor)</i></span></div>
            <div class="name"> <span style="margin-top: 5px;display: block"><i style="font-size: 12px;"></i></span></div>
                <div class="contact-buttons">
                <a class="contact-button" href="tel:9999200349">
                        <i class="fas fa-phone fa-flip-horizontal"></i>
                        <!-- Call -->
                    </a>
                    <a class="contact-button" target="_blank" href="https://api.whatsapp.com/send?phone=919999200349">
                        <i class="fab fa-whatsapp"></i>
                        <!-- Whatsapp -->
                    </a>
                    <a class="contact-button" target="_blank" href="https://goo.gl/maps/w6MEBP9xpFYbuXJ68">
                        <i class="fas fa-map-marker-alt fa-flip-horizontal"></i>
                        <!-- Direction -->
                    </a>
                <a class="contact-button" target="_blank" href="mailto:devbhumitravels22@gmail.com}">
                        <i class="fas fa-envelope fa-flip-horizontal"></i>
                        <!-- Mail -->
                    </a>
                </div>
            </div>
                        <div class="lower">
                <table class="contact-action-table">
                    <tbody>
                                                <tr>
                            <td>
                                <div class="trapezoid">
                                    <a target="_blank" href="tel: 9999200349" class="contact-action-container-icon">
                                        <i class="fas fa-phone fa-flip-horizontal"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                            <a target="_blank" href="tel:9999200349" class="contact-action-container-text">
                                9999200349
                                </a>
                                <br /><a target="_blank" href="tel:" class="contact-action-container-text">
                                    
                                    </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="trapezoid">
                                    <a target="_blank" href="https://goo.gl/maps/w6MEBP9xpFYbuXJ68" class="contact-action-container-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <a target="_blank" href="https://goo.gl/maps/w6MEBP9xpFYbuXJ68" class="contact-action-container-text address-text">
                                    Delhi
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="trapezoid">
                                    <a target="_blank" href="mailto:devbhumitravels22@gmail.com" class="contact-action-container-icon">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <a href="mailto:devbhumitravels22@gmail.com" class="contact-action-container-text">
                                    devbhumitravels22@gmail.com
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="trapezoid">
                                <a target="_blank" href="https://bit.ly/3wf2PCm" class="contact-action-container-icon">
                                        <i class="fas fa-globe"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <a target="_blank" href=" https://bit.ly/3wf2PCm" class="contact-action-container-text">
                                    https://bit.ly/3wf2PCm
                                </a>
                            </td>
                        </tr>
                                            </tbody>
                </table>
                <div style="padding: 15px;">
                    <div class="p-30"></div>
                    <div class="whatsapp-input">
                        <div class="input-wrapper">
                            <input type="tel" id="whatsapp-input" class="input" placeholder="Enter whatsapp number" oninput="this.value=this.value.replace(/[^0-9]/g,'');"/>
                        </div>
                        <a class="whatsapp-button" target="_blank" href="javascript:;" onclick="handleWhatsappShare(this)">
                        <i class="fab fa-whatsapp"></i>Share on Whatsapp
                        </a>
                    </div>
                    <div class="p-20"></div>
                     <div class="shadow-buttons">
                        <a class="shadow-button" onclick="openShareModal(this, ``)"><i class="fas fa-share-alt shadow-button-icon"></i>Share</a>
                    </div> 
                    <div><a class="shadow-button save-card-button"><i class="fas fa-cloud-download-alt shadow-button-icon"></i>Save Card</a></div>
                    <div class="p-30"></div>
                    <ul class="inprofile share-buttons">
                                            </ul>
                </div>
            </div>
            <div class="corner-bottom"></div>
        </div>

                <div class="section-container" id="about-us-section">
            <div class="corner"></div>
            <h2 class="section-header">ABOUT US</h2>
            <div style="width: 20%;background-color: #1700ff;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
            <table class="about-us-table">
                <tbody>
                                        <tr>
                        <td class="table-row-label">
                            <h3 class="table-row-label-text">Company Name</h3><b class="table-row-label-separator">:</b>
                        <td>
                        <td class="table-row-value">
                            Devbhoomi Travels
                        <td>
                    </tr>
                    <tr>
                        <td class="table-row-label">
                            <h3 class="table-row-label-text">Year of Est.</h3><b class="table-row-label-separator">:</b>
                        <td>
                        <td class="table-row-value">
                            2006
                        <td>
                    </tr>
                </tbody>
            </table>

            <h3>About Us</h3>
            <p><strong>We are contantly working day and night in every aspect to make your journey memerable one. our safe and sanitized cabs offers resonable rates for all Uttrakhand. We are available 24/7.</strong></p>                    <h3 class="speciality-label">Nature of Business</h3> 
                     
                    <ul class="unorderedList"> 
                    	 
                    	 
                    	<li>Service provider</li> 
                    	 
                    	<li>Car Rental service Local &amp; Outstation</li> 
                    	 
                    	<li>Taxi service</li> 
                    	 
                    </ul>
                                        
                   <h3 class="speciality-label">Our Specialities</h3>
                     
                    <ul class="unorderedList"> 
                    	 
                    	 
                    	<li>Knowledgeable team of professionals</li> 
                    	 
                    	<li> Complete client satisfaction</li> 
                    	 
                    	<li> Affordable pricing</li> 
                    	 
                    	<li> Reliable services</li> 
                    	 
                    	<li> Live In Touch With Our Customers</li> 
                    	 
                    	<li> Transparent dealings</li> 
                    	 
                    	 
                    	 
                    	<li>Safe &amp; sanitized Cabs</li> 
                    	 
                    	<li>Professional Drivers</li> 
                    	 
                    </ul> 
                </ul>
                <!-- Download Documents code start. -->
                    <div style="margin-bottom: 10px;">
                                                                    </div>
                    <!-- Download Documents code End. -->
                            
                        
            <div class="corner-bottom"></div>
        </div>
         
        <div class="section-container" id="products-services-section">
                <div class="corner"></div>
                <h2 class="section-header">OUR SERVICES</h2>
                <div style="width: 20%;background-color: #1700ff;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div>
                                        <div class="card">
                        <h3 class="card-title"><a href=""> TAXI SERVICE</a></h3>
                        <div class="product-description"><p></p></div>
                        
                    <img onclick="openImageModal(this)" alt="product Image" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b00f558fddownload (25).jpg" style="width:100%;margin-bottom: 15px;">
                                            <div class="product-enquiry-section">
                        <div class="product-price">
                                                    </div>
                                                                                                <a href="https://wa.me/919999200349?text=Hi, I am interested in your product/service. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                                                                                                </div>
                </div>
                                    <div class="card">
                        <h3 class="card-title"><a href=""> CAB SERVICE</a></h3>
                        <div class="product-description"><p></p></div>
                        
                    <img onclick="openImageModal(this)" alt="product Image" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277aff3663cbhyundai-xcent-2020-exterior-b667.jpg" style="width:100%;margin-bottom: 15px;">
                                            <div class="product-enquiry-section">
                        <div class="product-price">
                                                    </div>
                                                                                                <a href="https://wa.me/919999200349?text=Hi, I am interested in your product/service. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                                                                                                </div>
                </div>
                                    <div class="card">
                        <h3 class="card-title"><a href=""> CAR RENTAL</a></h3>
                        <div class="product-description"><p></p></div>
                        
                    <img onclick="openImageModal(this)" alt="product Image" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b037533f520171208103441_Toyota-Etios-front.jpg" style="width:100%;margin-bottom: 15px;">
                                            <div class="product-enquiry-section">
                        <div class="product-price">
                                                    </div>
                                                                                                <a href="https://wa.me/919999200349?text=Hi, I am interested in your product/service. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                                                                                                </div>
                </div>
                                    <div class="card">
                        <h3 class="card-title"><a href=""> AIRPORT TAXI PICK UP &amp; DROP</a></h3>
                        <div class="product-description"><p></p></div>
                        
                    <img onclick="openImageModal(this)" alt="product Image" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b053a737461e6b0beb1ad96172b0f76c878IMG-20211020-WA0007.jpg" style="width:100%;margin-bottom: 15px;">
                                            <div class="product-enquiry-section">
                        <div class="product-price">
                                                    </div>
                                                                                                <a href="https://wa.me/919999200349?text=Hi, I am interested in your product/service. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                                                                                                </div>
                </div>
                                <div class="corner-bottom"></div>
            </div>
        </div>
                        <div class="section-container" id="payment-options-section">
            <div class="corner"></div>
            <h2 class="section-header">PAYMENT</h2>
                <div style="width: 20%;background-color: #1700ff;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div>
                    <table class="about-us-table">
                        <tbody>
                                                                                    <tr>
                                    <td class="table-row-label">
                                        <h3 class="table-row-label-text">PAYTM Number</h3><b class="table-row-label-separator">:</b>
                                    </td><td>
                                    </td><td class="table-row-value">
                                        9999200349
                                    </td><td>
                                </td>
                            </tr>
                                                                                </tbody>
                    </table>
                    <h3>Account Details:</h3>
                    <table class="about-us-table">
                                <tbody>
                                                                                                                    
                                </tbody>
                            </table>
                            <h3>QR codes:</h3>
                                                                                    
                            <div>
                                                            </div>
                                                                        </div>
                <div class="corner-bottom"></div>
        </div>
                        <div class="section-container" id="gallery-section">
                <div class="corner"></div>
                <h2 class="section-header">GALLERY</h2>
                <div style="width: 20%;background-color: #1700ff;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div class="images-container">
                                                                    <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 1" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b0f00d79dmaxresdefault (11).jpg" style="width:100%">
                        </div>
                                                                                                 <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 1" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b0f013323chardham.jpg" style="width:100%">
                        </div>
                                                                                                 <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 1" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b0f0ec236maxresdefault (10).jpg" style="width:100%">
                        </div>
                                                                                                 <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 1" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b0f2ee8721200px-Haridwar_Ganga_6.jpg" style="width:100%">
                        </div>
                                                                                                 <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 1" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b11ebb578download (8).jpg" style="width:100%">
                        </div>
                                                                                                 <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 1" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b12194709download (9).jpg" style="width:100%">
                        </div>
                                                                                                 <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 1" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b1237e642One-day-in-Manali-Itinerary-India.jpg" style="width:100%">
                        </div>
                                                                                                 <div class="image-wrapper">
                            <img onclick="openImageModal(this)" alt="Image 1" src="<?php echo($GLOBALS['pageUrl']) ?>/assets/upload/product/6277b129bb8052b173712-4362-4b79-9a88-3bab6d1d2298.jpg" style="width:100%">
                        </div>
                                                                 </div>
                <div class="corner-bottom"></div>
            </div>
                                    <div class="section-container" id="video-section">
                <div class="corner"></div>
                <h2 class="section-header">VIDEO</h2>
                <div style="width: 20%;background-color: #1700ff;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div>
                   <!--   -->
                                       <div class="card" style="padding: 10px">
                    <iframe width="100%" height="240" src="//www.youtube.com/embed/tBlc_eJzPD4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
                    </div>
                                        <div class="card" style="padding: 10px">
                    <iframe width="100%" height="240" src="//www.youtube.com/embed/QqUUUYO9uuw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
                    </div>
                                        <div class="card" style="padding: 10px">
                    <iframe width="100%" height="240" src="//www.youtube.com/embed/Ca1tUjOW-bs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
                    </div>
                                    </div>
                <div class="corner-bottom"></div>
            </div>
                                <div class="section-container" id="feedback-section">
                <div class="corner"></div>
                <h2 class="section-header">FEEDBACKS</h2>
                <div style="text-align: center;width: 70px;background-color:#1700ff;height: 2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div class="feedback-list">
                                    </div>
                
                <Script>
                    var visitor_id= "Devbhoomi-Travels-318"
                </Script>
            <form  class="feedback-form card" id="feedback-form">
                    <div class="feedback-form-heading">Give Feedback</div>
                    <div class="h-60">
                    <select class="star-rating" id="rating" name="rating" class="required">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3">Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                    </select>
                     <label id="rating-error" class="error" for="rating"></label>
                    </div>
                    <div class="h-60">
                    <input type="text" name="feedbackName" id="feedbackName" placeholder="Enter Full Name" class="required"/>
                    <label id="feedbackName-error" class="error" for="feedbackName"></label>
                    </div>
                    <div class="h-80">
                    <textarea name="feedback" id="feedback" placeholder="Enter your feedback" class="required"></textarea>
                    <label id="feedback-error" class="error" for="feedback"></label>
                    </div>
                    <!-- Message:<br/> -->
                    <!-- <input type="button" value="Give Feedback" /> -->
                    <button type="button" class="btn btn-info ladda-button" data-style="zoom-out" onclick="sendfeedback('Devbhoomi-Travels-318',$('#feedbackName').val(),$('#feedback').val(),$('#rating').val())"><span class="ladda-label">Give Feedback</span></button>
                </form>
                <div class="corner-bottom"></div>
            </div>
                                    <div class="section-container" id="enquiry-section">
                <div class="corner"></div>
                <h2 class="section-header">ENQUIRY Form</h2>
                <div style="text-align: center;width: 70px;background-color:#1700ff;height: 2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <form class="enquiry-form" id="enquiry-form">
                    <div class="h-60">
                    <input type="text" name="enquiryName" id="enquiryName" placeholder="Enter Full Name" class="required" />
                    </div>
                    <div class="flex">
                        <div class="enquiry-phoneNumber h-60">
                            <!-- Phone Number:<br/> -->
                            <input type="number" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number" class="required" /><br/>
                        </div>
                        <div class="enquiry-email h-60">
                            <!-- Email:<br/> -->
                            <input type="email" name="email" id="email" placeholder="Enter Email" class="required" /><br/>
                        </div>
                    </div>
                    <!-- Message:<br/> -->
                    <div class="h-80">
                    <textarea name="message" id="message" placeholder="Enter Message" class=" required"></textarea></div>
                    <button id="enquiry-btn" type="button" class="ladda-button" data-style="zoom-out"  onclick="sendEnquiry('Devbhoomi-Travels-318',$('#enquiryName').val(),$('#phoneNumber').val(),$('#email').val(),$('#message').val())"><span class="ladda-label">Send</span></button>
                </form>
                <div class="corner-bottom"></div>
            </div>
                    <div class="copyright-wrapper">
            
        </div> <!-- Footer Menu -->
<div class="footer">
        <ul class="footer-menu">
            <li> <a class="footer-menu-link" href="#home-section"> <i class="footer-menu-icon fas fa-home"></i>
                    <div class="footer-menu-text">HOME</div>
                </a> </li>
                 
            <li> 
                <a class="footer-menu-link" href="#about-us-section"> <i class="footer-menu-icon fas fa-briefcase"></i>
                    <div class="footer-menu-text">ABOUT US</div>
                </a> 
            </li>
                                    <li> <a class="footer-menu-link" href="#products-services-section"> <i class="footer-menu-icon fas fa-box-open"></i>
                    <div class="footer-menu-text">OUR SERVICES</div>
                </a> 
            </li>
                                    <li> <a class="footer-menu-link" href="#payment-options-section"> <i class="footer-menu-icon fas fa-money-bill-alt"></i>
                    <div class="footer-menu-text">PAYMENT</div>
                </a> 
            </li>
                                    <li> <a class="footer-menu-link" href="#gallery-section"> <i class="footer-menu-icon fas fa-file-image"></i>
                    <div class="footer-menu-text">GALLERY</div>
                </a> 
            </li>
                                    <li> <a class="footer-menu-link" href="#video-section"> <i class="footer-menu-icon fas fa-video"></i>
                    <div class="footer-menu-text">VIDEO</div>
                </a> 
            </li>
                                    <li> <a class="footer-menu-link" href="#feedback-section"> <i class="footer-menu-icon fas fa-star"></i>
                    <div class="footer-menu-text">FEEDBACKS</div>
                </a> 
            </li>
                                    <li> <a class="footer-menu-link" href="#enquiry-section"> <i class="footer-menu-icon fas fa-comment-alt"></i>
                    <div class="footer-menu-text">ENQUIRY</div>
                </a> 
            </li>
                    </ul>
    </div>

        <!-- The image Modal -->

        <div id="myimageModal" class="modal">

            <span class="close" id="imageModalClose">&times;</span>

            <img class="modal-content fadeIn" id="img01">

           <!--  <div id="caption"></div> -->

        </div>

        <!-- The share Modal -->
        
        
        <div id="shareModal" class="modal share-modal">



            <div class="share-form fadeInUpBig">



                <div class="share-form-header">



                    <h3 class="share-form-header-text">Share Profile</h3>



                    <span class="close" id="shareModalClose">&times;</span>



                </div>



                <div class="share-form-buttons-container">



                    <p>Share my Digital vCard in your network.</p>



                    <div class="share-buttons-heading">



                        <!--<img src="<?php echo($GLOBALS['pageUrl']) ?>/assets/templates/template3/tild-arrow.svg" class="share-buttons-arrow">-->



                        <div class="share-buttons-heading-text">Share my Digital vCard</div>



                    </div>



                    <ul class="share-buttons">



                        <li class="share-button">



                        <a href="javascript:;" target="_blank" onclick="handleDirectWhatsappShare(this, 919999200349)">



                                <i class="share-button-whatsapp fab fa-whatsapp"></i>



                            </a>



                        </li>



                        
                        



                        <!-- <li class="share-button">

                            
                            <i class="share-button-skype fab fa-skype"></i>


                        </li> -->



                        



                       <!--  <li class="share-button">



                            <i class="share-button-linkedin fab fa-linkedin-in"></i>



                        </li> -->



                        



                    </ul>



                </div>



            </div>



        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>

        <script src="<?php echo($GLOBALS['pageUrl']) ?>/assets/js/spin.min.js"></script>

        <script src="<?php echo($GLOBALS['pageUrl']) ?>/assets/js/ladda.min.js"></script>

        <script src="<?php echo($GLOBALS['pageUrl']) ?>/assets/js/star_rating.js"></script>

         <script src="<?php echo($GLOBALS['pageUrl']) ?>/assets/js/script.js"></script>

        <script src="<?php echo($GLOBALS['pageUrl']) ?>/assets/js/form_cont.js"></script>

        <script>

        $(document).ready( function () {

            var id= "Devbhoomi-Travels-318";

            submitview(id);

        });

        </script>

    </body>

</html>

