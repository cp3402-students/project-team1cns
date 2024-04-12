<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_For_U3A
 */

?>

    <footer id="colophon" class="site-footer">
  

        <div class="site-info">
            </a>
			<p>Contact Details</p>
			<a href="mailto:admin@u3team1.com">admin@u3ateam1.com</a>
			<span class="sep"> | </span>
			<a href="tel:+044449999">044449999</a>
			<p>Copyright © 2024 U3A (Team 1) All Rights Reserved.</p>
        </div><!-- .site-info -->
        
        <!-- Widget Areas -->
        <div class="footer-widgets">
            <div class="widget-area">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php endif; ?>
            </div>
            <div class="widget-area">
                <?php if (is_active_sidebar('footer-2')) : ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php endif; ?>
            </div>
            <div class="widget-area">
                <?php if (is_active_sidebar('footer-3')) : ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php endif; ?>
            </div>
        </div><!-- .footer-widgets -->
        
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
