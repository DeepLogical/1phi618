<?php get_header(); ?>
    <?php include('includes/config.php') ?>
    <section class="relative" style="z-index: -1">
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/newsbanner.jpg" alt="news" class="w-full h-auto web"/>
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/mobilenews.jpg" alt="news" class="mobile w-full"/>
            <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50 bg-black2">
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
    <div class="container py-12">
        <p class="heading text-center md:text-left">NEW JOINERS</p>
    </div>
    <div class="container">
        <?php foreach ($joiners as $key => $i) { ?>
            <div class="row group text-base bg-grey rounded-md shadow-sm hover:shadow-lg p-2 md:p-0 overflow-hidden" style="margin-top:25px; margin-bottom:25px;">
                <div class="col-span-12 md:col-span-4 <?php echo $key % 2 == 0 ? 'order-1' : 'order-2'; ?>">
                    <!-- <div class="bg-cover bg-center bg-norepeat" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/team/<?php echo($i ['img'])?>'); background-position:top; min-height:400px;">
                    </div> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/static/team/<?php echo($i ['img'])?>" alt="" class="object-cover">
                </div>
                <div class="col-span-12 md:col-span-8 p-0 md:p-5 <?php echo $key % 2 == 0 ? 'order-2' : 'order-1'; ?>">
                    <p class="subHeading font-semibold py-3 text-left"><?php echo($i ['name'])?></p>
                    <p class="paragraph text-left"><?php echo($i ['text'])?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="container py-12">
        <p class="subHeading text-center uppercase md:text-left pb-5">Leave a reply</p>
        <?php include('includes/form-element.php') ?>
    </div>
<?php get_footer(); ?>