<?php
  $role = [
    ["text"=> "Lead HR digital transformation projects"],
    ["text"=> "Support clients in vendor selection"],
    ["text"=> "Advise and collaborate with clients on HR digitization opportunities and roadmaps"],
  ];

  $aboutYou = [
    ["text"=> "Strong consulting experience"],
    ["text"=> "Good and up to date market knowledge in HR technology"],
  ];
?>
<?php get_header(); ?>
    <section class="relative" style="z-index: -1">
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/servicebanner.jpg" alt="career" class="w-full h-auto web"/>
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/mobileservice.jpg" alt="career" class="mobile w-full"/>
            <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50 bg-black2">
                <div class="container">
                    <h1 class="heading text-white text-center md:text-left uppercase mb-3">CAREER</h1>
                    <div class="flex justify-center md:justify-start">
                            <p class="border-b-2 border-white w-24 my-5"></p>
                        </div>
                    <p class="paragraph text-white text-center md:text-left">Do you want to jump on our bandwagon?</p>
                </div>
            </div>
        </div>
        <div class="tint"></div>
    </section>
    <section class="container py-12">
        <p class="heading text-center md:text-left">BUSINESS CONSULTANT HR DIGITIZATION</p>
        <div class="flex justify-center md:justify-start">
            <p class="border-b-2 border-blue w-24 mt-5"></p>
        </div>
        <div class=" py-12">
            <p class="text-center md:text-left">1phi618 is always looking for talented people to become its team members. We realize that productive people are always an asset to our organization. So if you have the professional skills and the passion to work with some of the biggest companies in the world, join in!</p>
        </div>
        <div class="row bg-action p-2 lg:p-3 xl:p-6">
            <div class="col-span-12 md:col-span-6">
                <div class="flex justify-center md:justify-start">
                    <ul class="flex">
                        <li class="flex flex-col justify-center md:justify-start items-center h-full">
                            <p class="fas fa-suitcase text-white text-xl pr-2 pt-1"></p>
                        </li>
                        <li class="py-1 md:py-0">
                            <p class="text-md text-white">Location</p>
                            <p class="paragraph text-white">Zurich, Switzerland</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="flex justify-center md:justify-start">
                    <ul class="flex">
                        <li class="flex flex-col justify-center md:justify-start items-center h-full">
                            <p class="fas fa-suitcase text-white text-xl pr-2 pt-1"></p>
                        </li>
                        <li class="py-1 md:py-0">
                            <p class="text-md text-white">Employment Type</p>
                            <p class="paragraph text-white">Permanent</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="py-12">
            <p class="heading text-center md:text-left">ABOUT THE ROLE</p>
            <div class="flex justify-center md:justify-start">
                <p class="border-b-2 border-blue w-24 my-5"></p>
            </div>    
            <div class="row">
                <?php foreach ($role as $i) { ?>
                    <div class="col-span-12 md:col-span-6 flex">
                        <p class="fas fa-check-circle pr-2 text-action text-xl pt-1"></p>
                        <p class="paragraph text-action"><?php echo $i ['text']?></p>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="p-3 md:p-8 bg-grey">
            <p class="heading text-center md:text-left">ABOUT YOU</p>
            <div class="flex justify-center md:justify-start">
                <p class="border-b-2 border-blue w-24 my-5"></p>
            </div>
            <div class="row">
                <?php foreach ($aboutYou as $i) { ?>
                    <div class="col-span-12 md:col-span-6 flex">
                        <p class="fas fa-check-circle pr-2 text-action text-xl pt-1"></p>
                        <p class="paragraph text-action"><?php echo $i ['text']?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="flex justify-center md:justify-start">
            <a href="mailto:almora1deepak@gmail.com">
                <button class="bg-action hover:bg-blue ease-in-out text-lg text-white py-2 px-5 flex mt-5 md:mt-8">APPLY NOW 
                    <div class="flex flex-col justify-center items-center h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/whitearrow.svg" alt="" class="w-6 mx-auto ml-2">
                    </div>
                </button>
            </a>
        </div>
    </section>
<?php get_footer(); ?>