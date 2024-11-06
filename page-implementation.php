<?php get_header(); ?>
<?php include('includes/config.php') ?>
<section class=" h-[400px] bg-no-repeat" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/services/implementation.webp'); background-position:center; background-size:cover; ">
    <div class="w-full h-full bg-[#0000006b] py-12">
        <div class="container flex flex-col justify-center items-center h-full ">
            <div class="w-full">
                <p class="heading text-center md:text-left text-white">IMPLEMENTATION</p>
                <div class="flex justify-center md:justify-start">
                    <p class="border-b-2 border-white w-24 my-5"></p>
                </div>
                <p class="paragraph text-center md:text-left text-white py-4">Proper Implementation leads to a smooth transition</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row container py-12">
        <?php include('includes/serviceslinks.php') ?>
        <div class="col-span-12 md:col-span-8">
            <div class="py-12 md:py-0">
                <div class="pb-0 md:pb-12 ">
                    <p class="heading text-center md:text-left">IMPLEMENTATION & OPERATIONS</p>
                    <div class="flex justify-center md:justify-start">
                        <p class="border-b-2 border-blue w-24 my-5"></p>
                    </div>
                    <p class="paragraph text-center md:text-left">We have the experience and proven tools to implement and operate the right technology for you and follow proven methodologies to make this a smooth transition for you.</p>
                </div>
            </div>
            <div class="row border-b-2 border-[#ddd] pb-5">
                <?php foreach ($implementation as $i) { ?>
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