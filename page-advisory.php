<?php get_header(); ?>
<?php include('includes/config.php') ?>
<section class=" h-[400px] bg-no-repeat" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/services/advisory.webp'); background-position:center; background-size:cover; ">
    <div class="w-full h-full bg-[#0000006b] py-12">
        <div class="container flex flex-col justify-center items-center h-full ">
            <div class="w-full">
                <p class="heading text-center md:text-left text-white">ADVISORY</p>
                <div class="flex justify-center md:justify-start">
                    <p class="border-b-2 border-white w-24 my-5"></p>
                </div>
                <p class="paragraph text-center md:text-left text-white py-4">Deep Dive - Unearthing value for clients through a thorough evaluation</p>
            </div>
        </div>
    </div>
</section>

<section class="py-12">
    <div class="row container ">
        <div class="col-span-12 md:col-span-4">
            <?php include('includes/serviceslinks.php') ?>
        </div>
        <div class="col-span-12 md:col-span-8">
            <div class="py-12 md:py-0">
                <div class="pb-0 md:pb-12">
                    <p class="heading text-center md:text-left">HR TECHNOLOGY LANDSCAPE EVALUATION</p>
                    <div class="flex justify-center md:justify-start">
                        <p class="border-b-2 border-blue w-24 my-5"></p>
                    </div>
                    <p class="paragraph text-center md:text-left">A thorough and inclusive evaluation of the existing HR technology landscape forms the basis of introducing multiple efficiencies and cost optimization opportunities in future. We carry out detailed landscape evaluation to unearth such opportunities for our clients.</p>
                </div>
            </div>
            <div class="row border-b-2 border-[#ddd] pb-5">
                <?php foreach ($advisory as $i) { ?>
                    <div class="col-span-12 md:col-span-4 flex md:block flex-col md:flex-none justify-center items-center md:items-start">
                        <div class="bg-blue rounded-full h-[50px] w-[50px] my-5 flex flex-col justify-center items-center">
                            <div class="flex justify-center">
                                <img src="" alt="" class="<?php echo $i['icons']?>" style="font-size:24px; color:#fff;" class="mx-auto">
                            </div>
                        </div>
                        <p class="paragraph text-action font-semibold text-center md:text-left"><?php echo $i['text']?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row container">
        <div class="col-span-12 md:col-span-4">
        </div>
        <div class="col-span-12 md:col-span-8">
            <div class="py-12 md:pt-12">
                <p class="heading text-center md:text-left">VENDOR SELECTION</p>
                <div class="flex justify-center md:justify-start">
                    <p class="border-b-2 border-blue w-24 my-5"></p>
                </div>
                <p class="paragraph text-center md:text-left">Conducting an HR vendor assessment to implement a HCM technology or enhancing an existing HCM platform is a key exercise. We help organizations in taking the right decisions for their tailored needs, evaluating multiple vendors covering entire HR technology landscape. We ensure that HR programs, processes and service delivery are completely aligned with the new technology of choice.</p>
            </div>
            <div class="row border-b-2 border-[#ddd] pb-5">
                <?php foreach ($vendor as $i) { ?>
                    <div class="col-span-12 md:col-span-4 flex md:block flex-col md:flex-none justify-center items-center md:items-start">
                        <div class="bg-blue rounded-full h-[50px] w-[50px] my-5 flex flex-col justify-center items-center">
                            <div class="flex justify-center">
                                <img src="" alt="" class="<?php echo $i['icons']?>" style="font-size:24px; color:#fff;" class="mx-auto">
                            </div>
                        </div>
                        <p class="paragraph text-action font-semibold text-center md:text-left"><?php echo $i['text']?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>