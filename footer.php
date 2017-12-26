    </div><!-- #main -->

    <div id="footer" role="contentinfo">
        <div id="colophon">
            <div id="site-info">
                <?php echo stripslashes(get_option(SHORT_NAME . "_footertext")); ?>
            </div><!-- #site-info -->
        </div><!-- #colophon -->
    </div><!-- #footer -->

</div><!-- #wrapper -->

<script src="http://stats.wordpress.com/e-201433.js" type="text/javascript"></script>
<script type="text/javascript">
st_go({v: 'ext', j: '1:3.0.2', blog: '68805979', post: '65', tz: '0'});
var load_cmc = function() {
    linktracker_init(68805979, 65, 2);
};
if (typeof addLoadEvent != 'undefined')
    addLoadEvent(load_cmc);
else
    load_cmc();
</script> 

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/app.js"></script>
<?php wp_footer(); ?>
</body>
</html>