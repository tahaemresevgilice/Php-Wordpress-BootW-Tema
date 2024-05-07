<?php
/* Template Name: About Page */
get_header();
?>

<!-- Inside Hero Section -->
    <section class="page-image page-image-about section-box" style="background-image: linear-gradient(rgba(20, 20, 20, 0.8), rgba(20, 20, 20, 0.8)), url('<?php the_field('about_image')?>');background-repeat: no-repeat;background-attachment: scroll;background-position: center center; background-size: cover;height: 400px;">
        <h1 class="page-tittle text-uppercase"><?php the_title(); ?></h1>
    </section>
    <!-- About Us Section -->
    <section id="aboutus" class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2>WHO WE ARE</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, dignissimos ipsam quas nisi officia est!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-md-6">
                    <img src="img/company.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="bg-orange text-start h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-start text-lg-start">
                                <p class="mb-3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit assumenda consectetur sint quaerat accusamus excepturi.<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores obcaecati perspiciatis, officiis saepe sequi quasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section -->
    <section id="team" class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2>TEAM</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, dignissimos ipsam quas nisi officia est!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="img/1.jpg" class="mx-auto rounded-circle">
                        <h4>Jhon Doe</h4>
                        <p class="text-muted">Lead Desinger</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="img/2.jpg" class="mx-auto rounded-circle">
                        <h4>Jhon Doe</h4>
                        <p class="text-muted">Lead Desinger</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="img/3.jpg" class="mx-auto rounded-circle">
                        <h4>Jhon Doe</h4>
                        <p class="text-muted">Lead Desinger</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>