<?php get_header(); ?>


<section class="content">
    <div class="container">
        <div class="search__title">
            <h1>Search: <?php echo get_search_query()?></h1>
        </div>
        <div class="content__wrapper">
        <div class="content_left">
            <?php
            $searchItem = get_search_query();
            $current_tag = single_tag_title("",false);
            $category = get_the_category();

            $args = array(
                'post_type' => 'Posts','Category',
                'post_per_page' => -1,
                's' => $searchItem, $current_tag,
            );
            $newQuery = new WP_Query($args)
            ?>
            <?php if (!empty($searchItem)){?>

                <?php if($newQuery->have_posts()) : while ($newQuery->have_posts()) : $newQuery->the_post();?>

            <div class="context">
                <a href=""><h1><?php the_title()?> </h1></a>
                <p><?php echo get_field('post_p');?></p>
                <p><?php the_content()?><a href="">read more</a></p>
            </div>
            <?php
            
            endwhile;
            else:
            echo "no available post";
            endif;
                wp_reset_postdata();
            ?>
            <?php } else {
                echo "no available content yet";
            }

            ?>

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

<?php get_footer(); ?>