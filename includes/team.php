
<?php
$team=[
    ["img"=>"ritu.webp", "alt"=>"", "name"=>"RITU SABHARWAL", "position"=> "Director", "text"=>"Ritu Sabharwal, the dynamic director of our company. With an innate creative flair and a keen eye for detail, Ritu has a talent for transforming any space into a captivating"],
    ["img"=>"avinesh.webp", "alt"=>"", "name"=>"AVINESH KUMAR", "position"=> "Sr. Architect", "text"=>"Avinesh kumar was born and brought up in Bareilly. He completed his schooling from M.B Inter College Bareilly. Thereafter he went to MNIT Jaipur to pursue his graduation in Architecture. After graduating in 2016 "],
    ["img"=>"shivangi.webp", "alt"=>"", "name"=>"SHIVANGI PRAJAPATI", "position"=> "Architect", "text"=>"Shivangi has an eye for design, be it modern architecture, hospitality, QSR & F, and B projects. 
    She is a mix of old school architecture who work on sketch ideas, render it with pen, and also a technical junkie."],
];
?>
<div class="pt-8 md:pt-16">
    <div class="row">
        <?php foreach($team as $i) { ?>
            <div class="col-span-12 md:col-span-4 py-4"  data-aos="zoom-in-up">
                <div class="p-5 flex flex-col justify-between h-full ">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/static/<?php echo($i['img']);?>" alt="<?php echo($i['alt']);?>" class="w-24 mx-auto rounded-full">
                        <p class="text-center font-extrabold text-xl md:text-2xl pt-2"><?php echo($i['name']);?></p>
                        <p class="text-center md:text-xl font-semibold"><?php echo($i['position']);?></p>
                        <p class="text-center line-h"><?php echo($i['text']);?></p>
                    </div>
    
                    <div class=" w-full pt-8 flex items-center justify-center">
                        <a href="/team/" style="min-width:200px;" class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-primary rounded-full shadow-md group">
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
        <?php } ?>
    </div>
    <div class="row">
        <div class="col-span-12 md:col-span-4">
        </div>
        <div class="col-span-12 md:col-span-4 p-5"  data-aos="zoom-in-up">
            <div class="py-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/static/subham.webp" alt="<?php echo($i['alt']);?>" class="w-24 mx-auto rounded-full">
                <p class="text-center font-extrabold text-xl md:text-2xl pt-2">SHUBHAM RANA</p>
                <p class="text-center md:text-xl font-semibold">3D Designer</p>
                <p class="text-center line-h">Shubham stands out as a versatile and talented 3D visualizer, combining artistic creativity with technical expertise to produce visually stunning and impactful renderings. With a dedication to excellence and read more...</p>
                <div class=" w-full pt-8 flex items-center justify-center">
                    <a href="/about/" style="min-width:200px;" class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-primary rounded-full shadow-md group">
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
        <div class="col-span-12 md:col-span-4">
        </div>
    </div>
</div>