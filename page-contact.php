<?php
$Consultant1 = [
    ["name"=> "Business Analyst Payroll Integration 1", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "October 19, 2022", "href"=> ""],
    ["name"=> "Business Analyst Payroll Integration 2", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "October 20, 2022", "href"=> ""],
];

$Consultant2 = [
    ["name"=> "Business Consultant HR Digitization 1", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "October 21, 2022", "href"=> ""],
    ["name"=> "Business Consultant HR Digitization 2", "city"=> "Zurich, Switzerland", "status"=> "Permanent", "date"=> "October 22, 2022", "href"=> ""],
];
?>

<?php get_header(); ?>
<?php include('includes/config.php') ?>
<!-- <section class="relative" style="z-index: -1">
    <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/images/static/services/servicebanner.webp" alt="news" class="w-full h-auto web"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/static/services/servicebanner.webp" alt="news" class="mobile"/>
        <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50">
            <div class="container">
                <h1 class="heading text-white text-center md:text-left uppercase mb-3">CONTACT US</h1>
                <div class="flex justify-center md:justify-start">
                        <p class="border-b-2 border-white w-24 my-5"></p>
                    </div>
                <p class="paragraph text-white text-center md:text-left">We would love to hear from you</p>
            </div>
        </div>
    </div>
    <div class="tint"></div>
</section> -->
    <section class="relative" style="z-index: -1">
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/contactbanner.jpg" alt="news" class="w-full h-auto web"/>
            <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/mobilecontact.jpg" alt="news" class="mobile w-full"/>
            <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50" style="background-color:#0000005e;">
                <div class="container">
                    <h1 class="heading text-white text-center md:text-left uppercase mb-3">CONTACT US</h1>
                    <div class="flex justify-center md:justify-start">
                            <p class="border-b-2 border-white w-24 my-5"></p>
                        </div>
                    <p class="paragraph text-white text-center md:text-left">We would love to hear from you</p>
                </div>
            </div>
        </div>
        <div class="tint"></div>
    </section>

<section class="container">
    <div class="flex justify-center space-x-4 py-12">
        <button class="group-button bg-slate-200 text-action hover:bg-action hover:text-white py-2 px-5 rounded-full" onclick="showGroup('group1')">Zug, Switzerland</button>
        <button class="group-button bg-slate-200 text-action hover:bg-action hover:text-white py-2 px-5 rounded-full" onclick="showGroup('group2')">Maharashtra, India</button>
        <button class="group-button bg-slate-200 text-action hover:bg-action hover:text-white py-2 px-5 rounded-full" onclick="showGroup('group3')">Gurugram, India</button>
    </div>
    <div class="">
        <div id="group1" class="group-content bg-white rounded hidden">
            <div class="row">
                <div class="col-span-12 md:col-span-4 bg-center bg-cover min-h-[400px]" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/office.webp')">
                </div>
                <div class="col-span-12 md:col-span-4 overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d169.50224594222098!2d8.498738!3d47.176733!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aaa639f6eddcd%3A0xf17772df01cb8846!2sChamerstrasse%2079%2C%206300%20Zug%2C%20Switzerland!5e0!3m2!1sen!2sus!4v1718190904159!5m2!1sen!2sus" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-span-12 md:col-span-4 bg-cover min-h-[400px]" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/contactus.webp');">
                    <div class="flex flex-col justify-center items-center h-full p-5" style="background-color:#282b6db0;">
                        <p class="text-white subHeading">CONTACT DETAILS</p>

                        <div class="flex items-start text-center text-white gap-2 mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/location.svg" alt="" class=" w-6 mr-2">
                            <p>1phi618 GmbH, Chamerstrasse 79,<br/>6300 Zug, Switzerland</p>
                        </div>                                                                               
                        <div class="flex items-start text-center text-white gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/message.svg" alt="" class="w-6 mr-2">
                            <a href="mailto:info@1phi618.com">info@1phi618.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="group2" class="group-content bg-white rounded hidden">
            <div class="row">
                <div class="col-span-12 md:col-span-4 bg-center bg-cover min-h-[400px]" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/mumaioffice.webp')">
                </div>
                <div class="col-span-12 md:col-span-4 overflow-hidden ">
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d235.54577778702736!2d72.93783049627761!3d19.16318557368151!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b85c51cf07ff%3A0xa67983e990057c02!2sNo%2012%2C%20Lal%20Bahadur%20Shastri%20Marg%2C%20Asha%20Nagar%2C%20Mulund%20West%2C%20Mumbai%2C%20Maharashtra%20400080%2C%20India!5e0!3m2!1sen!2sus!4v1719829514808!5m2!1sen!2sus" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-span-12 md:col-span-4 bg-cover min-h-[400px]" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/contactus.webp')">
                    <div class="flex flex-col justify-center items-center h-full p-5" style="background-color:#282b6db0; height:100%;">
                        <p class="subHeading text-center text-white">CONTACT DETAILS</p>

                        <div class="flex items-start text-center text-white gap-2 mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/location.svg" alt="" class=" w-6 mr-2">
                            <p>1phi618 Technology Services Pvt Ltd C-505,<br/> Jalaram Park, Lbs Marg, Near Sonapur Signal, Bhandup-w, Mumbai – 400078, Maharashtra, India</p>
                        </div>                                                                               
                        <div class="flex items-start text-center text-white gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/message.svg" alt="" class="w-6 mr-2">
                            <a href="mailto:info@1phi618.com">info@1phi618.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="group3" class="group-content bg-white rounded hidden">
            <div class="row">
                <div class="col-span-12 md:col-span-4 bg-center bg-cover min-h-[400px]" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/mumaioffice.webp')">
                </div>
                <div class="col-span-12 md:col-span-4 overflow-hidden ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1752.976440309147!2d77.02198653854964!3d28.51106535085884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19f7bd8e7ac5%3A0xe483d7009bf95237!2zMTc2LUcsIOCkrOCljeCksuClieCklSBNLCDgpKjgpY3gpK_gpYIg4KSq4KSy4KS-4KSuIOCkteCkv-CkueCkvuCksCDgpKvgpYfgpLggMSwg4KSq4KS-4KSy4KSuIOCkteCkv-CkueCkvuCksCwg4KSX4KWB4KSw4KWB4KSX4KWN4KSw4KS-4KSuLCDgpLngpLDgpL_gpK_gpL7gpKPgpL4gMTIyMDE3!5e0!3m2!1shi!2sin!4v1719822496755!5m2!1shi!2sin" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-span-12 md:col-span-4 bg-cover min-h-[400px]" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/contactus.webp')">
                <div class="flex flex-col justify-center items-center h-full p-5" style="background-color:#282b6db0; height:100%;">
                        <p class="subHeading text-center text-white">CONTACT DETAILS</p>

                        <div class="flex items-start text-center text-white gap-2 mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/location.svg" alt="" class=" w-6 mr-2">
                            <p>1phi618 Technology Services Pvt Ltd, Office Number: TF-432, Palam Corporate Plaza,<br/> Palam Vihar, Gurugram, Haryana-122017 (India)</p>
                        </div>                                                                               
                        <div class="flex items-start text-center text-white gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/message.svg" alt="" class="w-6 mr-2">
                            <a href="mailto:info@1phi618.com">info@1phi618.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container py-12">
    <p class="heading font-bold text-blue text-center md:text-left">FEEDBACK FORM</p>
    <div class="flex justify-center md:justify-start">
        <p class="border-b-2 border-blue w-24 my-5"></p>
    </div>
<?php include('includes/form-element.php') ?>
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
