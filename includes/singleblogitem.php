<div class="col-span-12 md:col-span-4 amitShadow rounded-xl overflow-hidden">
    <div class="overflow-hidden">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="hover:scale-110 transition duration-700 easy-in-out"/>
        </a>
    </div>
    <div class="p-3">
        <h2 class="subHeading text-center oneliner mb-2"><?php the_title(); ?></h2>
        <div class="flex sm:block lg:flex items-center justify-between pt-2 md:pt-3 sm:text-center">
            <small class="font-bold text-xs sm:w-full sm:block sm:text-center lg:w-auto"><?php echo get_the_date( 'dS M Y', $post->ID ) ?></small>
            <!-- <a href="<?php the_permalink(); ?>" class="smallBtn">Read More</a> -->
                <div class=" flex items-center justify-end">
                    <a href="<?php the_permalink(); ?>" style="min-width:200px;" class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-primary rounded-full shadow-md group">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-primary group-hover:translate-x-0 ease">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-primary transition-all duration-300 transform group-hover:translate-x-full ease font-semibold">Read more</span>
                    <span class="relative invisible">Button</span>
                </a>
            </div>
        </div>
    </div>
</div>