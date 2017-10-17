<div id="page-wrapper" class="page-wrapper">
  <div id="page" class="<?php print $classes; ?>">
    <?php if (!empty($page['alerts'])): ?>
    <div id="alerts-wide-wrapper" class="section-wrapper">
      <div id="alerts" class="clearfix">
        <?php print render($page['alerts']); ?>
      </div>
    </div>
    <?php endif; ?>
    <div id="search" tabindex="-1">
      <div class="element-max-width search-wrapper">
        <?php
          if (!empty($page['search_box'])) {
            print render($page['search_box']);
          }
        ?>
      </div>
    </div>
    <div id="header-wrapper" class="section-wrapper header-wrapper">
      <header class="header container-max clearfix" id="header" role="banner">
        <div id="branding" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <?php print render($page['branding']); ?>
          <div class="mobile-menu-toggle">
            <button id="toggle" aria-haspopup="true" aria-expanded="false" aria-controls="mobile-menu" aria-label="Navigation"><span class="mobile-menu-text">Menu </span><i class="fa fa-reorder fa-fw"></i></button> <div class="clearfix"></div> <a href="http://www.google.com" class="search-toggle-quicklinks-mobile" style="padding:15px 0px 0px 0px">Quick Links</a>
          </div>
        </div>
        <div id="header-content" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 clearfix">
          <?php
          $options = variable_get('cu_search_options', array('this' => 'this'));
          foreach ($options as $key => $option) {
            if (!$option) {
              unset($options[$key]);
            }
          }
            if (!empty($options) && !empty($page['search_box'])):
          ?>
            <a href="#search" class="search-toggle"><i class="fa fa-search"></i><span class="element-invisible">Search</span></a> <a href="http://www.google.com" class="search-toggle-quicklinks" style="padding:15px 0px 0px 0px">Quick Links</a> <a href="http://www.google.com" class="search-toggle-link" style="padding:15px 0px 0px 0px">Test <span style="padding:0px 5px 0px 5px">|</span></a>
          <?php endif; ?>
        </div>
      </header>
    </div>
    <div id="navigation-wrapper" class="navigation-wrapper">
      <div id="orgname-wrapper" class="clearfix"><div class="orgname"><a href="http://clas-test.ucdenver.pvt/clas-dev/" title="Home" rel="home" class="header__logo"><h2><?php print $site_name; ?></h2></a></div>
      </div>
      <?php if (theme_get_setting('use_action_menu') == FALSE): ?>
      <div id="secondary-menu-wrapper" class="section-wrapper">
        <div id="secondary-navigation" class="container-max">
        
          <div class="secondary-nav-inner col-lg-12 col-md-12 clearfix">
            <?php print render($page['secondary_menu']); ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <div id="main-menu-wrapper" class="section-wrapper">
        <div id="navigation" class="container-max">
          <div class="nav-inner col-lg-12 col-md-12 clearfix">
            <?php print render($page['menu']); ?>
          </div>
        </div>
      </div>
    </div>
    <div id="mobile-navigation-wrapper">


      <div id="mobile-navigation">
        <div id="mobile-search">
          <?php
            if (!empty($page['search_box'])) {
              print render($page['search_box']);
            }
          ?>
        </div>
        <nav id="mobile-menu" role="navigation">
        <?php if (isset($mobile_menu) && !empty($mobile_menu)): ?>
          <?php print theme('links', array('links' => $mobile_menu, 'attributes' => array('id' => 'main-menu-mobile', 'class' => array('links', 'clearfix')), 'heading' => array('text' => t('Mobile menu'),'level' => 'h2','class' => array('element-invisible')))); ?>

        <?php else: ?>
          <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu-mobile', 'class' => array('links', 'clearfix')), 'heading' => array('text' => t('Mobile menu'),'level' => 'h2','class' => array('element-invisible')))); ?>
          <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu-mobile', 'class' => array('links', 'clearfix')), )); ?>
          <?php if (variable_get('menu_main_links_source', '') != variable_get('menu_footer_links_source', '')): ?>
            <?php print theme('links', array('links' => $footer_menu, 'attributes' => array('id' => 'footer-menu-mobile', 'class' => array('links', 'clearfix')), )); ?>
          <?php endif; ?>
        <?php endif; ?>
        </nav>
      </div>
    </div>
    <div class="express-messages">
      <?php if ($messages): ?>
        <div class="express-message">
          <div class="messages1">
            <?php print $messages; ?>
          </div>
        </div>
      <?php endif; ?>
      <?php if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])): ?>
        <div class="express-message">
          <div class="tabs"><?php print render($tabs); ?></div>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class=" express-message"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <div class="express-message">
          <ul class="action-links"><?php print render($action_links); ?></ul>
        </div>
      <?php endif; ?>
    </div>
    <div class="top-content-wrapper"><div class="top-content">
      <?php if (!empty($page['intro'])): ?>
      <div id="intro-wide-wrapper" class="section-wrapper">
        <?php print render($page['intro']); ?>
      </div>
      <?php endif; ?>

      <?php if (!empty($page['slider'])): ?>
      <div id="slider-wrapper" class="section-wrapper slider-wrapper <?php if (!empty($page['slider_sidebar'])) { print 'has-slider-sidebar'; } ?>">
        <div id="slider" class="clearfix element-max-width-padding">
          <?php print render($page['slider']); ?>
        </div>
      </div>
      <?php endif; ?>
      <?php if (isset($title_image) && !drupal_is_front_page()): ?>
        <?php
          $vars = array(
            'title_image_width' => $title_image_width,
            'title_image_wrapper_class' => $title_image_wrapper_class,
            'title_image' => $title_image,
          );
          print theme('page_title_image', $vars);
        ?>
      <?php else: ?>
        <div id="page-title-wrapper" class="page-title-wrapper section-wrapper <?php if (isset($title_hidden)) { print 'element-invisible'; } ?>">
          <div class="page-title-inner element-max-width-padding">
            <a id="main-content"></a>
            <h1 id="page-title"><?php print drupal_get_title(); ?></h1>
            <?php print $breadcrumb; ?>
          </div>
        </div>
        <div class="clear"></div>
      <?php endif; ?>

      <div id="content-wrapper" class="section-wrapper content-wrapper">
        <div id="main" class="clearfix">
          <?php if (!empty($page['post_title_wide'])): ?>
            <div id="post-title-wide-wrapper" class="section-wrapper">
              <?php print render($page['post_title_wide']); ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($page['post_title'])): ?>
            <div id="post-title-wrapper" class="section-wrapper container-max">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php print render($page['post_title']); ?>
              </div>
            </div>
          <?php endif; ?>

          <div id="main-content-wrapper" class="container-max">

            <div id="content" class="<?php print $main_content_classes; ?>" role="main">
              <?php print render($page['content']); ?>
              <?php print $feed_icons; ?>
            </div>


            <?php
              // Render the sidebars to see if there's anything in them.
              $sidebar_first  = render($page['sidebar_first']);
              $sidebar_second = render($page['sidebar_second']);
            ?>

            <?php
              // Order the sidebars depending on which is the primary sidebar
              if ($sidebar_first || $sidebar_second): ?>
              <aside class="sidebars">
                <?php if (theme_get_setting('primary_sidebar') == 'primary-sidebar-first'): ?>
                  <div class="sidebar-first sidebar <?php print $sidebar_first_classes; ?>">
                    <?php print $sidebar_first; ?>
                  </div>
                  <div class="sidebar-second sidebar <?php print $sidebar_second_classes; ?>">
                    <?php print $sidebar_second; ?>
                  </div>
                <?php else: ?>
                  <div class="sidebar-second sidebar <?php print $sidebar_second_classes; ?>">
                    <?php print $sidebar_second; ?>
                  </div>
                  <div class="sidebar-first sidebar <?php print $sidebar_first_classes; ?>">
                    <?php print $sidebar_first; ?>
                  </div>
                <?php endif; ?>
              </aside>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <?php if (!empty($page['feature_layout'])): ?>
        <div id="feature-layout-wrapper" class="section-wrapper feature-layout-wrapper">
          <?php print render($page['feature_layout']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($page['wide_2'])): ?>
        <div id="post-wide-wrapper" class="section-wrapper post-wide-wrapper">
          <?php print render($page['wide_2']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($page['after_content'])): ?>
        <div id="after-content-wrapper" class="section-wrapper after-content-wrapper">
          <div id="after-content" class="container-max">
            <?php print render($page['after_content']); ?>
          </div>
        </div>
      <?php endif; ?>
    </div></div>
    <?php if (!empty($page['lower'])): ?>
      <div id="after-content2-wrapper" class="section-wrapper after-content2-wrapper">
        <div id="after-content-2" class="container-max">
          <?php print render($page['lower']); ?>
        </div>
      </div>
    <?php endif; ?>


    <div id="footer-section" class="footer-section">
      <?php if (!empty($page['footer'])): ?>
        <div id="footer-wrapper" class="section-wrapper footer-wrapper">
          <div id="footer" class="footer container-max">
            <div class="col-lg-12 col-md-12">
              <div class="row">
                <?php print render($page['footer']); ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if (isset($footer_menu) && !empty($footer_menu)): ?>
        <div id="footer-menu-wrapper" class="section-wrapper footer-menu-wrapper <?php print $footer_menu_color; ?>">
          <div id="footer-navigation" class="container-max">
            <div class="nav-inner col-lg-12 col-md-12 clearfix">
              <nav id="footer-menu">
              <?php print theme('links__footer_menu', array('links' => $footer_menu, 'attributes' => array('id' => 'footer-menu-links', 'class' => array('links', 'inline-menu', 'clearfix')), 'heading' => array('text' => t('Footer menu'),'level' => 'h2','class' => array('element-invisible')))); ?>
              </nav>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <div id="site-info-wrapper" class="section-wrapper site-info-wrapper">
        <div id="site-info" class="container-max">
          <?php print render($page['site_info']); ?>
        </div>
      </div>
    </div>
    <div class="t-contentBlock">
  

    <div><div class="t-footer" role="contentinfo" style="color:#aaa; text-align:center; border-color: #cfb87c; background-color: #000; border-width: 1px 0 0; border-style: solid; padding: 30px;">
