<?php get_header(); ?>
    <?php if (have_posts()) { while (have_posts()) { the_post(); $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); $title = get_post(get_post_thumbnail_id())->post_title; ?>
    <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    <div class="container">
        <h2 class="text-xl md:text-2xl font-semibold text-center py-5"><?php the_title(); ?></h2>
        <div class="flex grid grid-cols-12 gap-4 gap-x-5">
            <div class="col-span-12 md:col-span-9">
                <?php the_content(); ?> 
                <?php comments_template(); ?>
            </div>
            <?php include('includes/sidebar.php') ?>
        </div>
    </div>
    <?php } }  wp_reset_postdata(); ?>
<?php get_footer(); ?>