<div class="container py-5">
    <style> 
        .excerpt p{
            color: #fff;
            text-align: center;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 2;
        }
    </style>
    <h2 class="paragraph text-center">READ OUR ARTICLES</h2>
    <p class="heading mb-6 text-center">OUR BLOGS</p>
    <div class="flex items-center row my-5">
        <?php    
            $args =array(
                'type'              => 'posts',
                'posts_per_page'    => 3,
            );
            $lastblog = new WP_QUERY($args);
            if ($lastblog->have_posts()) {
            while ($lastblog->have_posts()) {
            $lastblog->the_post();
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
            include('singleblogitem.php');
            } } wp_reset_postdata();
        ?>
        <div class="col-span-12 text-center mt-5">
            <a href="/blog" class="exploreBtn">Explore More</a>
        </div>
    </div>
</div>