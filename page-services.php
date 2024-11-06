<?php get_header(); ?>
<?php include('includes/config.php') ?>
<section class="relative" style="z-index: -1">
    <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/servicebanner.jpg" alt="services" class="w-full h-auto web"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/mobileservice.jpg" alt="services" class="mobile w-full"/>
        <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50 bg-black2">
            <div class="container">
                <h1 class="heading text-white text-center md:text-left uppercase mb-3">SERVICES</h1>
                <div class="flex justify-center md:justify-start">
                        <p class="border-b-2 border-white w-24 my-5"></p>
                    </div>
                <p class="paragraph text-white text-center md:text-left">Consult.Collaborate.Cocreate - Value for Clients</p>
            </div>
        </div>
    </div>
    <div class="tint"></div>
</section>


<section>
    <div class="row container py-12">
        <?php foreach ($services as $i) {?>
            <div class="col-span-12 md:col-span-6">
                <div class="bg-slate-100 rounded-md shadow-md hover:shadow-xl h-full">
                    <a href="<?php echo $i['href']?>">
                        <div class=" overflow-hidden rounded-t-md">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/static/services/<?php echo $i['img']?>" alt="" class="zoomBannerImage">
                        </div>
                        <div class="p-5">
                            <p class="subHeading font-semibold py-2 text-left text-action"><?php echo $i['name']?></p>
                            <p class="paragraph twoliner text-left"><?php echo $i['text']?></p>
                            <div class="group text-base w-fit h-fit my-5">
                                <button class="flex text-action group-hover:text-blue"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/smallarrow.svg" alt="" class="w-6 rotate-180 hidden group-hover:block"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/smallarrow2.svg" alt="" class="w-6 rotate-180 block group-hover:hidden">Read more</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
        <!-- <div class="col-span-4"></div>
        <div class="col-span-12 md:col-span-4 bg-slate-100 rounded-md shadow-md hover:shadow-xl">
            <a href="/implementation">
                <div class=" overflow-hidden rounded-t-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/static/services/implementation.webp" alt="" class="zoomBannerImage">
                </div>
                <div class="p-5">
                    <p class="subHeading font-semibold py-2 text-left text-action">IMPLEMENTATION</p>
                    <p class="paragraph text-left">We have the experience and proven tools to implement and operate the right HR system for you. We follow proven methodologies to make this a smooth transition for you.</p>
                    <div class="group text-base w-fit h-fit my-5">
                        <button class="flex text-action group-hover:text-blue"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/smallarrow.svg" alt="" class="w-6 rotate-180 hidden group-hover:block"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/smallarrow2.svg" alt="" class="w-6 rotate-180 block group-hover:hidden">Read more</button>
                    </div>
                </div>
            </a>
        </div> -->
    </div>
</section>
<?php get_footer(); ?>