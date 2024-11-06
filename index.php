<?php get_header(); ?>
<h1 class="head bg-primary pt-28 py-12 text-white font-semibold text-center mb-5">Latest blogs</h1>
<div class="container py-16">
	<div class="flex items-center row">
        <div class="col-span-12 md:col-span-4 row">
            <?php    
                $args =array(
                    'type'              => 'posts',
                    'posts_per_page'    => -1,
                );
                $lastblog = new WP_QUERY($args);
                if ($lastblog->have_posts()) {
                while ($lastblog->have_posts()) {
                $lastblog->the_post();
                $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
                include('includes/singleblogitem.php');
            } } wp_reset_postdata();
            ?>
        </div>
	</div>
</div>
<?php get_footer(); ?>