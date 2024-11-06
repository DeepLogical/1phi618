<?php include('includes/config.php') ?>
<?php get_header(); ?>
<style>
    .list-item::before {
        content: '';
        display:inline;
        position: absolute;
        width: 0.5rem;
        height: 0.5rem;
        background-color: #ff6900; /* Use current text color */
        left: 0;
        top: 50%;
        transform: translateY(-50%) rotate(90deg);
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    }
</style>
    <section class="relative" style="z-index: -1">
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/about.jpg" alt="about" class="w-full h-auto web"/>
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/mobileabout.jpg" alt="about" class="mobile w-full"/>
            <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50">
                <div class="container">
                    <h1 class="heading text-white text-center md:text-left uppercase mb-3">ABOUT US</h1>
                    <div class="flex justify-center md:justify-start">
                            <p class="border-b-2 border-white w-24 my-5"></p>
                        </div>
                    <p class="paragraph text-white text-center md:text-left">Get to know us better</p>
                </div>
            </div>
        </div>
        <div class="tint"></div>
    </section>

   <section class="py-12">
    <div class="container">
        <p class="heading text-blue text-center md:text-left">COMPANY HISTORY</p>
        <div class="flex justify-center md:justify-start">
            <p class="border-b-2 border-blue w-24 my-5"></p>
        </div>
        <p class="paragraph text-center md:text-left mb-3">A Switzerland based HR Technology services organization focusing on supporting clients in their HR technology and payroll transformation journeys. Our name is inspired by the Golden Ratio, which is represented by the Greek letter phi (φ) and has a value of 1.618.</p>
        <p class="paragraph text-center md:text-left">The Golden Ratio determines the right dimensions. The Golden Ratio determined the proportions for Leonardo da Vinci’s masterpiece, Vitruvian Man. It continues to represent good solution design. We leverage our expertise, experience and partnerships to be the right partner of choice for our clients.</p>
    </div>
   </section>

    <section class="container pb-12">
        <div class="row">
            <div class="col-span-1">
                <p class="text-md lg:text-xl md:text-3xl font-bold">2019</p>
            </div>
            <div class="col-span-2 md:col-span-1 flex justify-center md:justify-start">
                <span>
                    <p class="bg-slate-300 rounded-full h-3 w-3"></p>
                    <p class="border-r-2 w-[7px] border-slate-300 h-full"></p>
                </span>
            </div>
            <div class="col-span-9 md:col-span-10 pb-5">
                <p class="text-md lg:text-xl md:text-3xl text-action">ORGANISATION FORMED</p>
                <p class="paragraph">1phi618 was founded and opened its first office in Zurich, marking the beginning of an exciting
                journey.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-span-1">
                <p class="text-md lg:text-xl md:text-3xl font-bold">2020</p>
            </div>
            <div class="col-span-2 md:col-span-1 flex justify-center md:justify-start">
                <span>
                    <p class="bg-slate-300 rounded-full h-3 w-3"></p>
                    <p class="border-r-2 w-[7px] border-slate-300 h-full"></p>
                </span>
            </div>
            <div class="col-span-9 md:col-span-10 pb-5">
                <p class="text-md lg:text-xl md:text-3xl text-action">OPERATIONS IN INDIA</p>
                <p class="paragraph">1phi618 expanded its operations to India and successfully delivered its first projects, setting the
                stage for global growth.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-span-1">
                <p class="text-md lg:text-xl md:text-3xl font-bold">2021</p>
            </div>
            <div class="col-span-2 md:col-span-1 flex justify-center md:justify-start">
                <span>
                    <p class="bg-slate-300 rounded-full h-3 w-3"></p>
                    <p class="border-r-2 w-[7px] border-slate-300 h-full"></p>
                </span>
            </div>
            <div class="col-span-9 md:col-span-10 pb-5">
                <p class=" uppercase text-md lg:text-xl md:text-3xl text-action">STRATEGIC PARTNERSHIPS</p>
                <p class="paragraph">1phi618 forged key partnerships with industry leaders like ADP, Kronos, Ramco, and SAP,
                strengthening its market position.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-span-1">
                <p class="text-md lg:text-xl md:text-3xl font-bold">2022</p>
            </div>
            <div class="col-span-2 md:col-span-1 flex justify-center md:justify-start">
                <span>
                    <p class="bg-slate-300 rounded-full h-3 w-3"></p>
                    <p class="border-r-2 w-[7px] border-slate-300 h-full"></p>
                </span>
            </div>
            <div class="col-span-9 md:col-span-10 pb-5">
                <p class=" uppercase text-md lg:text-xl md:text-3xl text-action">GLOBAL EXPANSION</p>
                <p class="paragraph">1phi618 grew to a team of over 50 consultants worldwide and relocated its headquarters to Zug,
                continuing its upward trajectory.</p>
            </div>
        </div>
        <div class="row overflow-hidden">
            <div class="col-span-1">
                <p class="text-md lg:text-xl md:text-3xl font-bold">2023</p>
            </div>
            <div class="col-span-2 md:col-span-1 flex justify-center md:justify-start">
                <span>
                    <p class="bg-slate-300 rounded-full h-3 w-3"></p>
                    <!-- <p class="border-r-2 w-[7px] border-slate-300 h-full"></p> -->
                </span>
            </div>
            <div class="col-span-9 md:col-span-10">
                <p class="text-md lg:text-xl md:text-3xl text-action">FOCUSSED TARGETS & COMPETENCIES CONSOLIDATION</p>
                <p class="paragraph">1phi618 reassessed and prioritized it’s targets and worked towards consolidating and
                strengthening it’s competencies to fuel future growth</p>
            </div>
        </div>
    </section>


    <section class="bg-grey py-12">
        <div class="container ">
            <p class="text-center heading">OUR DRIVERS</p>
            <div class="flex justify-center">
                <p class="text-center border-b-2 border-blue w-12 my-5"></p>
            </div>
        </div>
        <div class="bg-grey">
            <div class="row container">
                <?php foreach ($about as $i) {?>
                    <div class="col-span-12 md:col-span-4">
                        <div class="bg-slate-100 rounded-md border-b-4 border-action group text-base shadow-md hover:shadow-xl h-full">
                            <div class="overflow-hidden rounded-t-md bg-cover bg-no-repeat" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/about/<?php echo $i['img']?>'); min-height:300px; ">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/static/about/<?php echo $i['img']?>" alt="" class="zoomBannerImage"> -->
                            </div>
                            <div class="p-5">
                                <p class="subHeading py-1 text-left uppercase text-action"><?php echo $i['head']?></p>
                                <p class="paragraph font-semibold py-2 text-left"><?php echo $i['name']?></p>
                                <p class="paragraph text-left"><?php echo $i['text']?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-span-12 md:col-span-4 bg-slate-100 rounded-md  border-b-4 border-action group text-base shadow-md hover:shadow-xl">
                    <div class="overflow-hidden rounded-t-md bg-cover bg-no-repeat" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/about/<?php echo $i['img']?>'); min-height:300px; ">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/static/about/<?php echo $i['img']?>" alt="" class="zoomBannerImage"> -->
                    </div>
                    <div class="p-5">
                        <p class="subHeading py-1 uppercase text-action text-left">OUR VALUES</p>
                        <p class="paragraph font-semibold py-2 text-left">Client-Centricity. Integrity. Accountability - Our Circle of Values</p>
                        <ul class="list-none">
                            <li class="paragraph relative px-5 text-left list-item">Client focus</li>
                            <li class="paragraph relative px-5 text-left list-item">Innovation</li>
                            <li class="paragraph relative px-5 text-left list-item">Trust and accountability in all relationships</li>
                            <li class="paragraph relative px-5 text-left list-item">Value-centricity</li>
                            <li class="paragraph relative px-5 text-left list-item">Social accountability</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   <section class="py-12">
        <div class="container">
            <p class="heading text-center">OUR TEAM</p>
            <div class="flex justify-center">
                <p class="text-center border-b-2 border-blue w-12 my-5"></p>
            </div>
        </div>
        <div class="row container">
            <?php foreach ($founders as $i) {?>
                <div class="col-span-12 md:col-span-6">
                    <div class=" rounded-md group text-base shadow-md hover:shadow-xl h-full">
                        <div class=" overflow-hidden rounded-t-md"> 
                            <img src="<?php echo get_template_directory_uri(); ?>/images/static/about/<?php echo $i['img']?>" alt="">
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <div>
                                    <p class="subHeading py-1 text-left uppercase text-blue"><?php echo $i['name']?></p>
                                    <p class="paragraph font-semibold py-2 text-left text-slate-300"><?php echo $i['degignatation']?></p>
                                </div>
                                <a href="<?php echo $i['href']?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/social/linkedin.svg" alt="" class="w-10"></a>
                            </div>
                            <p class="paragraph text-left"><?php echo $i['text']?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
   </section>
<?php get_footer(); ?>