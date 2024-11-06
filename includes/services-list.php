<section class="   md:px-0" style="background: url(<?php echo get_template_directory_uri(); ?>/images/static/servicebanner.png) no-repeat bottom right; background-size:cover">
    <?php include('config.php') ?>
    <div class="bg-primary md:bg-transparent px-3 pt-28">
        <div class="container">
            <div class=""data-aos="fade-down">
                <a href="/service/">
                    <h2 class=" text-white head text-center mb-4" data-aos="flip-down"  data-aos-duration="1500">Our Services</h2>
                    <!-- 
                        
                     -->
                </a>
            </div>
            <div class="row py-5">
                <?php foreach( $services as $i ){ ?>
                    <div class="col-span-12 md:col-span-4" data-aos="zoom-in" data-aos-duration="1500">
                        <a href="<?php echo ($i['href']);?>" class="group text-base">
                            <div class="relative overflow-hidden rounded-md" style="border: 5px solid white;">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/static/services/<?php echo ($i['img'])?>" alt="" class="rounded-md group-hover:scale-125 transition duration-1000">
                                <div class="absolute bottom-[0px] left-[0px] bg-[#1e1e1e66] group-hover:bg-[#1e1e1e94] h-full w-full flex flex-col justify-end ">
                                    <h2 class="text-3xl head_font px-3 py-3 text-white"><?php echo ($i['name'])?></h2>
                                    <p class="px-3 pb-3 text-white hidden group-hover:block text-left" style="line-height:20px;"><?php echo($i['text'])?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="text-center md:text-left mobile pb-5 md:pb-0">
                <div class="w-full flex justify-center">
                    <a href="/services/" style="min-width:200px;" class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-white rounded-full shadow-md group">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-primary group-hover:translate-x-0 ease">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-primary bg-white transition-all duration-300 transform group-hover:translate-x-full ease font-semibold">Know more</span>
                        <span class="relative invisible">Button</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>