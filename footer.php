See the latest updates to the Gemini Apps Privacy HubOpens in a new window
Conversation with Gemini
profile picture
How to create this type of footer if I got the footer.php as 
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
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'theme-for-u3a' ) ); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf( esc_html__( 'Proudly powered by %s', 'theme-for-u3a' ), 'WordPress' );
                ?>
            </a>
			<p>Contact Details</p>
			<a href="mailto:admin@u3atownsville.com">admin@u3atownsville.com</a>
			<p>Copyright © 2024 U3A (Team 1) All Rights Reserved.</p>
            <span class="sep"> | </span>
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( 'Theme: %1$s by %2$s.', 'theme-for-u3a' ), 'theme-for-u3a', '<a href="http://underscores.me/">Underscores.me</a>' );
                ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

