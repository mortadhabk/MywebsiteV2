@extends('layouts.master')
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')
@section('title', 'myblog2')

@section('content')

<div class="body">


    <div role="main" class="main">

        <div id="about-me">
            <section class="section section-no-border section-parallax bg-transparent custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover parallax-no-overflow m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/resume/about-me/about-me-bg-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative custom-sm-margin-bottom-1">
                            <img src="img/photo-cv-after-photoshop.jpg" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt />
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <h1 class="text-color-primary custom-font-size-1">Mortadha Boubaker</h1>
                            <p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">Chief Product Officer at Okler Themes</p>
                            <span class="custom-about-me-infos">
                                <span class="custom-text-color-1 text-uppercase">Ingénieur informatique</span>
                                <span class="custom-text-color-1 text-uppercase mb-3">Information Technology &amp; Services</span>

                                <span class="custom-text-color-1 text-uppercase">
                                    <a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ms-2">Accéder à mon Portfolio</a>
                                </span>
                            </span>
                        </div>
                        <div class="col-lg-2 col-xl-3 d-none d-lg-block">
                            <img src="img/demos/resume/about-me/mouse.png" custom-anim class="img-fluid custom-image-pos-1" alt />
                        </div>
                    </div>
                </div>
           
            </section>

            <div class="custom-about-me-links bg-color-dark">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-3 text-center custom-xs-border-bottom p-0">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button text-color-light">
                                    <i class="icon-earphones-alt icons text-color-primary"></i>
                                    Contact Information	
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-2 text-center custom-xs-border-bottom p-0">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button custom-divisors text-color-light">
                                    <i class="icon-envelope-open icons text-color-primary"></i>
                                    Send Message	
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-3 text-center p-0">
                            <a href="file/Cv.pdf" class="text-decoration-none" download>
                                <span class="custom-nav-button text-color-light">
                                    <i class="icon-cloud-download icons text-color-primary"></i>
                                    Download Resume	
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section section-no-border bg-color-dark m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="custom-box-details bg-color-darken custom-box-shadow-1 col-lg-6  float-end clearfix">
                                <h4 class="text-color-light">Personal Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="custom-list-style-1 p-0 mb-0">
                                          
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="custom-list-style-1  mb-0 ">
                                        <li class="d-flex flex-column ">
                                                <span class="text-color-light">Date de naissance:</span>
                                                <span class="custom-text-color-2">12 Fev 2000 </span>
                                        </li>
                                          
                                            <li class="d-flex flex-column ">
                                                <span class="text-color-light">Numero:</span>
                                                <span class="custom-text-color-2">07 87 71 81 78</span>
                                            </li>
                                            <li class="d-flex flex-column ">
                                                <span class="text-color-light">EMAIL:</span>
                                                <span class="custom-text-color-2"><a class="custom-text-color-2">mortadhaboubaker12@gmail.com</a></span>
                                            </li>
                                      
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2 class="text-color-light font-weight-extra-bold text-uppercase">About Me</h2>

                            <p>                              Bonjour, je m'appelle Mortadha Boubaker, j'ai 24 ans et je suis ingénieur informatique. Je me spécialise dans la conception d'architectures d'applications et j'ai une expertise approfondie en développement full-stack, avec une préférence pour le front-end. Je travaille dans le domaine du DevOps et de la CI/CD.