<div class="footerContainer" style="margin:auto; max-width:1160px">
<ul style="list-style:none; margin:0 0 0 0px; padding:0" role="list" aria-label="footer navigation">
    <li style="float:left; margin:0 26px" role="listitem"><a href="http://www.ucdenver.edu/about-us/contact/Pages/default.aspx">Contact Us</a></li>
    <li style="float:left; margin:0 26px" role="listitem"><a href="http://www.ucdenver.edu/websitefeedback/Pages/form.aspx">Website Feedback</a></li>
    <li style="float:left; margin:0 26px" role="listitem"><a href="https://www.cu.edu/">CU System</a></li>
    <li style="float:left; margin:0 26px" role="listitem"><a href="http://www.ucdenver.edu/policy/Pages/PrivacyPolicy.aspx">Privacy Policy</a></li>
    <li style="float:left; margin:0 26px" role="listitem"><a href="http://www.ucdenver.edu/policy/Pages/LegalNotices.aspx">Legal Notices</a></li>
    <li style="float:left; margin:0 26px" role="listitem"><a href="https://www.hlcommission.org/component/directory/?Action=ShowBasic&amp;Itemid=&amp;instid=1040">Accreditation</a></li>
    <li style="float:left; margin:0 26px" role="listitem"><a href="http://www.ucdenver.edu/about/departments/HR/jobsoncampus/Pages/index.aspx">Employment</a></li>
    <li style="float:left; margin:0 26px" role="listitem"><a href="https://giving.cu.edu/fund-search?field_campuses=1100"> Give Now</a></li>
</ul>
<div class="clearfix">&nbsp;</div>
<hr style="margin:7px 0; border-top:1px solid #555">
<div class="u-foottextwrap">
<p style="margin-bottom:0; font-size:14px">© 2017&nbsp;<a href="http://www.cu.edu/regents/"><strong> The Regents of the University of Colorado</strong></a>, a body corporate. All rights reserved.</p>
<p style="margin-bottom:0; font-size:14px"> Accredited by the <a href="https://www.hlcommission.org/component/directory/?Action=ShowBasic&amp;Itemid=&amp;instid=1040"> <strong> Higher Learning Commission</strong></a>. All trademarks are registered property of the University. Used by permission only.</p>
</div>
</div>
</div></div>    

</div>
    
  </div>
</div>
<?php print render($page['bottom']); ?>
