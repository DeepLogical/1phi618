<?php
    $faq=[
        ["question"=>"What services do you offer?", "answer"=> "We offer a comprehensive range of interior design and construction services, including conceptual design, space planning, furniture selection, remodeling, and project management."],
        ["question"=>"How do I get started with your company?", "answer"=> "Getting started is easy! Simply reach out to us via phone or email to schedule a consultation. During this initial meeting, we'll discuss your project goals, budget, and timeline."],
        ["question"=>"What sets your company apart from others?", "answer"=> "Our team is dedicated to delivering exceptional design solutions tailored to each client's unique vision and needs. We prioritize communication, transparency, and quality craftsmanship to ensure a seamless and satisfying experience."],
        ["question"=>"How long does a typical project take?", "answer"=> "Project timelines vary depending on the scope and complexity of the work. During our initial consultation, we'll provide you with a detailed timeline based on your specific project requirements."],
        ["question"=>"Do you handle all aspects of the construction process?", "answer"=> "Yes, we offer full-service solutions from design conceptualization to construction completion. Our experienced team manages every aspect of the project, ensuring efficiency and quality at every stage."],
        ["question"=>"What is the payment structure like?", "answer"=> "Our payment structure is tailored to each project. We'll provide you with a detailed payment schedule before beginning any work."],
        ["question"=>"Do you provide post-project support?", "answer"=> "Yes, we stand behind our work and offer post-project support to address any questions or concerns you may have after the completion of your project. Your satisfaction is our top priority."],
        ["question"=>"Can you describe the personalized design experience your company offers for discerning clients seeking luxury interiors?", "answer"=> "Our company prides itself on delivering a truly bespoke design experience tailored to the individual tastes and preferences of our esteemed clients. From the initial consultation to the final reveal, our team of experienced designers will work closely with you to curate a luxurious interior that reflects your unique style and vision. With a keen eye for detail and a commitment to excellence, we ensure that every aspect of your project exudes sophistication and refinement."],
        ["question"=>"Do you provide exclusive access to high-end materials and bespoke furnishings to elevate the elegance of our interior spaces?
        ", "answer"=> "Absolutely. We collaborate with a curated selection of premier suppliers and artisans to offer our clients access to the finest materials and bespoke furnishings available. Whether you're seeking rare marble for your countertops, handcrafted furniture pieces, or custom-made textiles, we have the resources and expertise to transform your space into a haven of luxury and indulgence."],
        ["question"=>"Can you design and provide architectural drawings while supervising the project, allowing us to undertake the construction ourselves under your guidance?", "answer"=> "Yes, we offer comprehensive design and architectural drawing services, along with project supervision, to empower clients who wish to undertake the construction themselves. Our team will work closely with you to create detailed plans and provide guidance throughout the construction process, ensuring that your vision is realized to the highest standards of quality and craftsmanship."],
    ];
?>
<div class="row py-28" x-data="{ openTab: null }" @click.away="openTab = null" >
    <div class="col-span-12 md:col-span-6"  data-aos="fade-up-right">
        <div class="flex flex-col justify-center h-full">
            <h2 class=" uppercase text-5xl xl:text-7xl head_font text-white text-center md:text-left">Frequently <br/>Asked <br/> Questions</h2>
        </div>
    </div>
    <div class="col-span-12 md:col-span-6 px-3 md:px-0" data-aos="fade-up-left">
        <?php foreach($faq as $key => $i){?>
            <div class="flex py-4 border-b-[1px] border-b-white" @click="openTab !== <?php echo $key ?> ? openTab = <?php echo $key ?> : openTab = null">
                <div class="w-full py-3">
                    <h2 x-data="{ tab : 'tab1' }" class=" font-bold cursor-pointer font-nunito md:text-xl text-white line-h"><?php echo($i['question']);?></h2>
                    <div x-show="openTab == <?php echo $key ?>">
                        <p @click="tab = 'tab1'" class=" text-white font-nunito line-h pt-3"><?php echo($i['answer'])?></p>
                    </div>
                </div>
                <div class="flex flex-col justify-center item-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/plus.svg" alt="plus-minus" class="w-6 md:w-8 px-1 rounded-md" style="margin:0 auto;" x-show="openTab !== <?php echo $key ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/minus.svg" alt="plus-minus" class="w-6 md:w-8 py-2 px-1 rounded-md" style="margin:0 auto;" x-show="openTab == <?php echo $key ?>">
                </div>
            </div>  
        <?php } ?>
    </div>
</div>