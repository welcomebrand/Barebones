<footer role="contentinfo">
    <p>This is your footer space <a href="#top" title="Jump back to top">&#8593;</a></p>
</footer>

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery-1.7.1.js"%3E%3C/script%3E'))</script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/general.js"></script>
<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?> 
</body>
</html>