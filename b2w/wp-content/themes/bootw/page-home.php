<?php 
/* Template Name: Home Page */
get_header(); 
?>

 <!-- Hero Section -->

 <header id="hero" style="background-image: linear-gradient(rgba(20, 20, 20, 0.8), rgba(20, 20, 20, 0.8)), url('<?php the_field('hero_image')?>');background-repeat: no-repeat;background-attachment: scroll;background-position: center center; background-size: cover;height: 100vh;">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-heading text-uppercase">
                        <?php the_field('main_slogan')?>
                    </div>
                    <a href="#whoweare" class="btn btn-main"><?php the_field('main_button_text')?></a>
                </div>
            </div>
    </header>

    <!-- Who We Are Section -->
    <section id="whoweare" class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2><?php the_field('sub_header')?></h2>
                        <hr />
                        <p><?php the_field('sub_text')?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="whoweare-item text-center">
                        <?php the_field('icon_1')?>
                        <h3 class="text-uppercase"><?php the_field('section_header_1')?></h3>
                        <hr />
                        <p><?php the_field('section_text_1')?></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="whoweare-item text-center">
                    <?php the_field('icon_2')?>
                        <h3 class="text-uppercase"><?php the_field('section_header_2')?></h3>
                        <hr />
                        <p><?php the_field('section_text_2')?></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="whoweare-item text-center">
                    <?php the_field('icon_3')?>
                        <h3 class="text-uppercase"><?php the_field('section_header_3')?></h3>
                        <hr />
                        <p><?php the_field('section_text_3')?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statement Section -->
    <section id="statement" class="section-box" style="background-image: linear-gradient(rgba(20, 20, 20, 0.8), rgba(20, 20, 20, 0.8)), url('<?php the_field('statement_image')?>');background-repeat: no-repeat;background-attachment: scroll;background-position: center center; background-size: cover;background-attachment: fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="lead"><?php the_field('statement_text')?></h4>
                    </div>
                </div>
            </div>
    </section>

    <!-- Last Projects Section -->
    <section id="latesprojects" class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2>LATEST PROJECTS</h2>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Architecto magnam odio quasi voluptas cumque. Delectus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center no-gutters mb-0 mb-lg-0">
                <div class="col-md-6">
                    <img src="img/project-01.jpg" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <div class="bg-orange text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-start">
                                <h3 class="text-white text-uppercase">Project I</h3>
                                <hr class="d-none d-lg-block mb-3 ms-0" />
                                <p class="mb-3 text-white">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Reiciendis tempore vitae saepe? Voluptatibus, cumque
                                    molestiae!
                                </p>
                                <a href="#" class="btn btn-white">Get Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center no-gutters mb-0 mb-lg-0">
                <div class="col-md-6">
                    <img src="img/project-01.jpg" class="img-fluid" />
                </div>
                <div class="col-md-6 order-lg-first">
                    <div class="bg-orange text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-start">
                                <h3 class="text-white text-uppercase">Project II</h3>
                                <hr class="d-none d-lg-block mb-3 ms-0" />
                                <p class="mb-3 text-white">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Reiciendis tempore vitae saepe? Voluptatibus, cumque
                                    molestiae!
                                </p>
                                <a href="#" class="btn btn-white">Get Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>