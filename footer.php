<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<section class="company_images">
    <div class="container-xl text-center mb-5 py-4">
        <img src="<?=get_stylesheet_directory_uri()?>/img/company-images.png" alt="">
    </div>
</section>
<footer class="footer pt-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-4">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/alltrans-logo.png"
                        class="footer__logo" alt="Alltrans Logo" width=250 height=160>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="footer__heading">Contact Us</div>
                <ul class="fa-ul mb-4">
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span> <a
                            href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>"><?=get_field('contact_phone', 'options')?></a>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span> <a
                            href="mailto:<?=get_field('contact_email', 'options')?>"><?=get_field('contact_email', 'options')?></a>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span>
                        <?=get_field('contact_address', 'options')?>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 ">
                <div class="footer__heading">Links</div>
                    <?=wp_nav_menu(array('theme_location' => 'footer_menu1'))?>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="colophon">
    <div class="container py-2">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="col-md-8 text-center text-md-start">
                &copy; <?=date('Y')?> Alltrans
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-end flex-wrap gap-3">
                <a href="/gdpr/">GDPR Policy</a> |
                <a href="<?=get_field('terms','options')?>" download="Alltrans-Terms-and-Conditions-of-Carriage.pdf">Terms &amp; Conditions</a> |
                <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                    title="Digital Marketing by Chillibyte"></a>
            </div>
        </div>
    </div>
</div>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>