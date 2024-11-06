<style>
    .fade-container {
        transition: opacity 1s ease-in-out;
        opacity: 0;
    }

    .fade-container.active {
        opacity: 1;
    }
</style>

<?php
   $swip = [
        ["img" => "banner1.jpg"],
        ["img" => "banner2.jpg"],
        // ["img" => "banner3.png"],
    ];
?>
<div class="relative h-screen">
    <section x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, { loop: true, slidesPerView: 1, effect: 'fade', spaceBetween: 0, autoplay: { delay: 6000 }, preventClicks: false })">
        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                <?php foreach($swip as $i) { ?>
                    <div class="swiper-slide">
                        <div class="zoomBannerImage bg-cover bg-no-repeat" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/banner/<?php echo ($i['img']) ?>'); min-height:700px;">
                            <div class="bg-black w-full" style="min-height:700px; background-color:#0000005e;">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="absolute top-0 bottom-0 left-0 z-10 flex flex-col justify-center items-start fade-container w-full md:w-1/2">
            <div class="container">
                <p class="text-center uppercase md:text-left text-white paragraph" id="motto"></p>
                <p class="text-center uppercase font-semibold md:text-left text-action text-4xl md:text-4xl lg:text-5xl" id="digitization"></p>
                <div class="flex justify-center md:justify-start">
                    <p class="text-center uppercase md:text-left border-b-2 border-action my-5 w-24"></p>
                </div>
                <p class="text-center uppercase md:text-left text-white paragraph" id="partner"></p>
                <div class="flex justify-center md:justify-start">
                    <a href="/services" class="my-5 w-fit">
                        <button class="btn uppercase my-2 md:my-5">Explore Our Services</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    const texts = [
        { main: 'Our Motto', name: 'Work Smarter. Go for HR Digitization', text: 'Collaborating with Businesses for HR Solutions' },
        { main: 'TECHNOLOGY FOR PEOPLE', name: 'HR Digitization & Transformation', text: 'Be the most trusted and respected HR Digitization & Payroll Transformation Partner' },
    ];

    let index = 0;

    function changeText() {
        const text = texts[index];
        document.getElementById('motto').textContent = text.main;
        document.getElementById('digitization').textContent = text.name;
        document.getElementById('partner').textContent = text.text;

        index = (index + 1) % texts.length;
    }

    function startTextChange() {
        const fadeContainer = document.querySelector('.fade-container');
        
        fadeContainer.classList.remove('active');
        
        setTimeout(() => {
            changeText();
            fadeContainer.classList.add('active');
        }, 1000);

        setTimeout(startTextChange, 7000);
    }

    window.onload = function() {
        changeText();
        document.querySelector('.fade-container').classList.add('active');
        setTimeout(startTextChange, 7000);
    }
</script>