	<footer class="footer" role="contentinfo">

    <?php
    $footer_logo = get_field('footer_logo', 'option');
    if ($footer_logo) : ?>

    <a href="<?php echo get_home_url( null, '/', 'http' ); ?>"><img src="<?php echo $footer_logo ?>"></a>

    <?php endif;
        ?>

    <p class="third-subtitle centered-text">&copy; <?php echo date("Y"); ?> Copyright vadasunsetInteractive.</p>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
