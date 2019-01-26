@extends('layouts.depan')

@section('_content')

 <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                        <img src="{{ url("assetlogin/images/logo/slide3.png") }}">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                        <img src="{{ url("assetlogin/images/logo/slide4.png") }}">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                   
                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                        <img src="{{ url("assetlogin/images/logo/slide3.png") }}">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item-->
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->

          <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>welcome to Jammingup Studio</h2>
                            <p>Jammingup Studio Organization is one Start up in Indonesian</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <i class="fa fa-code"></i>
                                    </div>
                                    <h4>LEARN</h4>
                                    <p>study together, get new knowledge and new families.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <i class="fa fa-gamepad"></i>
                                    </div>
                                    <h4>PLAY</h4>
                                    <p>Create your script and enjoy making creativity like playing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <h4>SHARING</h4>
                                    <p>share knowledge by sharing with others.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <i class="fa fa-group"></i>
                                    </div>
                                    <h4>GROUP</h4>
                                    <p>Join our community and get new knowledge.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->
        <section id="volunteer">
            <div class="container">
                <div class="row vol_area">
                    <div class="col-md-6">
                        <div class="volunteer_content"><br/><br/><br/><br/>
                            <h3>Jammingup <span>Studio</span></h3>
                            <p> Kami berdiskusi wadah apa 
                              yang cocok untuk menampung orang-orang  yang ingin belajar Pemrograman? 
                              Karena kami ingin wadah ini netral tak ada campur tangan pihak manapun. Maka tercetuslah 
                              untuk membuat sebuah studio bernama Jammingup Studio Mengapa Jammingup Studio? 
                              Karena kami percaya suatu saat JAMMINGUP STUDIO akan menjadi tempat utama
                               yang nyaman bagi teman-teman yang ingin belajar Pemrograman.</p>
                        </div>
                    </div>
                    <!--End of col-md-8-->
                    <div class="col-md-5 col-md-offset-1">
                        <div class="join_us">
                        <img src="{{ url("assetlogin/images/logo/23.png") }}" width="100%">
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row and vol_area-->
            </div>
            <!--End of container-->
        </section>
        <!--end of volunteer-->

         
        <!--end of portfolio-->
        <section id="welcome" class="text-center">
            <div class="container">
            
                   
                    <div class="wel_header">
                    <h2>Jammingup Studio Service</h2>
                    <p>We can provide the best service for those who need our services, along with the services we provide.</p>
                        </div>
        
               
                  </div>

               
</div>
</section>

 <section id="testimonial">
            <div class="testimonial_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial_header text-center">
                                <h2>JAMMINGUP STUDIO SQUAD</h2>
                               
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                    <section id="carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                        <!-- Carousel indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                        <img src="{{ url("assetlogin/images/me.jpg") }}" width="70%">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Nadia Salsabil , Lahir Jakarta, 07 Juni 1997 <br>
                                                          Sebaik-baiknya manusia adalah yang bermanfaat bagi sesama</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Nadia Salsabil</h5>
                                                            <p><font color="white">CEO, Fourder</font></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                        <img src="{{ url("assetlogin/images/me.jpg") }}" width="70%">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Nadia Salsabil , Lahir Jakarta, 07 Juni 1997 <br>
                                                          Sebaik-baiknya manusia adalah yang bermanfaat bagi sesama</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Nadia Salsabil</h5>
                                                            <p><font color="white">CEO, Fourder</font></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End of item with active-->
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                        <img src="{{ url("assetlogin/images/me.jpg") }}" width="70%">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Nadia Salsabil , Lahir Jakarta, 07 Juni 1997 di Jammingup Studio menjabat
                                                              sebagai Divisi Web Developer.<br>
                                                          Sebaik-baiknya manusia adalah yang bermanfaat bagi sesama</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Nadia Salsabil</h5>
                                                            <p><font color="white">CEO, Fourder</font></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                        <img src="{{ url("assetlogin/images/me.jpg") }}" width="70%">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Nadia Salsabil , Lahir Jakarta, 07 Juni 1997 <br>
                                                          Sebaik-baiknya manusia adalah yang bermanfaat bagi sesama</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Nadia Salsabil</h5>
                                                            <p><font color="white">CEO, Fourder</font></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--ENd of item-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of row-->
                        </div>
                        <!--End of container-->
                    </section>
                    <!--End of carousel-->
                </div>
            </div>
            <!--End of container-->
        </section>
        <!--end of testimonial-->

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>CONTACT US</h3>
                            <p>Following are the contacts of Jammingup Studio that can be contacted.</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>our office info</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
                                    <i class="fa fa-map-marker"><span>Gedung Jammingup Studio, South Jakarta, Indonesia</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span>+ 8801532-987039</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span>jammingupstudio@gmail.com</span></i>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Send Message</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="scripts/contact.php" class="form-horizontal contact-1" role="form" name="contactform" id="contactform">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="subject" class="form-control" id="subject" placeholder="Subject *">
                                                <div class="text_area">
                                                    <textarea name="contact-message" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                                </div>
                                                <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->







@endsection