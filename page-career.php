<?php
$allListings = [
    ["name"=> "Sales and Delivery Lead", "city"=> "Gurugram , India", "status"=> "Permanent", "date"=> "June 21, 2024", "href"=> "/sales-and-delivery-lead"],
    ["name"=> "HR Architect", "city"=> "Gurugram , India", "status"=> "Permanent", "date"=> "June 13, 2024", "href"=> "/hr-architect"],
    ["name"=> "Business Analyst Payroll Integration", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "June 5, 2024", "href"=> "/consultant"],
    ["name"=> "SuccessFactors EC consultant", "city"=> "Bangalore, India", "status"=> "Permanent", "date"=> "May 18, 2024", "href"=> "/success-factors"],
    ["name"=> "Business Consultant Hr Digitization", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "May 14, 2024", "href"=> "/business"],
    ["name"=> "Kronos Consultant", "city"=> "Bangalore, India", "status"=> "Permanent", "date"=> "May 12, 2024", "href"=> "/krnos"],
    ["name"=> "Workday Time Tracking and Absence Consultant", "city"=> "Work From Home", "status"=> "Permanent", "date"=> "May 2, 2024", "href"=> "/absence-consultant"],
];
$Consultant = [
    ["name"=> "Business Analyst Payroll Integration", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "June 5, 2024", "href"=> "/consultant"],
];

$business = [
    ["name"=> "Business Consultant Hr Digitization", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "May 14, 2024", "href"=> "/business"],
];

$krnos = [
    ["name"=> "Kronos Consultant", "city"=> "Bangalore, India", "status"=> "Permanent", "date"=> "May 12, 2024", "href"=> "/krnos"],
];

$successFactors = [
    ["name"=> "SuccessFactors EC consultant", "city"=> "Bangalore, India", "status"=> "Permanent", "date"=> "May 18, 2024", "href"=> "/success-factors"],
];

$sales = [
    ["name"=> "Sales and Delivery Lead", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "June 21, 2024", "href"=> "/sales-and-delivery-lead"],
];

$hrArchitect = [
    ["name"=> "HR Architect", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "June 13, 2024", "href"=> "/hr-architect"],
];

$Workday = [
    ["name"=> "Workday Time Tracking and Absence Consultant", "city"=> "Work From Home", "status"=> "Permanent", "date"=> "May 2, 2024", "href"=> "/absence-consultant"],
];

$buttons = [
    ["group" => "group1", "name" =>"All"],
    ["group" => "group2", "name" =>"Business Consultant HR Digitization"],
    ["group" => "group3", "name" =>"Business Consultant HR Digitization"],
    ["group" => "group4", "name" =>"Kronos Consultant"],
    ["group" => "group5", "name" =>"SuccessFactors EC consultant"],
    ["group" => "group6", "name" =>"Sales and Delivery Lead"],
    ["group" => "group7", "name" =>"HR Architect"],
    ["group" => "group8", "name" =>"Workday Time Tracking"],
];
?>

<?php get_header(); ?>
<?php include('includes/config.php') ?>
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

<section class="container">
<ul class="md:flex justify-center md:justify-evenly items-center flex-col md:flex-row mt-12">
    <?php 
        $count = 0;
        foreach ($buttons as $i) {
            if ($count % 5 == 0 && $count > 0) {
                echo '</ul><ul class="md:flex justify-center md:justify-between items-center flex-col md:flex-row">';
        }
    ?>
        <li class="py-2 mx-2">
            <button class="group-button bg-slate-200 text-action font-bold hover:bg-action hover:text-white py-2 px-5 rounded-full web" onclick="showGroup('<?php echo $i['group']?>')"><?php echo $i['name']?></button>
            <button class="group-button bg-slate-200 text-action font-bold hover:bg-action hover:text-white w-full py-2 px-5 rounded-full mobile" onclick="showGroup('<?php echo $i['group']?>')"><?php echo $i['name']?></button>
        </li>
    <?php 
        $count++;
    } 
    ?>
