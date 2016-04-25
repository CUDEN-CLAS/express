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
        
                <p><strong><a href="http://www.ucdenver.edu">University of Colorado Denver</a></strong><br />&copy; Regents of the University of Colorado<br />
        <span class="required-links"><a href="http://www.ucdenver.edu/policy/Pages/PrivacyPolicy.aspx">Privacy</a> &bull; <a href="http://www.ucdenver.edu/policy/Pages/LegalNotices.aspx">Legal &amp; Trademarks</a></span></p>
    </div>
  </footer>
