<?php
$project=[
    ["total"=>"45", "name"=>"consultants"],
    ["total"=>"25", "name"=>"consulting <br/>engagements"],
    ["total"=>"10", "name"=>"client <br/>engagements"],
];
?>
<div id="counter-section " class=" py-3">
    <div class="row">
        <?php foreach($project as $i) { ?>
            <div class="col-span-12 md:col-span-4">
                <div class=" flex flex-col items-center md:items-start justify-center md:justify-start">
                    <p class="text-2xl text-center md:text-left">
                    <span class=" total-counter text-action text-4xl lg:text-6xl" style="font-weight: 500; font-family:Arial;" data-total="<?php echo $i['total']; ?>">0 </span><span class="text-action text-3xl md:text-4xl lg:text-6xl">+</span>
                    </p>
                    <p class="paragraph text-center md:text-left pt-2"><?php echo($i['name']);?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll(".total-counter");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const endCount = parseInt(target.getAttribute("data-total"));
                    const duration = 3000; // 3 seconds
                    let startCount = 0;

                    const animate = () => {
                        const startTime = Date.now();
                        const updateCount = () => {
                            const currentTime = Date.now() - startTime;
                            const currentCount = Math.round(startCount + (endCount - startCount) * (currentTime / duration));
                            target.innerText = currentCount;
                            if (currentTime < duration) {
                                requestAnimationFrame(updateCount);
                            } else {
                                target.innerText = endCount;
                            }
                        };
                        requestAnimationFrame(updateCount);
                    };

                    animate();
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>
