<?php

/**
 * Title: Services Section
 * Slug: constructionpro-lite/services-section
 * Categories: constructionpro-lite
 */
$constructionpro_lite_url = trailingslashit(get_template_directory_uri());
$constructionpro_lite_images = array(
    $constructionpro_lite_url . 'assets/images/service_1.png',
    $constructionpro_lite_url . 'assets/images/service_2.png',
    $constructionpro_lite_url . 'assets/images/service_3.png',
    $constructionpro_lite_url . 'assets/images/service_4.png',
    $constructionpro_lite_url . 'assets/images/service_5.png',
    $constructionpro_lite_url . 'assets/images/service_6.png',
);
?>
<!-- wp:group {"metadata":{"name":"Our Services"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--30);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"constructionpro-lite-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group constructionpro-lite-fade-up"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color"><?php esc_html_e('Our Services', 'constructionpro-lite') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px"}}}} -->
        <p class="has-text-align-center" style="margin-top:12px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'constructionpro-lite') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"35px"}}},"className":"constructionpro-lite-fade-up"} -->
    <div class="wp-block-columns constructionpro-lite-fade-up" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"40px","bottom":"40px","right":"40px","left":"40px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-constructionpro-lite-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-constructionpro-lite-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2022,"width":"113px","height":"113px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"width":"0px","style":"none","radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($constructionpro_lite_images[0]) ?>" alt="" class="wp-image-2022" style="border-style:none;border-width:0px;border-radius:50%;object-fit:cover;width:113px;height:113px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('General Repairs', 'constructionpro-lite') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'constructionpro-lite') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"5px","width":"1px"}},"borderColor":"meta-color","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-meta-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'constructionpro-lite') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"40px","bottom":"40px","right":"40px","left":"40px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-constructionpro-lite-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-constructionpro-lite-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2022,"width":"113px","height":"113px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"width":"0px","style":"none","radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($constructionpro_lite_images[1]) ?>" alt="" class="wp-image-2022" style="border-style:none;border-width:0px;border-radius:50%;object-fit:cover;width:113px;height:113px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Painting &amp; Drywall', 'constructionpro-lite') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'constructionpro-lite') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"5px","width":"1px"}},"borderColor":"meta-color","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-meta-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'constructionpro-lite') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"40px","bottom":"40px","right":"40px","left":"40px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-constructionpro-lite-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-constructionpro-lite-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2022,"width":"113px","height":"113px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"width":"0px","style":"none","radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($constructionpro_lite_images[2]) ?>" alt="" class="wp-image-2022" style="border-style:none;border-width:0px;border-radius:50%;object-fit:cover;width:113px;height:113px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Carpentry', 'constructionpro-lite') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'constructionpro-lite') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"5px","width":"1px"}},"borderColor":"meta-color","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-meta-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'constructionpro-lite') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"35px"},"blockGap":{"left":"35px"}}},"className":"constructionpro-lite-fade-up"} -->
    <div class="wp-block-columns constructionpro-lite-fade-up" style="margin-top:35px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"40px","bottom":"40px","right":"40px","left":"40px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-constructionpro-lite-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-constructionpro-lite-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2022,"width":"113px","height":"113px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"width":"0px","style":"none","radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($constructionpro_lite_images[3]) ?>" alt="" class="wp-image-2022" style="border-style:none;border-width:0px;border-radius:50%;object-fit:cover;width:113px;height:113px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('General Repairs', 'constructionpro-lite') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'constructionpro-lite') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"5px","width":"1px"}},"borderColor":"meta-color","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-meta-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'constructionpro-lite') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"40px","bottom":"40px","right":"40px","left":"40px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-constructionpro-lite-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-constructionpro-lite-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2022,"width":"113px","height":"113px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"width":"0px","style":"none","radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($constructionpro_lite_images[4]) ?>" alt="" class="wp-image-2022" style="border-style:none;border-width:0px;border-radius:50%;object-fit:cover;width:113px;height:113px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Painting &amp; Drywall', 'constructionpro-lite') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'constructionpro-lite') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"5px","width":"1px"}},"borderColor":"meta-color","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-meta-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'constructionpro-lite') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"40px","bottom":"40px","right":"40px","left":"40px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-constructionpro-lite-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-constructionpro-lite-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2022,"width":"113px","height":"113px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"width":"0px","style":"none","radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($constructionpro_lite_images[5]) ?>" alt="" class="wp-image-2022" style="border-style:none;border-width:0px;border-radius:50%;object-fit:cover;width:113px;height:113px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Carpentry', 'constructionpro-lite') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'constructionpro-lite') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"5px","width":"1px"}},"borderColor":"meta-color","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-meta-color-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'constructionpro-lite') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"60px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:60px"><!-- wp:button {"textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"20px","bottom":"20px"}},"border":{"radius":"7px"},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button" style="border-radius:7px;padding-top:20px;padding-right:var(--wp--preset--spacing--60);padding-bottom:20px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Explore All Services', 'constructionpro-lite') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->