<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Magnus
 */
?>

	</section><!-- #content -->

  <?php
    $theme_options = get_option('my_theme_settings');
    $company_address = $theme_options['company_address_group'];
  ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__top wrapper">
      <div class="col-a span3">
        <div class="company-hours">
          <h6>Opening Hours</h6>
          <div class="content">
            <?=$theme_options['company_hours'] ?>
          </div>
          <h6>Everyday</h6>
        </div>
      </div>

      <div class="col-b span6">
        <div class="top">
          <div class="company-address">
            <div class="content">
              <?=$company_address['company_address_line1'] ?>,
              <?=$company_address['company_address_city'] ?>,
              <?=$company_address['company_address_state'] ?>
              <?=$company_address['company_address_zip'] ?>
            </div>
          </div>
        </div>
        <div class="bottom clear">
          <div class="span6 col-a">
            <div class="company-phone">
              <h6>Tel</h6>
              <div class="content">
                <?=$theme_options['company_phone'] ?>
              </div>
            </div>
          </div>
          <div class="span6 last col-b">
            <div class="company-social">
              <h6>Find Us</h6>
              <div class="content">
                <ul class="social">
                  <li><a href="<?=$theme_options['social_facebook']?>" rel="external" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="<?=$theme_options['social_twitter']?>" rel="external" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="<?=$theme_options['social_instagram']?>" rel="external" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="<?=$theme_options['social_email']?>" rel="external" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-c span3">

      </div>
    </div>
    <div class="site-footer__btm wrapper align-center">
      <div class="copyright">
        &copy; <?=$theme_options['copyright'] ?>
      </div>
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
