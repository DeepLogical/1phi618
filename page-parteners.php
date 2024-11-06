<?php get_header(); ?>
<?php include('includes/config.php') ?>
<section class="relative" style="z-index: -1">
    <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/partenersbanner.jpg" alt="parteners" class="w-full h-auto web"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/mobilepartners.jpg" alt="parteners" class="mobile w-full"/>
        <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50 bg-black2">
            <div class="container">
                <h1 class="heading text-white text-center md:text-left uppercase mb-3">OUR PARTNERS</h1>
                <div class="flex justify-center md:justify-start">
                        <p class="border-b-2 border-white w-24 my-5"></p>
                    </div>
                <p class="paragraph text-white text-center md:text-left">Our partners make us formidable</p>
            </div>
        </div>
    </div>
    <div class="tint"></div>
</section>

<section>
    <div class="grid grid-cols-10 container py-12">
        <?php foreach ($partners as $i) { ?>
            <div class="col-span-5 md:col-span-2 py-5">
                <div class="flex flex-col justify-center h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/static/partners/<?php echo $i['img']?>" alt=""class="w-52 mx-auto">
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<?php get_footer(); ?>