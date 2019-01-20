<?php /* Template Name: Portfolio Roma */ ?>

<link rel="stylesheet" href="/wp-content/themes/portfolio-roma/style_tpl.css">

<div class="wrapp-roma">

    <div class="top-menu">
        <h1 class="logo">CREATIVE <font>5</font></h1>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>

    <div class="wrapper">

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

        <div class="title_project">Projects</div>

        <div class="all_projects">
        <?php
            global $post;
            $myposts = get_posts( array('category' => 2) );
            foreach( $myposts as $post ){
                ?>
                <a href="<?php echo $post->guid; ?><" class="item">
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

        <div class="title_project">Contacts</div>


        <div class="personal_info">
            <div class="personal">
            <?php
                global $post;
                $myposts = get_posts( array('category' => 12) );

                foreach( $myposts as $post ){
                    ?>
                    
                    <div class="item">
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
                    
                    <div class="item">
                        <div class="description"><?php echo $post->post_content; ?></div>
                    </div>
                    <?php
                }
                wp_reset_postdata(); 
            ?>
            </div>
        </div>

        <div class="copy">
            © Creative5 2019
        </div>

    </div>



</div>


<script>
    hash = document.querySelectorAll(".hash");
    for(let i = 0; i < hash.length; i++) {
        let text = hash[0].innerHTML;
        hash[i].innerHTML = text.split("#").join("<font>#</font>");
    }
</script>