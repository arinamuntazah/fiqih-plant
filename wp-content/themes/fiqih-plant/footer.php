<?php
/**
 * The template for displaying the footer
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-widgets" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <!-- Widget Area 1: About -->
                <div class="footer-branding">
                    <h3 style="color: white; margin-bottom: 1rem;">Fiqih Plant</h3>
                    <p>Hijaukan ruang Anda bersama koleksi tanaman hias dan produktif terbaik dari kami. Tumbuh bersama alam.</p>
                </div>

                <!-- Widget Area 2: Links -->
                <div class="footer-links">
                    <h4 style="color: white; margin-bottom: 1rem;">Quick Links</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="/shop">Belanja</a></li>
                        <li><a href="/about">Tentang Kami</a></li>
                        <li><a href="/contact">Kontak</a></li>
                        <li><a href="/blog">Blog Edukasi</a></li>
                    </ul>
                </div>

                <!-- Widget Area 3: Contact & Social -->
                <div class="footer-contact">
                    <h4 style="color: white; margin-bottom: 1rem;">Hubungi Kami</h4>
                    <p>WhatsApp: <?php echo get_theme_mod( 'fiqih_plant_phone', '+62 812 3456 7890' ); ?></p>
                    <p>Email: <?php echo get_theme_mod( 'fiqih_plant_email', 'hello@fiqihplant.com' ); ?></p>
                    <div class="social-links" style="margin-top: 1.5rem;">
                        <a href="<?php echo esc_url( get_theme_mod( 'fiqih_plant_ig', '#' ) ); ?>" style="margin-right: 10px;">Instagram</a>
                        <a href="#" style="margin-right: 10px;">Facebook</a>
                        <a href="#">TikTok</a>
                    </div>
                </div>
            </div>

            <div class="site-info" style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem; text-align: center;">
                <p>&copy; <?php echo date( 'Y' ); ?> Fiqih Plant. All rights reserved.</p>
                <p style="font-size: 0.8rem; opacity: 0.6;">
                    Built with Natural Vibes.
                </p>
            </div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
