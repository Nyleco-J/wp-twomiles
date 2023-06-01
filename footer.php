<?php wp_footer()?>

<?php
$homepage_id = get_option('page_on_front');
?>
<?php wp_footer(); ?>


<section class="footer bg-[#1f285b]">
        <div class="container">
            <div class="wrapper">
                <div class="footup pb-[3rem] border-b-[1px] border-light lg:grid lg:grid-cols-3 lg:gap-[5rem]">
                    <div class="inquiry text-white">
                        <h3 class="py-[2rem]"><?php echo get_field('footer_inquiry',$homepage_id); ?></h3>
                        <ul class="text-[1rem]">
                            <li><?php echo get_field('footer_address',$homepage_id); ?></li>
                            <li class="my-[.5rem]"><?php echo get_field('footer_number',$homepage_id); ?></li>
                            <li class="my-[.5rem]"><?php echo get_field('footer_info',$homepage_id); ?></li>
                            <li><?php echo get_field('footer_www',$homepage_id); ?></li>
                        </ul>
                    </div>
                    <div class="tag text-white">
                        <h3 class="py-[2rem]"><?php echo get_field('footer_tag',$homepage_id); ?></h3>
                        <ul class="text-[1rem] ">
                            <li class="p-[0px] leading-10 inline-block">
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a1',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a2',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a3',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a4',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a5',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a6',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""> <?php echo get_field('a7',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a8',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a9',$homepage_id); ?> </a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a10',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a11',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a12',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a13',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a14',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""> <?php echo get_field('a15',$homepage_id); ?> </a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a16',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a17',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a18',$homepage_id); ?></a>
                                <a class="p-[5px] inline-block mb-[.2rem] border-[1px] border-white" href=""><?php echo get_field('a19',$homepage_id); ?></a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="subs text-white">
                        <h3 class="pt-[2rem] pb-[.5rem] font-bold"><?php echo get_field('footer_sub',$homepage_id);?></h3>
                        <button class="bg-[#00b4da] text-white mb-[1rem] border-[2px] border-transparent py-[.6rem] px-[1.2rem] hover:bg-white hover:border-white hover:duration-[.5s] hover:ease-in-out lg:mb-0 hover:text-dark"><?php echo get_field('footer_sub_button',$homepage_id);?> </button>
                    </div>
                </div>
                <div class="footdown text-white pt-[5rem] pb-[4.99rem] text-center lg:flex lg:justify-around lg:pt-[1rem] lg:items-center">
                    <h3><?php echo get_field('footer_blog',$homepage_id); ?></h3>
                    <h4 class="mt-[5rem] mb-[3rem] text-[.8rem] font-semibold lg:mt-0 lg:mb-0"><?php echo get_field('footer_copyright',$homepage_id); ?></h4>
                    <button class="bg-[#00b4da]  text-[16px] text-white mb-[1rem] border-[2px] border-transparent py-[.7rem] px-[1.5rem] hover:bg-white hover:border-white hover:duration-[.5s] hover:ease-in-out lg:mb-0 hover:text-dark"><?php echo get_field('footer_go_to',$homepage_id); ?></button>
                </div>
                
            </div>
        </div>
</section>

    <script src="/dist/script.js"></script>
</body>
</html>