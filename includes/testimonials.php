<?php
    $testimonial= [
        ["text"=>"It is all about 1phi618 for their professionalism performance and endurance during muntiple implementations of payroll intregatation they are an acknowledged and committed partner orehented to results and to detail,   who knows what it take to make a successof an HR-Payroll projects.  ", "img"=>"sap.webp", "name"=>"Global payroll processing partner"],
        ["text"=>"1phi618 has a rich base of experience and expertise to advertise and deliver on large HR transformation projects", "img"=>"sap.webp", "name"=>"GLOBAL PHARMA LEADER"],
    ];
?>

<section class="relative" x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, { loop: true, slidesPerView: 1, 
    spaceBetween:0,  preventClicks: false, autoplay: { delay: 3000}, breakpoints: {
        640: { slidesPerView: 1, spaceBetween: 30, },
        768: { slidesPerView: 1, spaceBetween: 30, },
        1200: { slidesPerView:2, spaceBetween: 30, }, } })">

    <div class="absolute inset-y-0 left-0 z-10 flex items-center">
        <button @click="swiper.slidePrev()" class="flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrowleft.svg" alt="Previous" class="w-6 p-1"></button>
    </div>
    <div class="rounded-xl swiper-container" x-ref="container">
        <div class="swiper-wrapper">
        <?php foreach($testimonial as $i) { ?>
            <div class="swiper-slide p-5">
                <div class="border-2 rounded-md md:rounded-xl p-5 bg-white min-h-52 flex flex-col justify-between">
                    <div class="relative flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/q.svg" class="m-2 absolute top-0 left-[-40px]" style="height: 20px; width:auto;">
                        <p class="paragraph text-center md:text-left"><?php echo($i['text']);?></p> 
                    </div>
                    <div class="flex justify-evenly py-2">
                        <div class="pl-2">
                            <p class="paragraph uppercase text-blue font-semibold  text-center md:text-left"><?php echo($i['name']);?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <div class="absolute inset-y-0 right-0 z-10 flex items-center">
        <button @click="swiper.slideNext()" class="flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrowright.svg" alt="Next" class="w-6 p-1"></button>
    </div>
</section>