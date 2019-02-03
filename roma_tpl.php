<?php /* Template Name: Portfolio Roma */ ?>
<?php get_header(); ?>


        <div class="main-block">
        <?php
            global $post;
            $myposts = get_posts( array( 'category' => 4 ) );
            foreach( $myposts as $post ){
                ?>
                <div class="left">
                    <img src="<?php echo get_field("image", $post->ID);?>" alt="">
                </div>
                <div class="right">
                    <div class="inner">
                        <div class="description"><?php echo $post->post_content; ?></div>
                        <div class="title"><?php echo $post->post_title; ?></div>
                        <div class="hash"><?php echo $post->post_excerpt; ?></div>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata(); 
        ?>
        </div>

        <div class="title_project anime" id="all_projects">Projects</div>

        <div class="all_projects" >
        <?php
            global $post;
            $myposts = get_posts( array(
                'category' => 2,                
                'numberposts' => 100,
                'order'     => 'ASC',
                'meta_key' => 'sort',
                'orderby'   => 'meta_value_num'
                ) );
            foreach( $myposts as $post ){
                ?>
                <a href="<?php echo $post->guid; ?>" class="item anime">
                    <div class="lazy_img">
                        <img src="<?php echo get_field("image", $post->ID);?>" alt="">
                    </div>
                    <h4 class="title"><?php echo $post->post_title; ?></h4>
                    <div class="hash"><?php echo $post->post_excerpt; ?></div>
                </a>
                <?php
            }
            wp_reset_postdata(); 
        ?>
        </div>

        <div class="title_project anime">Contacts</div>


        <div class="personal_info" id="personal_info">
            <div class="personal">
            <?php
                global $post;
                $myposts = get_posts( array('category' => 12) );

                foreach( $myposts as $post ){
                    ?>
                    
                    <div class="item anime">
                        <div class="lazy_img">
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?php echo $post->post_title; ?>">
                        </div>
                        <h3 class="title"><?php echo $post->post_title; ?></h4>
                        <div class="description"><?php echo $post->post_excerpt; ?></div>
                    </div>
                    <?php
                }
                wp_reset_postdata(); 
            ?>
            </div>

            <div class="all_info">
            <?php
                global $post;
                $myposts = get_posts( array('category' => 13) );

                foreach( $myposts as $post ){
                    ?>
                    
                    <div class="item anime">
                        <div class="description"><?php echo $post->post_content; ?></div>
                    </div>
                    <?php
                }
                wp_reset_postdata(); 
            ?>
            </div>
        </div>
        <?php get_footer(); ?>