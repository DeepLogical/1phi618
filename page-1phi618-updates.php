<?php get_header(); ?>
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

    <div class="container">
        <p class="heading text-center md:text-left py-12">1PHI618 UPDATES</p>
        <p class="paragraph text-center md:text-left py-2"><strong>July 2022 :</strong>  1phi618 joins hands with RAMCO to work together in the areas of Payroll transformation</p>
        <p class="paragraph text-center md:text-left py-2"><strong>Aug 2022 :</strong>  1phi618 moves it’s Swiss office to Zug</p>
        <p class="paragraph text-center md:text-left py-2"><strong>Dec 2023 :</strong> 1phi618 opens a new office in Gurgaon , India</p>
        <p class="paragraph text-center md:text-left py-2"><strong>April 2024 :</strong> 1phi618 starts a new assignment on SF recruitment evaluation</p>
        <p class="paragraph text-center md:text-left py-2"><strong>Jan 2024 :</strong> 1phi618 becomes an advisory partner with Workday</p>
    </div>
    <div class="container py-12">
        <p class="subHeading text-center md:text-left pb-5">Leave a reply</p>
        <?php include('includes/form-element.php') ?>
    </div>
<?php get_footer(); ?>