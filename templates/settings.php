<div class="wrap">
    <h2>TaxJar Settings <a href="http://api.taxjar.com" target=_blank style="font-size:70%">Click here to get your API Key</a></h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('wp_plugin_template-group'); ?>
        <?php @do_settings_fields('wp_plugin_template-group'); ?>

        <?php do_settings_sections('wp_plugin_template'); ?>

        <?php @submit_button(); ?>
    </form>
</div>
