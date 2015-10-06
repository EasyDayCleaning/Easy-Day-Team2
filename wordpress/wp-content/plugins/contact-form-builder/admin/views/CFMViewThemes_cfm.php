<?php

class CFMViewThemes_cfm {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  private $model;

  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct($model) {
    $this->model = $model;
  }

  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function display() {
    ?>
    <div style="clear: both; float: left; width: 99%;">
      <div style="float: left; font-size: 14px; font-weight: bold;">
        <?php echo __("This section allows you to edit form themes", "contact_form_maker"); ?>.
        <a style="color: blue; text-decoration: none;" target="_blank" href="http://web-dorado.com/wordpress-contact-form-builder-guide-2.html"><?php echo __("Read More in User Manual","contact_form_maker"); ?></a><br /><br />
        <span style="color: #FF0000;"><?php echo __("This feature is disabled for the non-commercial version.","contact_form_maker"); ?></span><br /><br />
        <?php echo __("Here are some examples standard templates included in the commercial version.","contact_form_maker"); ?>
        <a style="color: blue; text-decoration: none;" target="_blank" href="http://wpdemo.web-dorado.com/contact-form-builder"><?php echo __("Demo","contact_form_maker"); ?></a>
      </div>
      <div style="float: right; text-align: right;">
        <a style="text-decoration: none;" target="_blank" href="http://web-dorado.com/files/fromContactFormBuilder.php">
          <img width="215" border="0" alt="web-dorado.com" src="<?php echo WD_CFM_URL . '/images/wd_logo.png'; ?>" />
        </a>
      </div>
    </div>
    <div style="clear: both; float: left; width: 99%;">
      <img style="max-width: 50%;float: left;" src="<?php echo WD_CFM_URL . '/images/screenshots/form2.png'; ?>" />
      <img style="max-width: 50%;float: left;" src="<?php echo WD_CFM_URL . '/images/screenshots/form1.png'; ?>" />
      <img style="max-width: 50%;float: left;" src="<?php echo WD_CFM_URL . '/images/screenshots/form3.png'; ?>" />
      <img style="max-width: 50%;float: left;" src="<?php echo WD_CFM_URL . '/images/screenshots/form5.png'; ?>" />
      <img style="max-width: 50%;float: left;" src="<?php echo WD_CFM_URL . '/images/screenshots/form4.png'; ?>" />
    </div>
    <?php
  }

  public function edit($id, $reset) {
  }

  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}