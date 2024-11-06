    <?php get_header(); ?>
<?php include('includes/config.php') ?>
    <section class="relative" style="z-index: -1">
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/about.jpg" alt="clients" class="w-full h-auto web"/>
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/mobileabout.jpg" alt="clients" class="mobile w-full"/>
            <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50 bg-black2">
                <div class="container">
                    <h1 class="heading text-white text-center md:text-left uppercase mb-3">OUR CLIENTS</h1>
                    <div class="flex justify-center md:justify-start">
                        <p class="border-b-2 border-white w-24 my-5"></p>
                    </div>
                    <p class="paragraph text-white text-center md:text-left">We offer the best customer experience</p>
                </div>
            </div>
        </div>
        <div class="tint"></div>
    </section>

    <section class="py-12">
        <div class="container">
            <p class="heading text-center md:text-left text-action">OUR CLIENTS</p>
            <div class="flex justify-center md:justify-start">
                <p class="border-b-2 border-action w-24 my-5"></p>
            </div>
            <p class="paragraph text-center md:text-left">We are driven to do the best job possible. We pride ourselves on cultivating lasting client relationships built on trust and mutual respect.</p>
        </div>
        <div class="row container pt-12">
        <?php foreach ($clients as $i) { ?>
            <div class="col-span-12 md:col-span-3 py-5">
                <div class="flex flex-col justify-center h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/static/clients/<?php echo $i['img']?>" alt=""class=" w-52">
                </div>
            </div>
        <?php } ?>
    </div>
    </section>
<?php get_footer(); ?>
