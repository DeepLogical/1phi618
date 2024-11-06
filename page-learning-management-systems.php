<?php get_header(); ?>
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
<div class="container">
    <div class="py-12">
        <p class="heading text-center md:text-left uppercase">To consolidate 4 Learning Management Systems (LMS) into One LMS in Successfactors and update ancillary tools.</p>
        <div class="flex justify-center md:justify-start">
            <p class="border-b-2 border-blue w-24 mt-5"></p>
        </div>
    </div>
    <div class="row border-b-2 pb-12 md:py-12">
        <div class="col-span-12 md:col-span-2">
            <div>
                <p class="subHeading text-action ">CHALLENGE</p>
                <div class="flex w-full">
                    <p class="border-b-2 border-action w-20 my-5"></p>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-10">
            <!-- <p class="paragraph">It was very difficult to maintain various resources, assignment profiles, processes (different processes across different businesses/ functional groups), and security (data compliance issues) across multiple LMS.</p> -->
            <p class="paragraph pb-2">The following critical themes were addressed:</p>
            <ul class="custom-list">
                <li class="paragraph py-1">It was very difficult to maintain various resources, assignment profiles, processes (different processes across different businesses/ functional groups), and security (data compliance issues) across multiple LMS.</li>
                <li class="paragraph py-1">Administration, support models, acquisitions and divestitures were spilt across multiple LMS.</li>
                <li class="paragraph py-1">High maintenance costs and expenses such as license.</li>
                <li class="paragraph py-1">Difficult to maintain enterprise level records and learning analytics and track learning history of multiple learners on multiple LMS.</li>
                <li class="paragraph py-1">Multiple complex integrations with both upstream and downstream systems in order to pull data from each LMS.</li>


                <li class="paragraph py-1">In some cases, new learning initiatives needed to be launched as a distinct project involving vendor resources.</li>
                <li class="paragraph py-1">Sub-optimal experience for learners having to use multiple LMS.</li>
                <li class="paragraph py-1">Difficult to maintain multiple accounts across multiple LMS.</li>
                <li class="paragraph py-1">Data migration complexities as they were 50 million learning history rows per SAP across multiple LMS.</li>
                <li class="paragraph py-1">Issues in maintaining multiple job codes in assignment profile.</li>
            </ul>
        </div>
    </div>
    <div class="row border-b-2 py-12">
        <div class="col-span-12 md:col-span-2">
            <div>
                <p class="subHeading text-action ">SOLUTION</p>
                <div class="flex w-full">
                    <p class="border-b-2 border-action w-20 my-5"></p>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-10">
            <p class="paragraph pb-2">For a large transformation of this size, the involvement of stakeholders and validating requirements from time to time was essential. A blend of Waterfall and Agile approaches was followed. </p>
            <p class="paragraph">The project was executed in 4 phases: -</p>
            <ul class="custom-list">
                <li class="paragraph py-1"><strong>Discovery Phase: </strong>During this phase, workshops were conducted with identified stakeholders to determine the business needs and capture the learning processes followed by different business/ functions and data and content migration requirements.</li>
                <li class="paragraph py-1"><strong>Design Phase: </strong> Based on the output of the discovery phase, the team brainstormed with the Pfizer team to develop a configuration workbook (covering the system roles, organization structure, business domains, etc.), data mapping workbook and content inventory.</li>
                <li class="paragraph py-1"> <strong>Configuration Phase: </strong> Iterative approach was followed to execute the  phase: 
                    <ul class="custom-list">
                        <li class="paragraph py-1">Based on the signed workbook, the configuration was completed, requirements with the key stakeholders were validated and the feedback was captured.</li>
                        <li class="paragraph py-1">Data migration templates were developed, the configuration based on the feedback received in Iteration 1 was enhanced, and data migration workflows for data cleansing were created. A review with stakeholders to validate the requirements was conducted and feedback was captured.</li>
                        <li class="paragraph py-1">The configuration was finalised and the sample data were loaded to test the script. Based on the outcome, the data migration strategy for future loads was updated.</li>
                    </ul>
                </li>
                <li class="paragraph py-1"> <strong>User Acceptance Testing: </strong>For User acceptance testing, data was loaded into a validated environment. Business users validated functionalities, and the independent testing team validated the data. Post business approval data was loaded into the production environment.</li>
            </ul>
        </div>
    </div>

    <div class="row border-b-2 py-12">
        <div class="col-span-12 md:col-span-2">
            <div>
                <p class="subHeading text-action ">BENEFITS</p>
                <div class="flex w-full">
                    <p class="border-b-2 border-action w-20 my-5"></p>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-10">
            <p class="paragraph pb-2">The main aim of the One LMS project was to store all eLearning materials in one location, instead of asking the learner to go to multiple places to find the training. This also ensured a single learning portal for compliance and skills- based learning. It also reduced the risk of losing important data and made it easier to create specific eLearning courses.</p>
            <ul class="custom-list">
                <li class="paragraph py-1">Organized e-learning content in one location.</li>
                <li class="paragraph py-1">Easily track learners progress and performance.</li>
                <li class="paragraph py-1">Reduced cost for learning and
                development.</li>
                <li class="paragraph py-1"> <strong>User Acceptance Testing: </strong>For User acceptance testing, data was loaded into a validated environment. Business users validated functionalities, and the independent testing team validated the data. Post business approval data was loaded into the production environment.</li>
            </ul>
        </div>
    </div>

</div>
<?php get_footer(); ?>