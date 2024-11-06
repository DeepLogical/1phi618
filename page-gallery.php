<?php get_header(); ?>
    <section class=" inline-block w-full">
    <!-- style="background: url(<?php echo get_template_directory_uri(); ?>/images/static/banner.jpg) no-repeat bottom right; background-size:cover" -->
        <?php
            $items = [
                [ "check" => "class-1", "text" => "Category 1" ],
                [ "check" => "class-2", "text" => "Category 2" ],
                [ "check" => "class-3", "text" => "Category 3" ],
            ];

            $data = [
                [ "check" => "class-1", "img" => "1.jpg", "thumb" => "1.jpg", "text" => "Lorem ipsum dolor sit amet." ],
                [ "check" => "class-1", "img" => "2.jpg", "thumb" => "2.jpg", "text" => "Lorem ipsum dolor sit amet." ],
                [ "check" => "class-1 class-3", "img" => "3.jpg", "thumb" => "3.jpg", "text" => "Lorem ipsum dolor sit amet." ],
                [ "check" => "class-1 class-3", "img" => "4.jpg", "thumb" => "4.jpg", "text" => "Lorem ipsum dolor sit amet." ],
                [ "check" => "class-2 class-3", "img" => "5.jpg", "thumb" => "5.jpg", "text" => "Lorem ipsum dolor sit amet." ],
                [ "check" => "class-2 class-3", "img" => "6.jpg", "thumb" => "6.jpg", "text" => "Lorem ipsum dolor sit amet." ],
                [ "check" => "class-2", "img" => "7.jpg", "thumb" => "7.jpg", "text" => "Lorem ipsum dolor sit amet." ],
                [ "check" => "class-2", "img" => "8.jpg", "thumb" => "8.jpg", "text" => "Lorem ipsum dolor sit amet." ],
                // [ "check" => "class-3", "img" => "9.jpg", "thumb" => "9.jpg", "text" => "Lorem ipsum dolor sit amet." ],
            ];
        ?>
        <div style="min-height:300px;" class="flex flex-col items-center justify-center bg-primary pb-12">
            <h2 class="pt-28 text-center head text-white">Gallery</h2>
            <!-- <p class="text-white text-xl py-8 head_font">Successful projects,happy clients and great results</p> -->
        </div>
        <div class="container ">
            <div class="flex flex-wrap items-center justify-center pt-3" id="filters">
                <button type="button" class="btn-isotop md:p-5" data-filter="*">All</button>
                <?php foreach($items as $i){ ?>
                    <div class="md:p-3">
                        <button type="button" class="btn-isotop px-2" data-filter=".<?php echo $i['check'] ?>"><?php echo $i['text'] ?></button>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="py-20" style="background: url(<?php echo get_template_directory_uri(); ?>/images/static/banner.jpg) no-repeat bottom right; background-size:cover">
            <div class=" container portfolio-grid">
                <ul id="da-thumbs" class="da-thumbs isotope lightbox-gallery">
                    <?php foreach($data as $i){ ?>
                        
                            <li data-category="<?php echo $i['check'] ?>" class="<?php echo $i['check'] ?>">
                                <a class="image-popup-vertical-fit " href="<?php echo get_template_directory_uri(); ?>/images/static/services/<?php echo $i['img'] ?>" class=""> 
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/static/services/<?php echo $i['img'] ?>" alt=""/>
                                    <div class="portfolio-detail-overlay">
                                        <div class="middle-align-wrap">
                                            <div class="middle-align-cell">
                                                <h4><?php echo $i['text'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>

<?php get_footer(); ?>