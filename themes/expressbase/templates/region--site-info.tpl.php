<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>

  <footer id="site-footer" class="<?php print $classes; ?>">
    <?php if ($content): ?>
      <div id="site-footer-content" class="col-lg-8 col-md-8">
        <?php print $content; ?>
      </div>
    <?php endif; ?>
    <?php $class = $content ? 'col-lg-4 col-md-4' : 'col-lg-12 col-md-12'; ?>
    <div id="cu-footer" class="<?php print $class; ?>">
        <p><a href="//www.ucdenver.edu"><img src="<?php print $base_url . '/' . drupal_get_path('theme', 'expressbase'); ?>/images/cudenver/CUDenver-<?php print $beboulder['color']; ?>.png" alt="University of Colorado Denver" class="beboulder"/></a></p>
                <p><strong><a href="http://www.ucdenver.edu">University of Colorado Denver</a></strong><br />&copy; Regents of the University of Colorado<br />
        <span class="required-links"><a href="http://www.colorado.edu/about/privacy-statement">Privacy</a> &bull; <a href="http://www.colorado.edu/about/legal-trademarks">Legal &amp; Trademarks</a></span></p>
    </div>
  </footer>
<div id="Contentplaceholder3_T9F43D663012_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
<div class="t-contentBlock">

    <div><div id="cuicContainer"><img alt="CU in the City logo" id="cuic" src="<?php print $base_url . '/' . drupal_get_path('theme', 'expressbase'); ?>/images/cudenver/cuic4.png" data-displaymode="Original" title="CU in the City"></div></div>    

</div>

</div>

  
