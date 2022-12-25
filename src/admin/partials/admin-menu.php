<?php

class NetlifyAdminMenu {
  // public static $optionsName = "dbi_example_plugin_options";
  public static $pageSlug = "netlify-build-trigger";
  public static $pageKey = "brianmmdev_netlify_build_trigger";
  public static $optionsName = "brianmmdev_netlify_build_trigger_options";

  public function __construct() {
    add_action( 'admin_menu', [$this, 'add_settings_page'] );
    add_action( 'admin_init', [$this, 'register_settings'] );
  }

  public function add_settings_page() {
    add_options_page( 'Netlify Build Trigger', 'Netlify Build Trigger', 'manage_options', NetlifyAdminMenu::$pageSlug, [$this, 'render_settings_page'] );
  }

  public function register_settings() {
    register_setting(NetlifyAdminMenu::$optionsName, NetlifyAdminMenu::$optionsName);
    add_settings_section( 'settings', 'Settings', [$this, 'section_text'], NetlifyAdminMenu::$pageKey );
    add_settings_field( 'brianmmdev_netlify_build_trigger_build_hook', 'Build Hook', [$this, 'setting_build_hook'], NetlifyAdminMenu::$pageKey, 'settings' );
    // add_settings_field( 'dbi_plugin_setting_api_key', 'Build Hook', [$this, 'setting_build_hook'], NetlifyAdminMenu::$pageKey );
  }

  public function section_text() {
    echo '<p>Setting the Build Hook will enable the button in the admin header.</p>';
  }

  public function setting_build_hook() {
    $options = get_option(NetlifyAdminMenu::$optionsName);
    $val = "";
    if($options) {
      $val = esc_attr($options['build_hook']);
    }
    echo "<input id='brianmmdev_netlify_build_trigger_build_hook' name='" . NetlifyAdminMenu::$optionsName . "[build_hook]' type='text' value='" . $val . "' />";
  }

  public function render_settings_page() {
    ?>
      <h2>Netlify Build Trigger Settings</h2>
      <form action="options.php" method="post">
          <?php
            settings_fields(NetlifyAdminMenu::$optionsName);
            do_settings_sections(NetlifyAdminMenu::$pageKey);
          ?>
          <input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e( 'Save' ); ?>" />
      </form>
    <?php
  }
}
