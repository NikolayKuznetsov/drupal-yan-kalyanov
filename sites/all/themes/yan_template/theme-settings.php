<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function yan_template_form_system_theme_settings_alter(&$form, &$form_state) {

    /* Contacts info */

    $form['email'] = array(
        '#type' => 'textfield',
        '#title' => t('Email'),
        '#default_value'  => theme_get_setting('email'),
        '#description'   => t("Enter your Email. Leave blank to hide."),
    );
    $form['phone'] = array(
        '#type' => 'textfield',
        '#title' => t('Phone'),
        '#default_value'  => theme_get_setting('phone'),
        '#description'   => t("Enter your Phone. Leave blank to hide."),
    );

    /* Social links */
    $form['yan_template'] = array(
        '#type' => 'fieldset',
        '#title' => t('Settings social link'),
        '#collapsible' => FALSE,
        '#collapsed' => FALSE,
    );
    $form['yan_template']['socialicon'] = array(
        '#type' => 'fieldset',
        '#title' => t('Social Icons'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
    $form['yan_template']['socialicon']['socialicon_display'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show Social Icon'),
        '#default_value' => theme_get_setting('socialicon_display', 'yan_template'),
        '#description'   => t("Check this option to show Social Icons. Uncheck to hide."),
    );
    $form['yan_template']['socialicon']['vk_url'] = array(
        '#type' => 'textfield',
        '#title' => t('VK Profile URL'),
        '#default_value' => theme_get_setting('vk_url', 'yan_template'),
        '#description'   => t("Enter your VK Profile URL. Leave blank to hide."),
    );
    $form['yan_template']['socialicon']['facebook_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Facebook Profile URL'),
        '#default_value' => theme_get_setting('facebook_url', 'yan_template'),
        '#description'   => t("Enter your Facebook Profile URL. Leave blank to hide."),
    );
    $form['yan_template']['socialicon']['instagram_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Instagram Profile URL'),
        '#default_value' => theme_get_setting('instagram_url', 'yan_template'),
        '#description'   => t("Enter your Instagram Profile URL. Leave blank to hide."),
    );
    $form['yan_template']['socialicon']['youtube_url'] = array(
        '#type' => 'textfield',
        '#title' => t('youtube Profile URL'),
        '#default_value' => theme_get_setting('youtube_url', 'yan_template'),
        '#description'   => t("Enter your youtube Profile URL. Leave blank to hide."),
    );

}
