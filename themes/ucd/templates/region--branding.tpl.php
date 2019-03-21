<?php
  global $base_url;
  $color = isset($logo_color) ? $logo_color : 'white';
  $logo = $base_url . '/' . drupal_get_path('theme', 'ucd') . '/images/cudenver/ucdlogo.png';

?>
<div class="brand-bar brand-bar-color-<?php print $color; ?> no-underline">
  <div class="container">
    <div class="brand-bar-container">
      <div class="brand-logo">
        <a href="http://www.colorado.edu"><img src="<?php print $logo; ?>" alt="University of Colorado Denver" /></a>
      </div>
      <div class="brand-links">
         </div>
      <div class="search-toggle-wrapper">
      <a href="http://myemail.ucdenver.edu/" class="search-toggle-link">Webmail <span style="padding:0px 5px 0px 5px">|</span></a> <a href="https://portal.prod.cu.edu/UCDAccessFedAuthLogin.html" class="search-toggle-link">UCD Access <span style="padding:0px 5px 0px 5px">|</span></a> <a href="http://www.ucdenver.edu/courselogin" class="search-toggle-link">Canvas <span style="padding:0px 5px 0px 5px">|</span></a> <a href="#quickLinks" class="search-toggle-quicklinks">Quick Links</a>
     
        <a href="https://www.colorado.edu/search" id="search-toggle" class="search-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="search" aria-label="Search"><i class="fa fa-search fa-fw"></i><span class="element-invisible">Search </span></a>
      </div>
    </div>
  </div>
</div>
