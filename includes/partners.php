<?php include('config.php') ?>

<div class="relative">
    <section class="px-4" x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, { 
        loop: true, 
        slidesPerView: 1, 
        spaceBetween: 0, 
        autoplay: { 
            delay: 2500,  
            disableOnInteraction: false 
        }, 
        preventClicks: false, 
        breakpoints: {
            640: { 
                slidesPerView: 1, 
                spaceBetween: 30, 
            },
            768: { 
                slidesPerView: 3, 
                spaceBetween: 30, 
            },
            1200: { 
                slidesPerView: 4, 
                spaceBetween: 30, 
            }
        } 
    })">
        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
            <button @click="swiper.slidePrev()" class="flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrowleft.svg" alt="Previous" class="w-6 p-1"></button>
        </div>
        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                <?php foreach($partners as $i) { ?>
                    <div class="swiper-slide rounded-lg overflow-hidden ">
                        <div class="flex flex-col justify-center items-center" style="height:200px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/static/partners/<?php echo($i['img']);?>" alt="<?php echo $i['img']; ?>">
                        </div>    
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
            <button @click="swiper.slideNext()" class="flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrowright.svg" alt="Next" class="w-6 p-1"></button>
        </div>
    </section>
</div>

<!-- Include Alpine.js and Swiper.js (Ensure these are included in your project) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.2/dist/cdn.min.js" defer></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
