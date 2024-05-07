<?php
/* Template Name: Portfolio Page */
get_header();
?>

<!-- Inside Hero Section -->
<section class="page-image page-image-portfolio section-box"
    style="background-image: linear-gradient(rgba(20, 20, 20, 0.8), rgba(20, 20, 20, 0.8)), url('<?php the_field('portfolio_image')?>');background-repeat: no-repeat;background-attachment: scroll;background-position: center center; background-size: cover;height: 400px;">
    <h1 class="page-tittle text-uppercase"><?php the_title(); ?></h1>
</section>
<!-- Portfolio Section -->
<section id="portfolio" class="section-box">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="section-top">
                    <h2>OUR WORKS</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, dignissimos ipsam quas nisi
                        officia est!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $query = new WP_Query('post_type=gallery'); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <?php global $post; ?>
            <div class="col-md-4 portfolio-item">
                <a href="<?php the_field('gallery_item_big_image') ?>" class="portfolio-link" data-lightbox="<?php the_field('gallery_item_catagory') ?>" data-title="<?php the_field('gallery_item_description') ?>">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-search fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php the_field('gallery_item_image') ?>" class="img-hover img-fluid">
                </a>
                <div class="portfolio-caption">
                    <h4><?php the_field('gallery_item_heading') ?></h4>
                    <p class="text-muted"><?php the_field('gallery_item_catagory') ?></p>
                </div>
            </div>
            <?php endwhile; else : ?>
            <p><?php esc_html_e('Herhangi Bir Galley Elemanı Bulunmaktadır.'); ?></p>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>