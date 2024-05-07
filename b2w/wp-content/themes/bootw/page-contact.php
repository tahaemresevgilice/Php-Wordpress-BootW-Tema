<?php
/* Template Name: Contact Page */
get_header();
?>

<!-- Inside Hero Section -->
<section class="page-image page-image-contact section-box">
        <h1 class="page-tittle">CONTACT</h1>
    </section>
    <!-- Contact Us Section -->
    <section id="contact" class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="section-top">
                        <h2>CONTACT WITH US</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, dignissimos ipsam quas nisi officia est!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>