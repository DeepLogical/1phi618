<section class="container pt-12">
    <p class="text-center text-lg text-primary font-medium">Our Happy Clients</p>
    <h3 class="text-3xl md:text-5xl font-bold text-center mb-6">TESTIMONIALS</h3>
    <div class="relative px-5" x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, { loop: true, slidesPerView: 1, spaceBetween: 0,  breakpoints: {
        640: { slidesPerView: 1, spaceBetween: 0, },
        768: { slidesPerView: 1, spaceBetween: 0, },
        1200: { slidesPerView: 1, spaceBetween: 0, },
        }, })">
        <div class="absolute bottom-1 inset-y-0 left-0 z-10 flex items-center overflow-hidden">
            <button @click="swiper.slidePrev()" class="-ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full focus:outline-none"><svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></button>
        </div>
        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper py-5">
                <?php foreach( $testimonials as $i ){ ?>
                    <div class="swiper-slide justify-center">
                        <div class="border-2 border-[#9f9f9f] rounded-xl min-h-425">
                            <p class="paragraph text-justify px-6 py-3 m-2 xl:m-3"><?php echo $i['text']; ?></p>
                            <h2 class="subHeading font-bold text-center py-5"><?php echo $i['name']; ?></h2>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="absolute bottom-1 inset-y-0 right-0 z-10 flex items-center overflow-hidden">
            <button @click="swiper.slideNext()" class="-mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full focus:outline-none"><svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
        </div>
    </div>
</section>