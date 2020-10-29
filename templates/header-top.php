<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center justify-content-between no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <?php echo nonprofit_theme_logo( 'navbar-brand' );?>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <?php
                                    if(has_nav_menu('primary-menu')) {
                                        wp_nav_menu(array(
                                            'menu'            => 'primary-menu',
                                            'theme_location'  => 'primary-menu',
                                            'menu_id'         => 'navigation',
                                            'container_class' => false,
                                            'container_id'    => false,
                                            'menu_class'      => false,
                                            'depth'           => 3,
                                            'walker'          => new nonprofit_bootstrap_navwalker()
                                        ));
                                    }
                                ?>
                            </nav>
                        </div>
                    </div>
                    <?php
                        if ( !empty( nonprofit_opt('nonprofit_header_donate_btn_txt') )) { 
                            $donate_btn_txt = nonprofit_opt('nonprofit_header_donate_btn_txt');
                            $donate_btn_url = nonprofit_opt('nonprofit_header_donate_btn_url');
                            ?>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="donate_now">
                                    <a href="<?php echo esc_url( $donate_btn_url )?>" class="boxed-btn"><?php echo esc_html( $donate_btn_txt )?></a>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->