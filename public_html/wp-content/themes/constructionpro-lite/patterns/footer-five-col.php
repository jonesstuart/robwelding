<?php

/**
 * Title: Footer with Columns 5
 * Slug: constructionpro-lite/footer-five-col
 * Categories: constructionpro-lite, footer
 */
$constructionpro_lite_url = trailingslashit(get_template_directory_uri());
$constructionpro_lite_images = array(
    $constructionpro_lite_url . 'assets/images/constructionpro-lite-logo.png',
);
?>
<!-- wp:group {"metadata":{"name":"Footer with Column 5"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"0","left":"0","bottom":"30px"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"heading-color","className":"constructionpro-lite-footer","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group constructionpro-lite-footer has-heading-color-background-color has-background" style="border-style:none;border-width:0px;padding-top:40px;padding-right:0;padding-bottom:30px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"40px"}}}} -->
            <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"right":"30px"}}}} -->
                <div class="wp-block-column" style="padding-right:30px;flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2217,"width":"44px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($constructionpro_lite_images[0]) ?>" alt="" class="wp-image-2217" style="width:44px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"top":"5px"}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="padding-top:5px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e('Construction', 'constructionpro-lite') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'constructionpro-lite') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"constructionpro-lite-footer-list"} -->
                <div class="wp-block-column constructionpro-lite-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:600;text-transform:none"><?php esc_html_e('Company', 'constructionpro-lite') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('About Us', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Policy', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Terms and Conditions', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Career', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Blog', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Contact Us', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"constructionpro-lite-footer-list"} -->
                <div class="wp-block-column constructionpro-lite-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:600;text-transform:none"><?php esc_html_e('Quick Link', 'constructionpro-lite') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('About Us', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Policy', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Terms and Conditions', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Career', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Blog', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Contact Us', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"constructionpro-lite-footer-list"} -->
                <div class="wp-block-column constructionpro-lite-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:600;text-transform:none"><?php esc_html_e('Services', 'constructionpro-lite') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('HVAC Services', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Pest Control', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Electrician', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Home Repair', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Gardening', 'constructionpro-lite') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"23%"} -->
                <div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","letterSpacing":"0px"}},"textColor":"light-color","fontSize":"normal"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-normal-font-size" style="font-style:normal;font-weight:600;letter-spacing:0px;text-transform:none"><?php esc_html_e('Contact Us', 'constructionpro-lite') ?></h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"0"},"padding":{"left":"5px"}}},"className":"constructionpro-lite-footer-list","layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group constructionpro-lite-footer-list" style="margin-bottom:0;padding-left:5px"><!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"small"} -->
                            <li class="has-small-font-size"><a href="#"><?php esc_html_e('14th Street, Caltech, New Jersey, Alabama', 'constructionpro-lite') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color","className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-light-color-color has-text-color has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"small"} -->
                            <li class="has-small-font-size"><?php esc_html_e('Monday - Friday8:00 a.m. - 5:00 p.m.', 'constructionpro-lite') ?></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"small"} -->
                            <li class="has-small-font-size"><a href="#"><?php esc_html_e('email@example.com', 'constructionpro-lite') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"small"} -->
                            <li class="has-small-font-size"><a href="#"><?php esc_html_e('+1 (012) 345-6780', 'constructionpro-lite') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"80px"},"padding":{"top":"0px","bottom":"30px"},"blockGap":"var:preset|spacing|60"},"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:80px;padding-top:0px;padding-bottom:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Follow Us', 'constructionpro-lite') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:social-links {"iconColor":"dark-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|30"},"margin":{"top":"16px","bottom":"0"}}}} -->
                    <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:16px;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"lineHeight":"1.5"}},"textColor":"meta-color","fontSize":"normal"} -->
                    <p class="has-meta-color-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | ConstructionPro Lite by TemplateHouse.', 'constructionpro-lite') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"constructionpro-lite-scrollto-top is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button constructionpro-lite-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'constructionpro-lite') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->