<?php
  $responsibilities = [
    ["text"=> "Develop and execute strategies to achieve business goals and targets for the subsidiary in India"],
    ["text"=> "Manage and lead the team to deliver on sales, operational, and financial targets"],
    ["text"=> "Provide advisory services and expertise to clients on HR Technology and other relevant services"],
    ["text"=> "Build and maintain relationships with clients and stakeholders"],
    ["text"=> "Monitor market trends, identify opportunities and risks, and develop appropriate action plans"],
    ["text"=> "Ensure compliance with all relevant regulations, policies, and procedures"],
    ["text"=> "Develop and maintain a high-performance culture within the team"],
    ["text"=> "Develop and implement effective sales and marketing strategies to drive revenue growth"],
    ["text"=> "Develop and implement operational processes to ensure efficient and effective delivery of services"],
    ["text"=> "Ensure effective communication and collaboration with other teams within 1phi618"],
  ];

  $requirements = [
    ["text"=> "Bachelor&#39;s degree in a relevant field, such as Business Administration, IT or HR"],
    ["text"=> "At least 10 years of experience in a similar role, with a strong background in HR Technology and advisory services"],
    ["text"=> "Proven track record of achieving sales targets and driving revenue growth"],
    ["text"=> "Experience leading operational teams and delivering on operational targets"],
    ["text"=> "Excellent communication and interpersonal skills, with the ability to build and maintain relationships with clients and stakeholders"],
    ["text"=> "Strong leadership and people management skills"],
    ["text"=> "Strategic thinking and ability to develop and execute effective strategies"],
    ["text"=> "Experience in managing budgets and financial performance"],
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
        <p class="heading text-center md:text-left uppercase">Sales and Delivery Lead</p>
        <div class="flex justify-center md:justify-start">
            <p class="border-b-2 border-blue w-24 mt-5"></p>
        </div>
        <p class="text-center md:text-left py-12">As the Sales and Delivery Lead, you will be responsible for leading 1phi618 in India from both a delivery and commercial perspective. You will have a strong background in HR Technology, providing advisory services and managing a team. You will also have a proven track record in sales, driving revenue growth and expanding the business. Additionally, you will have experience leading teams and ensuring the company meets its operational targets.</p>
        <div class="row bg-action p-2 lg:p-3 xl:p-6">
            <div class="col-span-12 md:col-span-6">
                <div class="flex justify-center md:justify-start">
                    <ul class="flex">
                        <li class="flex flex-col justify-center md:justify-start items-center h-full">
                            <p class="fas fa-suitcase text-white text-xl pr-2 pt-1"></p>
                        </li>
                        <li class="py-1 md:py-0">
                            <p class="text-md text-white">Location</p>
                            <p class="paragraph text-white">Gurugram , India</p>
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
            <p class="heading text-center md:text-left">Key Responsibilities</p>
            <div class="flex justify-center md:justify-start">
                <p class="border-b-2 border-blue w-24 my-5"></p>
            </div>
            <div class="row">
                <?php foreach ($responsibilities as $i) { ?>
                    <div class="col-span-12 md:col-span-6 flex">
                        <p class="fas fa-check-circle pr-2 text-action text-xl pt-1"></p>
                        <p class="paragraph text-action"><?php echo $i ['text']?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="p-3 md:p-8 bg-grey">
            <p class="heading text-center md:text-left">Requirements</p>
            <div class="flex justify-center md:justify-start">
                <p class="border-b-2 border-blue w-24 my-5"></p>
            </div>
            <div class="row">
                <?php foreach ($requirements as $i) { ?>
                    <div class="col-span-12 md:col-span-6 flex">
                        <p class="fas fa-check-circle pr-2 text-action text-xl pt-1"></p>
                        <p class="paragraph text-action"><?php echo $i ['text']?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="flex justify-center md:justify-start">
            <a href="mailto:info@1phi618.com">
                <button class="bg-action hover:bg-blue ease-in-out text-lg text-white py-2 px-5 flex mt-5 md:mt-8">APPLY NOW 
                    <div class="flex flex-col justify-center items-center h-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/whitearrow.svg" alt="" class="w-6 mx-auto ml-2">
                    </div>
                </button>
            </a>
        </div>
    </section>
<?php get_footer(); ?>