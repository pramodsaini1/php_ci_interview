<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

 <?php $this->load->view("path/head.php")?>

<body>
<?php $this->load->view("path/header.php")?>
 <!-- banner blog section -->
 <section class="w3l-banner-blog py-5">
        <div class="w3l-main-blog py-4">
            <div class="owl-blog owl-carousel owl-theme">
                <div class="item">
                    <div class="news-img position-relative">
                        <a href="blog-single.html"><img src="<?=base_url()?>assets/images/banner-blog1.jpg" class="img-fluid img-responsive"
                                alt="news image"></a>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="news-img">
                        <a href="blog-single.html"><img src="<?=base_url()?>assets/images/banner-blog2.jpg" class="img-fluid img-responsive"
                                alt="news image"></a>
                         
                    </div>
                </div>
                <div class="item">
                    <div class="news-img">
                        <a href="blog-single.html"><img src="<?=base_url()?>assets/images/banner-blog3.jpg" class="img-fluid img-responsive"
                                alt="news image"></a>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="news-img">
                        <a href="blog-single.html"><img src="<?=base_url()?>assets/images/banner-blog6.jpg" class="img-fluid img-responsive"
                                alt="news image"></a>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="news-img">
                        <a href="blog-single.html"><img src="<?=base_url()?>assets/images/banner-blog5.jpg" class="img-fluid img-responsive"
                                alt="news image"></a>
                         
                    </div>
                </div>
                <div class="item">
                    <div class="news-img">
                        <a href="blog-single.html"><img src="<?=base_url()?>assets/images/banner-blog8.jpg" class="img-fluid img-responsive"
                                alt="news image"></a>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="news-img">
                        <a href="blog-single.html"><img src="<?=base_url()?>assets/images/banner-blog4.jpg" class="img-fluid img-responsive"
                                alt="news image"></a>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="news-img">
                        <a href="blog-single.html"><img src="<?=base_url()?>assets/images/banner-blog7.jpg" class="img-fluid img-responsive"
                                alt="news image"></a>
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner blog section -->

    
  

    <!-- blog page -->
    <section class="w3l-text-11 py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                  <div class="col-sm-12"><center><h1 id="about">About Us</h1></div>
                         <div class="col-sm-6 card" style="margin-top:20px">
                            <div class="card-header p-0 position-relative border-10">
                                 
                                    <img class="card-img-bottom d-block radius-image" src="<?=base_url()?>assets/images/pramod.jpg"
                                        alt="Card image cap">
                                
                             </div>
                            
                        </div>
                        <div class="col-sm-6 card" style="margin-top:20px">
                            <div class="card-header p-0 position-relative border-10">
                                <p>
                                  My Name is Pramod Kumar Saini and i' m from Jhunjhunu(Rajasthan).I have completed my B.Tech From Government Engineering College,Bikaner in Computer Sciencen
                                  With 8.5 CGPA.I'm working as PHP Developer in Vorins Technology Pvt Ltd in jaipur and my Skills  are <br><b>Language:C,C++,Core Java</b>
                                  <br><b>Font-End:HTML,CSS,JAVASCRIPT,JQUERY,AJAX,JSON,BOOTSTRAP</b><br>
                                  <b>Back-End:PHP,JSP,SERVLET</b>
                                  <br><b>DataBase:MySQL</b>
                                  <br><b>Developed Toold:Notepad++,xampp,vs Code</b>
                                  <br><b>Data Structure,Wordpress,object Oriented programming,GitHub</b>
                                </p>
                                    
                                
                             </div>
                            
                        </div>
            </div>
            <div class="row" style="margin-top:20px">
                  <div class="col-sm-12"><center><h1 id="contact">Contact</h1></div>
                         <div class="col-sm-6 card" style="margin-top:20px">
                            <div class="card-header p-0 position-relative border-10">
                                 <h1>Contact Us</h1>
                                 <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                                 <br><i class="fas fa-address"></i><strong>Our Address:</strong>
                                 <h6>udaipurwati,Jhunjhunu(Rajasthan);</h6>
                                 <br><i class="fas fa-envelope"></i><strong>Our MailBox:</strong>
                                 <h6>pramodsaini25062000@gmail.com;</h6>
                                 <br><i class="fas fa-phone"></i><strong>Our Phone:</strong>
                                 <h6>+91-8905648522;</h6>
                                    
                                
                             </div>
                            
                        </div>
                        <div class="col-sm-6 card" style="margin-top:20px">
                            <div class="card-header p-0 position-relative border-10">
                            <h3>Ready to Get Started?</h4>
                                 <p>Your email address will not be published. Required fields are marked *</p><br>
                                 <form method="post">
                                   <input type="text" name="user" id="user" class="form-control" placeholder="Enter Your Name..">
                                   <input type="number" name="phone" id="user" class="form-control" placeholder="Enter Your Phone Number..">
                                   <textarea name="msg" class="form-control" placeholder="Message.."></textarea>
                                   <button type="submit">Send Message</button>
                                 </form>
                                    
                                
                             </div>
                            
                        </div>
            </div>
        </div>
    </section>
    <!-- //blog page -->

     
 

     <?php $this->load->view("path/footer.php")?>
</body>

</html>