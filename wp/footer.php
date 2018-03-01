<?php
/**
 * The template for displaying the footer
 */

?>

<footer class="pageFooter container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="navigation col-xs-12 col-md-offset-3 col-md-6">
                    <a href="<?php echo get_page_link(16); ?>">Клуб</a>
                    <a href="<?php echo get_page_link(50); ?>"><?php echo get_the_title(50); ?></a>
                    <a href="<?php echo get_page_link(46); ?>"><?php echo get_the_title(46); ?></a>
                    <a href="<?php echo get_page_link(44); ?>"><?php echo get_the_title(44); ?></a>
                    <a href="<?php echo get_page_link(48); ?>" class="ad"><?php echo get_the_title(48); ?></a>
                </div>
            </div>
            <div class="info row">
                <div class="address col-xs-12 col-md-3">
                    295000, Республика Крым,<br>
                    г. Симферополь, ул. Зои Рухадзе, 27/21
                </div>
                <div class="emails col-xs-12 col-md-3">
                    <div class="row">
                        <div class="hidden-xs hidden-sm col-md-3">E-mail:</div>
                        <div class="col-xs-12 col-md-9">
                            info@tavridadog.com<br>
                            tavridadog@mail.ru
                        </div>
                    </div>
                </div>
                <div class="phoneNumbers col-xs-12 col-md-3">
                    /+7 (978)/895-77-37<br>
                    /+7 (978)/837-80-65
                </div>
                <div class="copyright col-xs-12 col-md-3">
                    © 2013 Кинологический Союз Крыма
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script>
    $(document).ready(function(){
        console.log('JQ is here');

    });

</script>
</body>
</html>
