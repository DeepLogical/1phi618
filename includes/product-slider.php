<section class="relative">
    <div class="container">
        <h2 class="heading text-center text-black uppercase mb-5">MUST <span class="font-normal text-action">VISIT</span></h2>
        <p class="paragraph text-center mb-3 lg:mb-6">Modular Homes are incomplete without a Modular Kitchen. It's a new trend now to have a modular kitchen which is simple, elegant and sophisticated.</p>
    </div>
    <div class="px-5" x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, { loop: true, slidesPerView: 1, spaceBetween: 0,  breakpoints: {
        640: { slidesPerView: 2, spaceBetween: 0, },
        768: { slidesPerView: 3, spaceBetween: 0, },
        1200: { slidesPerView: 4, spaceBetween: 0, },
        }, })">
        <div class="absolute bottom-1 inset-y-0 left-0 z-10 flex items-center overflow-hidden">
            <button @click="swiper.slidePrev()" class="-ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full focus:outline-none"><svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></button>
        </div>
        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                <?php foreach($products as $key=> $i){; ?>
                    <div class="swiper-slide rounded m-2 lg:m-3">
                        <div class="overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/static/products/<?php echo $i['img']; ?>" alt="<?php echo $i['name']; ?>" class="hover:scale-110 transition duration-700 easy-in-out"/>
                        </div>
                        <div class="p-1 md:p-2 xl:p-3">
                            <h3 class="smallHeading text-center mb-1 md:mb-2 xl:mb-3"><?php echo $i['name']; ?></h2>
                            <p class="paragraph text-center"><?php echo $i['text']; ?></p>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
        <div class="absolute bottom-1 inset-y-0 right-0 z-10 flex items-center overflow-hidden">
            <button @click="swiper.slideNext()" class="-mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full focus:outline-none"><svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
        </div>
    </div>
</section>