</ul>

    <div class="py-12">
        <div id="group1" class="group-content">
            <div class="row">
                <?php foreach ($allListings as $i) { ?>
                    <div class="col-span-12 md:col-span-4 border shadow-md hover:shadow-lg rounded-xl p-5">
                        <a href="<?php echo $i['href']?>">
                            <div class="flex flex-col justify-between h-full">
                                <span>
                                    <p class="uppercase text-2xl text-left font-bold"><?php echo $i['name']?></p>
                                    <p class="text-grey2 py-1"><?php echo $i['city']?></p>
                                </span>
                                <span>
                                    <p class="text-grey2 py-3"><?php echo $i['status']?></p>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <button class="text-action">Read More</button>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/careerarrow.svg" alt="" class="w-6 rotate-180 mx-2">
                                        </div>
                                        <p class="text-[#7a7a7a]"><?php echo $i['date']?></p>
                                    </div>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="group2" class="group-content">
            <div class="row">
                <?php foreach ($Consultant as $i) { ?>
                    <div class="col-span-12 md:col-span-4 border shadow-md hover:shadow-lg rounded-xl p-5 ">
                        <a href="<?php echo $i['href']?>">
                            <div class="flex flex-col justify-between h-full">
                                <span>
                                    <p class="uppercase text-2xl text-left"><?php echo $i['name']?></p>
                                    <p class="text-[#7a7a7a]"><?php echo $i['city']?></p>
                                </span>
                                <span>
                                    <p class="text-[#7a7a7a] py-5"><?php echo $i['status']?></p>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <button class="text-action">Read More</button>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/careerarrow.svg" alt="" class="w-6 rotate-180 mx-2">
                                        </div>
                                        <p class="text-[#7a7a7a]"><?php echo $i['date']?></p>
                                    </div>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="group3" class="group-content">
            <div class="row">
                <?php foreach ($business as $i) { ?>
                    <div class="col-span-12 md:col-span-4 border shadow-md hover:shadow-lg rounded-xl p-5 ">
                        <a href="<?php echo $i['href']?>">
                            <div class="flex flex-col justify-between h-full">
                                <span>
                                    <p class="uppercase text-2xl text-left"><?php echo $i['name']?></p>
                                    <p class="text-[#7a7a7a]"><?php echo $i['city']?></p>
                                </span>
                                <span>
                                    <p class="text-[#7a7a7a] py-5"><?php echo $i['status']?></p>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <button class="text-action">Read More</button>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/careerarrow.svg" alt="" class="w-6 rotate-180 mx-2">
                                        </div>
                                        <p class="text-[#7a7a7a]"><?php echo $i['date']?></p>
                                    </div>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="group4" class="group-content">
            <div class="row">
                <?php foreach ($krnos as $i) { ?>
                    <div class="col-span-12 md:col-span-4 border shadow-md hover:shadow-lg rounded-xl p-5 ">
                        <a href="<?php echo $i['href']?>">
                            <div class="flex flex-col justify-between h-full">
                                <span>
                                    <p class="uppercase text-2xl text-left"><?php echo $i['name']?></p>
                                    <p class="text-[#7a7a7a]"><?php echo $i['city']?></p>
                                </span>
                                <span>
                                    <p class="text-[#7a7a7a] py-5"><?php echo $i['status']?></p>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <button class="text-action">Read More</button>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/careerarrow.svg" alt="" class="w-6 rotate-180 mx-2">
                                        </div>
                                        <p class="text-[#7a7a7a]"><?php echo $i['date']?></p>
                                    </div>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="group5" class="group-content">
            <div class="row">
                <?php foreach ($successFactors as $i) { ?>
                    <div class="col-span-12 md:col-span-4 border shadow-md hover:shadow-lg rounded-xl p-5 ">
                        <a href="<?php echo $i['href']?>">
                            <div class="flex flex-col justify-between h-full">
                                <span>
                                    <p class="uppercase text-2xl text-left"><?php echo $i['name']?></p>
                                    <p class="text-[#7a7a7a]"><?php echo $i['city']?></p>
                                </span>
                                <span>
                                    <p class="text-[#7a7a7a] py-5"><?php echo $i['status']?></p>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <button class="text-action">Read More</button>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/careerarrow.svg" alt="" class="w-6 rotate-180 mx-2">
                                        </div>
                                        <p class="text-[#7a7a7a]"><?php echo $i['date']?></p>
                                    </div>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="group6" class="group-content">
            <div class="row">
                <?php foreach ($sales as $i) { ?>
                    <div class="col-span-12 md:col-span-4 border shadow-md hover:shadow-lg rounded-xl p-5 ">
                        <a href="<?php echo $i['href']?>">
                            <div class="flex flex-col justify-between h-full">
                                <span>
                                    <p class="uppercase text-2xl text-left"><?php echo $i['name']?></p>
                                    <p class="text-[#7a7a7a]"><?php echo $i['city']?></p>
                                </span>
                                <span>
                                    <p class="text-[#7a7a7a] py-5"><?php echo $i['status']?></p>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <button class="text-action">Read More</button>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/careerarrow.svg" alt="" class="w-6 rotate-180 mx-2">
                                        </div>
                                        <p class="text-[#7a7a7a]"><?php echo $i['date']?></p>
                                    </div>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>   
        <div id="group7" class="group-content">
            <div class="row">
                <?php foreach ($hrArchitect as $i) { ?>
                    <div class="col-span-12 md:col-span-4 border shadow-md hover:shadow-lg rounded-xl p-5 ">
                        <a href="<?php echo $i['href']?>">
                            <div class="flex flex-col justify-between h-full">
                                <span>
                                    <p class="uppercase text-2xl text-left"><?php echo $i['name']?></p>
                                    <p class="text-[#7a7a7a]"><?php echo $i['city']?></p>
                                </span>
                                <span>
                                    <p class="text-[#7a7a7a] py-5"><?php echo $i['status']?></p>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <button class="text-action">Read More</button>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/careerarrow.svg" alt="" class="w-6 rotate-180 mx-2">
                                        </div>
                                        <p class="text-[#7a7a7a]"><?php echo $i['date']?></p>
                                    </div>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>   
        <div id="group8" class="group-content">
            <div class="row">
                <?php foreach ($Workday as $i) { ?>
                    <div class="col-span-12 md:col-span-4 border shadow-md hover:shadow-lg rounded-xl p-5 ">
                        <a href="<?php echo $i['href']?>">
                            <div class="flex flex-col justify-between h-full">
                                <span>
                                    <p class="uppercase text-2xl text-left"><?php echo $i['name']?></p>
                                    <p class="text-[#7a7a7a]"><?php echo $i['city']?></p>
                                </span>
                                <span>
                                    <p class="text-[#7a7a7a] py-5"><?php echo $i['status']?></p>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <button class="text-action">Read More</button>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/careerarrow.svg" alt="" class="w-6 rotate-180 mx-2">
                                        </div>
                                        <p class="text-[#7a7a7a]"><?php echo $i['date']?></p>
                                    </div>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>   
    </div>


</section>

<?php get_footer(); ?>

<script>
    function showGroup(groupId) {
        const groups = document.querySelectorAll('.group-content');
        groups.forEach(group => {
            group.classList.add('hidden');
        });
        document.getElementById(groupId).classList.remove('hidden');
    }

    // Show the first group by default
    document.addEventListener('DOMContentLoaded', () => {
        showGroup('group1');
    });
</script>
