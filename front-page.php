<?php get_header(); ?>
<div class="">
    <?php include('includes/hero-swiper.php') ?>
    <?php include('includes/config.php') ?>
</div>

<section class="py-12">
    <div class="row container">
        <div class="col-span-12 md:col-span-6 flex flex-col justify-center">
            <div class="border-b-2 border-borderGrey py-2">
                <p class="heading text-blue text-center md:text-left uppercase">About Us</p>
                <div class="flex flex-center justify-center md:justify-start">
                    <p class="border-b-2 border-blue w-14 my-5"></p>
                </div>
                <p class="text-lg font-semibold text-center md:text-left">A SWITZERLAND BASED HR TECHNOLOGY SERVICES ORGANIZATION FOCUSING ON SUPPORTING CLIENTS IN THEIR HR TECHNOLOGY AND PAYROLL TRANSFORMATION JOURNEYS. </p>
                <p class=" paragraph text-center md:text-left py-2">Our name is inspired by the Golden Ratio, which is represented by the Greek letter phi (φ) and has a value of 1.618.</p>
                <p class=" paragraph text-center md:text-left py-2">The Golden Ratio determines the right dimensions. It determined the proportions for Leonardo da Vinci’s masterpiece, the Vitruvian Man, and continues to represent good solution design. We leverage our expertise, experience, and partnerships to be the right partner of choice for our clients.</p>
            </div>
            <div class="py-3 md:py-7 lg:py-12">
                <?php include('includes/achivements.php') ?>
                <div class="text-center md:text-left py-6">
                    <a href="/about">
                        <button class="btn uppercase text-sm my-3">more details</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/about/about.jpg" alt="" class="mx-auto">
        </div>
    </div>
</section>

<section class="bg-grey py-12">
    <div class="container flex flex-col justify-center items-center">
        <p class="heading text-center text-blue">OUR SERVICES</p>
        <p class="border-b-2 border-blue text-center w-12 my-5"></p>
    </div>
    <div class="">
        <div class="row container">
            <?php foreach ($service as $i) {?>
                <div class="col-span-12 md:col-span-6">
                    <div class="bg-slate-100 group text-base h-full" style="border:1px solid #999;">
                        <a href="<?php echo $i['href']?>">
                            <div class=" overflow-hidden">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/static/services/<?php echo $i['img']?>" alt="" class="zoomBannerImage">
                            </div>
                            <div class="p-4">
                                <p class="subHeading py-1 uppercase text-blue"><?php echo $i['name']?></p>
                                <p class="border-b-2 border-blue w-12 my-3 "></p>
                                <p class="paragraph"><?php echo $i['text']?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="text-center py-12">
        <a href="/services">
            <button class="btn">MORE DETAILS</button>
        </a>
    </div>

    <div class="bg-grey">
        <div class=" container flex flex-col justify-center items-center">
            <p class="heading text-center text-blue">WHY CHOOSE US</p>
            <p class="border-b-2 border-blue text-center w-12 my-5"></p>
        </div>
        <div class="row container">
            <?php foreach ($why as $i) {?>
                    <div class="col-span-12 md:col-span-4 p-3 bg-white hover:bg- rounded-md group text-base">
                        <div class="flex flex-col justify-center items-center h-full">
                            <div class="row w-full">
                                <div class="col-span-1 md:col-span-2 flex flex-col justify-center items-start md:items-center h-full">                            
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/tick.svg" alt="" class="md:w-8">
                                </div>
                                <div class="col-span-11 md:col-span-10 flex flex-col justify-center">
                                    <p class="paragraph text-left"><?php echo $i['text']?> <strong><?php echo $i['bold']?></strong> <?php echo $i['again-text']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
    </div>
</section>

<section class="py-12 container">
    <div class=" container flex flex-col justify-center items-center">
        <p class="heading text-center text-blue">OUR PARTNERS</p>
        <p class="border-b-2 border-blue text-center w-12 my-5"></p>
    </div>
    <?php include('includes/partners.php') ?>
</section>

<section class="py-12" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/testimonials/banner.webp'); background-position:center;">
    <div class="container">
    <?php include('includes/testimonials.php') ?>
    </div>
</section>
            
<section class="bg-blue">
    <div class="row container py-12">
        <div class="col-span-12 md:col-span-9">
            <p class="heading text-center md:text-left text-white py-2">WE LOOK FORWARD TO DOING GREAT THINGS </p>
            <p class="heading text-center md:text-left text-action py-2">WITH YOU ANYWHERE IN THE WORLD.</p>
        </div>
        <div class="col-span-12 md:col-span-3 flex flex-col justify-center items-center md:items-end">
            <a href="/contact">
                <button class="uppercase bg-blue py-2 px-5 border-2 hover:bg-action border-action text white text-white ease-in-out duration-300 flex group text-base">get started <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/rightarrow.svg" alt="get in" class="w-6 mx-1 hidden group-hover:block"> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/orangearrow.svg" alt="get in" class="w-6 mx-1 block group-hover:hidden"></button>
            </a>
        </div>
    </div>
</section>

<section class="bg-fixed bg-center bg-cover" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/bgbanner.webp');">
    <div class="bg-[#00000040]">
        <div class="container py-12">
            <p class="heading uppercase text-center text-white" style ="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Contact us</p>
            <?php include('includes/form-element.php') ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>