</p>

                            <div class="about-me-more" id="aboutMeMore">
                              <p>
                                ...
                              </p>
                            </div>

                            <a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" href="#">View More</a>

                        </div>
                    </div>
                </div>
            </section>
        </div>



        <section id="education" class="section section-no-border bg-color-dark m-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">Education</h2>
                        <div class="owl-carousel nav-bottom custom-dots-style-1 custom-dots-color-1 custom-dots-color-1-light mb-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                         
                            @foreach ($aboutmepage->universityitem as $item)
                            <div class="row">
                                <div class="col-lg-12 col-sm-6 pb-4">
                                    <div class="custom-box-details-2 bg-color-darken custom-box-shadow-3">
                                        <i class="icon-graduation icons text-color-primary"></i>
                                        <h4 class="font-weight-semibold text-color-light m-0">{{$item->name}}</h4>
                                        <p class="custom-text-color-2 mb-1">{!!$item->description!!}</p>
                                        <strong class="text-color-primary">{!!$item->place!!}</strong>
                                    </div>
                                </div>
                                </div>

                            @endforeach

                        
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="section section-no-border bg-color-dark m-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-8 mb-md-0">
                        
     
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="text-color-light text-uppercase font-weight-extra-bold">Skills & Language</h2>
                                <div class="progress-bars mt-4">
                                    @foreach ($aboutmepage->competances as $item)
										<div class="progress-label">
											<span class="text-1">{!! $item->name !!}</span>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar progress-bar-primary" data-appear-progress-animation="{!! $item->rating * 10 !!}%" style="width:  {!! $item->rating * 10 !!}%;">
												<span class="progress-bar-tooltip" style="opacity: 1;">{!! $item->rating * 10 !!}%</span>
											</div>
										</div>
                                    @endforeach   
									
									</div>
                      
                            </div>
                 
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="row">
                            <div class="col">
                                <div class="custom-box-details bg-color-darken custom-box-shadow-1">
                                    <h4 class="text-color-light">Languages</h4>
                                    <ul class="custom-list-style-1 p-0">
                                        <li>
                                            <span class="font-weight-semibold custom-max-width-1 text-color-light"><img src="img/blank.gif" class="flag flag-fr me-1" alt="Franch">Français:</span>
                                            <span class="custom-text-color-2">BILINGUE</span>
                                        </li>
                                        <li>
                                            <span class="font-weight-semibold custom-max-width-1 text-color-light"><img src="img/blank.gif" class="flag flag-us me-1" alt="English">English:</span>
                                            <span class="custom-text-color-2">PROFESSIONNEL</span>
                                        </li>
                                        <li>
                                            <span class="font-weight-semibold custom-max-width-1 text-color-light"><img src="img/blank.gif" class="flag flag-tn me-1" alt="Arabic">Arabe:</span>
                                            <span class="custom-text-color-2">MATERNELLE</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="section section-no-border bg-color-secondary m-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-color-light font-weight-extra-bold text-uppercase">Portfolio</h2>
                        <ul class="nav nav-pills sort-source custom-nav-sort mb-4" data-sort-id="portfolio" data-option-key="filter">
                            <li class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
                            <li class="nav-item" data-option-value=".websites"><a class="nav-link" href="#">Websites</a></li>
                            <li class="nav-item" data-option-value=".logos"><a class="nav-link" href="#">Logos</a></li>
                            <li class="nav-item" data-option-value=".brands"><a class="nav-link" href="#">Brands</a></li>
                        </ul>
                        <div class="sort-destination-loader sort-destination-loader-showing">
                            <div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                    <div class="image-gallery-item mb-4 pb-3">
                                        <a href="img/demos/resume/portfolio/portfolio-1.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info custom-thumb-info-1">
                                                <span class="thumb-info-wrapper">
                                                    <span class="thumb-info-plus"></span>
                                                    <img src="img/demos/resume/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 isotope-item logos">
                                    <div class="image-gallery-item mb-4 pb-3">
                                        <a href="img/demos/resume/portfolio/portfolio-2.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info custom-thumb-info-1">
                                                <span class="thumb-info-wrapper">
                                                    <span class="thumb-info-plus"></span>
                                                    <img src="img/demos/resume/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 isotope-item brands">
                                    <div class="image-gallery-item mb-4 pb-3">
                                        <a href="img/demos/resume/portfolio/portfolio-3.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info custom-thumb-info-1">
                                                <span class="thumb-info-wrapper">
                                                    <span class="thumb-info-plus"></span>
                                                    <img src="img/demos/resume/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                    <div class="image-gallery-item mb-4 pb-3">
                                        <a href="img/demos/resume/portfolio/portfolio-4.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info custom-thumb-info-1">
                                                <span class="thumb-info-wrapper">
                                                    <span class="thumb-info-plus"></span>
                                                    <img src="img/demos/resume/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                    <div class="image-gallery-item mb-4 pb-3">
                                        <a href="img/demos/resume/portfolio/portfolio-5.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info custom-thumb-info-1">
                                                <span class="thumb-info-wrapper">
                                                    <span class="thumb-info-plus"></span>
                                                    <img src="img/demos/resume/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                    <div class="image-gallery-item mb-4 pb-3">
                                        <a href="img/demos/resume/portfolio/portfolio-6.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info custom-thumb-info-1">
                                                <span class="thumb-info-wrapper">
                                                    <span class="thumb-info-plus"></span>
                                                    <img src="img/demos/resume/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                    <div class="image-gallery-item mb-4 pb-3">
                                        <a href="img/demos/resume/portfolio/portfolio-7.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info custom-thumb-info-1">
                                                <span class="thumb-info-wrapper">
                                                    <span class="thumb-info-plus"></span>
                                                    <img src="img/demos/resume/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                    <div class="image-gallery-item mb-4 pb-3">
                                        <a href="img/demos/resume/portfolio/portfolio-8.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info custom-thumb-info-1">
                                                <span class="thumb-info-wrapper">
                                                    <span class="thumb-info-plus"></span>
                                                    <img src="img/demos/resume/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="recommendations" class="section section-no-border bg-color-primary m-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-color-light font-weight-extra-bold text-uppercase">Recommendations</h2>
                    </div>
                    <div class="col-lg-12 p-0">
                        <div class="owl-carousel custom-dots-style-1 custom-dots-color-1 custom-dots-color-1-light custom-dots-position-1 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                            <div>
                                <div class="col">
                                    <div class="testimonial custom-testimonial-style-1 custom-testimonial-style-1-light testimonial-with-quotes mb-0">
                                        <blockquote class="pb-2">
                                            <p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p>
                                        </blockquote>
                                        <div class="testimonial-author float-start">
                                            <p><strong class="text-uppercase text-color-light">Bob Doe</strong><span class="custom-text-color-3 font-weight-light">Director of Engineering</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col">
                                    <div class="testimonial custom-testimonial-style-1 custom-testimonial-style-1-light testimonial-with-quotes mb-0">
                                        <blockquote class="pb-2">
                                            <p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p>
                                        </blockquote>
                                        <div class="testimonial-author float-start">
                                            <p><strong class="text-uppercase text-color-light">Bob Doe</strong><span class="custom-text-color-3 font-weight-light">Director of Engineering</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="blog" class="section section-no-border bg-color-dark m-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-color-light    font-weight-extra-bold text-uppercase">My Blog</h2>

                        <div class="row">
            
        @foreach ($ProjectItems as $item)
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                                    <div class="thumb-info-wrapper">
                                        <a href="/project/{{$item->name}}">
                                            <img src="{{ $item->image_url }}" style="  background-size: contains;"   alt class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="thumb-info-caption">
                                        <div class="thumb-info-caption-text">
                                            <h4 class="mb-2">
                                                <a href="#" class="text-decoration-none text-color-primary  font-weight-semibold">
                                                {{$item->name}}
                                                </a>
                                            </h4>
                                            <p class="custom-text-color-2">{{$item->category->name}}</p>
                                        </div>
                                       
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 pt-4 mt-4 text-center">
                        <a class="btn btn-primary btn-outline custom-btn-style-2 font-weight-bold custom-border-radius-1 text-uppercase">View All</a>
                    </div>
                </div>
            </div>
        </section>

        <div id="say-hello" class="container-fluid" data-spy-offset="40">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <section class="section section-no-border bg-color-primary h-100 m-0">
                        <div class="row justify-content-end m-0">
                            <div class="col-half-section col-half-section-right me-3">

                                <h2 class="text-color-light text-uppercase font-weight-extra-bold">Venez parler avec moi 🗣️. </h2>
                                <form action={{route('contactPost')}} method="post" class="contact-form custom-form-style form-errors-light" >
                                    @csrf
                                    <div class="form-control-custom form-control-custom-light">
                                        <label class="text-color-light">Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>

                                    </div>
                                    <div class="form-control-custom form-control-custom-light">
                                        <label class="text-color-light">Email</label>
                                        <input type="email" class="form-control" name="email">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>

                                    </div>
                                    <div class="form-control-custom form-control-custom-light">
                                        <label class="text-color-light">Subject</label>
                                        <input type="text" class="form-control" name="subject">
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>

                                    </div>
                                    <div class="form-control-custom form-control-custom-light mb--40">
                                        <label class="text-color-light">Message</label>
                                        <textarea name="message" id="contact-message" class="form-control textarea" cols="30" rows="4"></textarea>
                                        <span class="text-danger">{{ $errors->first('message') }}</span>

                                    </div>
                                    <div class="form-control-custom form-control-custom-light">
                                        <button type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1" >Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6 p-0">
                    <section class="section section-no-border h-100 m-0" style="background: url(img/demos/resume/contact/contact-bg-1.jpg); background-size: cover;">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-left ms-3">
                                <a href="#" class="text-decoration-none">
                                    <span class="feature-box custom-feature-box align-items-center mb-4">
                                        <span class="custom-feature-box-icon">
                                            <i class="icon-envelope icons text-color-light"></i>
                                        </span>
                                        <span class="feature-box-info">
                                            <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1 line-height-5">Email</span>
                                            <strong class="font-weight-light text-color-light custom-opacity-effect-1"><span class="__cf_email__" >Mortadhaboubaker12@gmail.com</span></strong>
                                        </span>
                                    </span>
                                </a>
                                <a href="tel:+33787718178" class="text-decoration-none">
                                    <span class="feature-box custom-feature-box align-items-center mb-4">
                                        <span class="custom-feature-box-icon">
                                            <i class="icon-phone icons text-color-light"></i>
                                        </span>
                                        <span class="feature-box-info">
                                            <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1 line-height-5">Numéro</span>
                                            <strong class="font-weight-light text-color-light custom-opacity-effect-1">07 87 71 81 78</strong>
                                        </span>
                                    </span>
                                </a>

                                <span class="feature-box custom-feature-box align-items-center">
                                    <span class="custom-feature-box-icon">
                                        <i class="icon-share icons text-color-light"></i>
                                    </span>
                             
                                    <a href="https://www.instagram.com/mortadha_bk/" class="d-flex text-decoration-none">
                                        <span class="feature-box-info custom-both-side-border mt-2">
                                            <strong class="font-weight-light text-color-light custom-opacity-effect-1">Instagram</strong>
                                        </span>
                                    </a>
                                    <a href="https://www.linkedin.com/in/mortadha-boubakerr/" class="d-flex text-decoration-none">
                                        <span class="feature-box-info p-0 mt-2">
                                            <strong class="font-weight-light text-color-light custom-opacity-effect-1">Linkedin</strong>
                                        </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    <footer id="footer" class="m-0 p-0">
        <div class="footer-copyright bg-color-dark m-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-0">
                        <p class="custom-text-color-2">© Copyright 2024. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


@endsection
