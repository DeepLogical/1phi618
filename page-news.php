<?php get_header(); ?>
<?php include('includes/config.php') ?>
    <section class="relative" style="z-index: -1">
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/newsbanner.jpg" alt="news" class="w-full h-auto web"/>
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/mobilenews.jpg" alt="news" class="mobile w-full"/>
            <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50" style="background-color:#0000005e;">
                <div class="container">
                    <h1 class="heading text-white text-center md:text-left uppercase mb-3">NEWS</h1>
                    <div class="flex justify-center md:justify-start">
                            <p class="border-b-2 border-white w-24 my-5"></p>
                        </div>
                    <p class="paragraph text-white text-center md:text-left">A sneak peek into 1phi618</p>
                </div>
            </div>
        </div>
        <div class="tint"></div>
    </section>
    <section>
        <div class="row container py-12">
            <?php foreach ($news as $i) { ?>
                <div class="col-span-12 md:col-span-4 pb-3 md:p-0">
                    <a href="<?php echo $i ['href'] ?>" style="cursor: pointer;">
                        <div class="min-h-[300px] bg-no-repeat relative" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/news/<?php echo($i ['img'])?>'); background-size:cover;">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/static/news/<?php echo($i ['img'])?>" alt="" class="relative"> -->
                            <div class="w-full h-full" style="background-color:#0000005e;"></div>    
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 bg-blue py-1 px-3">
                                <p class="text-white font-bold uppercase text-sm"><?php echo($i ['date'])?></p>
                            </div>
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 bg-blue py-1 px-3">
                                <p class="text-white font-bold"><?php echo($i ['name'])?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <img src="/images/static/news/" alt="">
    </section>
<?php get_footer(); ?>