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
        <p class="heading text-center md:text-left py-12">CUSTOMER UPDATES</p>
        <p class="paragraph text-center md:text-left py-2"><strong>1st Oct 2022 :</strong> 1phi618 went live with the Payroll transformation for a Dutch Manufacturing company.</p>
        <p class="paragraph text-center md:text-left py-2"><strong>1st Nov 2022 :</strong> 1phi618 becomes the implementation partner of a Swiss pharma firm in their
        Payroll transformation</p>
        <p class="paragraph text-center md:text-left py-2"><strong>1st July 2023 : </strong> Successful go-live of Workday platform for Swiss Manufacturing Major. 1phi618 partnered with one of big consulting firms for this transformation</p>
        <p class="paragraph text-center md:text-left py-2"><strong>1st Jan 2024 :</strong> Successful go-live for the payroll transformation program for Swiss Pharma Major</p>
        <p class="paragraph text-center md:text-left py-2"><strong>13rh May 2024 :</strong> Successful SAP platform upgrade achieved for Swiss Energy firm</p>
        <p class="paragraph text-center md:text-left py-2"><strong>3rd June 2024 :</strong> Successful Employee central go-live for one of the largest Power producer
        Swiss firm</p>
    </div>

    
    <div class="container py-12">
        <p class="subHeading text-center md:text-left pb-5">Leave a reply</p>
        
        <?php include('includes/form-element.php') ?>
    </div>
<?php get_footer(); ?>
