<?php
    $buttons = [
        ["group" => "group1", "name" => "All"],
        ["group" => "group2", "name" => "Payroll"],
        ["group" => "group6", "name" => "SAP"],
        ["group" => "group5", "name" => "LMS"],
        ["group" => "group4", "name" => "Time Mangement"],
        ["group" => "group3", "name" => "Internal Communication"],
    ];
?>
<?php get_header(); ?>
<?php include('includes/config.php') ?>
<section class="relative" style="z-index: -1">
    <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/casestudy.jpg" alt="clients" class="w-full h-auto web"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/static/banner/mobilecase.jpg" alt="clients" class="mobile w-full"/>
        <div class="absolute top-0 bottom-0 left-0 h-full w-full flex flex-col justify-center items-center md:items-start z-50 bg-black2">
            <div class="container">
                <h1 class="heading text-white text-center md:text-left uppercase mb-3">CASE STUDIES</h1>
                <div class="flex justify-center md:justify-start">
                        <p class="border-b-2 border-white w-24 my-5"></p>
                    </div>
                <p class="paragraph text-white text-center md:text-left">Take a look at our turnaround stories</p>
            </div>
        </div>
    </div>
    <div class="tint"></div>
</section>

<section class="container" x-data="{ activeGroup: 'group1' }">
    <ul class="mt-12 bg-action md:flex justify-evenly md:justify-start px-5 py-2">
        <?php foreach ($buttons as $i) { ?>
            <li class="text-center md:text-left">
                <button @click="activeGroup = '<?php echo $i['group']; ?>'" class="btn"><?php echo $i['name']; ?></button>
            </li>
         <?php } ?>
    </ul>

    <div x-show="activeGroup === 'group1'" class="py-12">
        <div class="row">
            <?php foreach ($all as $i) { ?>
                <div class="col-span-12 md:col-span-4">
                    <div class="bg-white rounded-md shadow-md hover:shadow-xl border-2 border-grey h-full">
                        <a href="<?php echo $i['href']; ?>">
                            <div class="overflow-hidden rounded-t-md">
                                <div class="bg-cover bg-center zoomBannerImage" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/casestudy/<?php echo $i['img']; ?>');min-height: 300px;">
                                </div>
                            </div>
                            <div class="p-5">
                                <p class="text-grey2 uppercase font-semibold py-2 text-left text-md flex"><?php echo $i['name']; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrow.svg" alt="" class="w-3 mx-3"></p>
                                <p class="twoliner paragraph text-action text-left"><?php echo $i['text']; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div x-show="activeGroup === 'group2'" class="py-12">
        <div class="row">
            <?php foreach ($case as $i) { ?>
                <div class="col-span-12 md:col-span-4">
                    <div class="bg-white rounded-md shadow-md hover:shadow-xl border-2 border-grey h-full">
                        <a href="<?php echo $i['href']; ?>">
                            <div class="overflow-hidden rounded-t-md">
                                <div class="bg-cover bg-center zoomBannerImage" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/casestudy/<?php echo $i['img']; ?>');min-height: 300px;">
                                </div>
                            </div>
                            <div class="p-5">
                                <p class="font-semibold uppercase  py-2 text-[#777777] text-left text-md flex"><?php echo $i['name']; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrow.svg" alt="" class="w-3 mx-3"></p>
                                <p class="paragraph twoliner text-action text-left"><?php echo $i['text']; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div x-show="activeGroup === 'group3'" class="py-12">
        <div class="row">
            <?php foreach ($internal as $i) { ?>
                <div class="col-span-12 md:col-span-4 bg-white rounded-md shadow-md hover:shadow-xl">
                    <a href="<?php echo $i['href']; ?>">
                        <div class="overflow-hidden rounded-t-md">
                            <div class="bg-cover bg-center zoomBannerImage" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/casestudy/<?php echo $i['img']; ?>');min-height: 300px;">
                            </div>
                        </div>
                        <div class="p-5">
                        <p class="text-grey2 uppercase font-semibold py-2 text-left text-md flex"><?php echo $i['name']; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrow.svg" alt="" class="w-3 mx-3"></p>
                            <p class="twoliner paragraph text-action text-left"><?php echo $i['text']; ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div x-show="activeGroup === 'group4'" class="py-12">
        <div class="row">
            <?php foreach ($time as $i) { ?>
                <div class="col-span-12 md:col-span-4 bg-white rounded-md shadow-md hover:shadow-xl">
                    <a href="<?php echo $i['href']; ?>">
                        <div class="overflow-hidden rounded-t-md">
                            <div class="bg-cover bg-center zoomBannerImage" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/casestudy/<?php echo $i['img']; ?>');min-height: 300px;">
                            </div>
                        </div>
                        <div class="p-5">
                        <p class="text-grey2 uppercase font-semibold py-2 text-left text-md flex"><?php echo $i['name']; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrow.svg" alt="" class="w-3 mx-3"></p>
                            <p class="twoliner paragraph text-action text-left"><?php echo $i['text']; ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div x-show="activeGroup === 'group5'" class="py-12">
        <div class="row">
            <?php foreach ($lms as $i) { ?>
                <div class="col-span-12 md:col-span-4 bg-white rounded-md shadow-md hover:shadow-xl">
                    <a href="<?php echo $i['href']; ?>">
                        <div class="overflow-hidden rounded-t-md">
                            <div class="bg-cover bg-center zoomBannerImage" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/casestudy/<?php echo $i['img']; ?>');min-height: 300px;">
                            </div>
                        </div>
                        <div class="p-5">
                        <p class="text-grey2 uppercase font-semibold py-2 text-left text-md flex"><?php echo $i['name']; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrow.svg" alt="" class="w-3 mx-3"></p>
                            <p class="twoliner paragraph text-action text-left"><?php echo $i['text']; ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div x-show="activeGroup === 'group6'" class="py-12">
        <div class="row">
            <?php foreach ($sap as $i) { ?>
                <div class="col-span-12 md:col-span-4 bg-white rounded-md shadow-md hover:shadow-xl">
                    <a href="<?php echo $i['href']; ?>">
                        <div class="overflow-hidden rounded-t-md">
                            <div class="bg-cover bg-center zoomBannerImage" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/casestudy/<?php echo $i['img']; ?>');min-height: 300px;">
                            </div>
                        </div>
                        <div class="p-5">
                        <p class="text-grey2 uppercase font-semibold py-2 text-left text-md flex"><?php echo $i['name']; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/arrow.svg" alt="" class="w-3 mx-3"></p>
                            <p class="twoliner paragraph text-action text-left"><?php echo $i['text']; ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
