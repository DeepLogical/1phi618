<section class="relative">
    <?php include('array.php'); ?>
    <div class="px-5" x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, { loop: true, slidesPerView: 1, spaceBetween: 0 })">
        <div class="absolute bottom-1 inset-y-0 left-0 z-10 flex items-center overflow-hidden">
            <button @click="swiper.slidePrev()" class="-ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full focus:outline-none"><svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></button>
        </div>
        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                <?php foreach($banner as $key=> $i){; ?>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/static/<?php echo $i['img']; ?>" class="web"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/static/<?php echo $i['img-m']; ?>" class="mobile"/>
                        <div class="absolute top-0 left-0 h-full flex flex-col items-center justify-center px-12 z-50">
                            <h1 class="smallHeading text-white text-center md:text-left mb-3"><?php echo $i['head']; ?></h1>
                            <p class="paragraph text-white"><?php echo $i['text']; ?></p>
                        </div>                
                        <div class="tint"></div>
                    </div>
                <?php }; ?>
            </div>
        </div>
        <div class="absolute bottom-1 inset-y-0 right-0 z-10 flex items-center overflow-hidden">
            <button @click="swiper.slideNext()" class="-mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full focus:outline-none"><svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
        </div>
    </div>
</section>