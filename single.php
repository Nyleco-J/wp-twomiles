<?php get_header(); ?>

<section class="single">
    <div class="container">
        <div class="single__wrapper">
             <h3 class="text-tmblue text-[1.3rem] mb-[1rem] font-bold pt-[1rem] lg:text-[1.5rem] "><?php the_title();?></h3>
        <div class="single__content">
        <small><?php echo get_the_post_thumbnail();?></small>
                <div class="single__text">
                    <ul>
                        <li class = "flex">
                            <p>Category:</p>
                            <span><?php the_category(); ?></span>
                        </li>
                        <li class = "flex">
                        <p>Tags:</p>
                        <span><?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                            foreach($posttags as $tag) {
                                echo $tag->name . ' '; 
                            }
                            }
                        ?>
                        </span>
                        </li>
                        <li class = "flex">
                            <p>Date:</p>
                            <span><?php echo get_the_date('M D Y'); ?></span>
                        </li>
                        <li class = "flex">
                            <p>Author:</p>
                            <span><?php echo the_author_meta('display_name', $post->post_author );?></span>
                        </li>
                    </ul>
                </div>    
                <div class="med flex">
                    <i class="fa-solid fa-square-envelope"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
                <div class="car__content">
                    <h2 class ="">Amortization of vehicles used for business" (Updated August 2022)</h2>
                    <p>“If I buy a car under the name of the company, can I pay all the expenses?”</p>
                </div>
                <div class="car__text ">
                    <div class="car__text-1 flex">
                        <p class ="max-w-[30rem]">This question is well received. In this regard, the actual cost of the vehicle will be divided between "personal use" and "business use" by the number of miles traveled. On the other hand, if purchased by an individual, in addition to calculating the actual expenses proportionally, it is also possible to multiply the miles traveled by a certain rate (62.5 cents per mile in 2022) as expenses.<br></p>
                        <div class="photo ">
                            <img class ="w-[15rem] h-[10rem]" src="<?php echo get_template_directory_uri(); ?>./img/cars.jpg" alt="">
                        </div>
                    </div>
                        <p>Expenses, when prorated for actual costs, include gas, repairs, insurance, and depreciation. In the case of actual cost settlement, we will calculate the deductible cost by multiplying the actual cost by the ratio of the business mileage (business mileage ÷ total mileage). Commuting is not included in business mileage.<br><br></p>
                        <p>As mentioned above, which is more profitable, mileage or actual cost adjustment, generally, the more expensive the car, the more actual cost calculation is possible, and the longer the mileage for business, the more mileage method. is obtained.<br><br></p>
                        <p>In the case of actual cost settlement, depreciation is also one of the points. This time, I will explain the depreciation cost of passenger cars.<br><br></p>
                        <p>Cars are generally depreciated over 5 years. For example, a $10,000 car could depreciate on average $2,000 per year. If it is a cheap car, it will be calculated as it is, but there are various restrictions on the depreciation of luxury cars. It also depends on the type of car. We will explain each type.</p>
                </div>
                       
                
                </div>
                
            </div>

        <div class="content_right">
                <div class="sidebar">
                    <div class="recent_post">
                    <h3>Recent Post</h3>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>Outline of the revision of the Japan-U.s.tax treaty</h1>
                        <p>On August 30, 2019, the instruments of ratification pertaining to the protocol amending the Japan-U.S. tax treaty were exchanged and entered into force. </p>
                    </a>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>depreciation of a car used for business</h1>
                        <p>This question is well received. In this regard, the actual cost of the vehicle will be divided between "personal use" and "business use" by the number of miles traveled.</p>
                    </a>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>Tax rate for 2022</h1>
                        <p>The income tax rate for 2022 is as follows. Filing is required federally and in the state of residence or income.</p>
                    </a>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>Regarding Section 965 of the Internal Revenue Code “Transition tax on territorial taxation”</h1>
                        <p>This tax reform was enacted on December 22, 2017. A tax rule that significantly broadens the scope of the tax provisions (Sub Part F Income) for certain income of traditional non-U.S. corporations. The gist is as follows. </p>
                    </a>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>What is transfer pricing?</h1>
                        <p>Part 1: What is the Transfer Pricing Issue?</p>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="categs">
        <div class="container">
            <div class="wrapper">
                <h2 class="text-[#1f285b] text-[30px] text-center mb-[1rem] font-bold lg:text-[3.3rem]"><?php echo get_field('category_title_h2');?></h2>
                <h3>you might like it too</h3>
                <div class="Ccards lg:grid lg:grid-cols-3 lg:gap-[1rem] ">
                <?php 

                    $args = array(
                    'post_type' => 'Category',
                    'posts_per_page' => 3,

                    );

                    $newQuery = new WP_Query($args)

                    ?>
                    <?php  

                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>
                    <div class="cards mb-[2rem] bg-nlight rounded-md shadow-2xl hover:scale-[105%] overflow-hidden lg:w-[25rem]">
                    <?php echo get_the_post_thumbnail();?>
                        <div class="ccontent p-[1rem]">
                            <h3 class="text-tmblue text-[1.3rem] mb-[1rem] font-bold pt-[1rem] lg:text-[1.5rem] "><?php the_title(); ?></h3>
                            <p class="text-gray-500 mb-7 lg:text-[1rem]"><?php echo get_field('category_p')?></p>
                            <a href="" class="font-bold text-dark"><?php echo get_field('category_button')?></a>
                        </div>   
                    </div>
                    <?php 
                    endwhile;
                        else:
                        echo "no available content";
                        endif;
                        wp_reset_postdata();

                    ?>
                </div>
                <a href="" class=" mt-[2.5rem] text-[1rem] text-[#00b4da] flex justify-center"><?php echo get_field('view_all');?></a>
            </div>
        </div>
</section>


               
<?php get_footer(); ?>