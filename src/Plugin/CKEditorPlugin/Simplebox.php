<?php

/**
 * @file
 * Contains \Drupal\editor_simplebox\Plugin\CKEditorPlugin\Simplebox.
 */

namespace Drupal\editor_simplebox\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "simplebox" plugin.
 *
 * @CKEditorPlugin(
 *   id = "simplebox",
 *   label = @Translation("File upload"),
 *   module = "ckeditor"
 * )
 */
class SimpleBox extends CKEditorPluginBase implements CKEditorPluginButtonsInterface {

    /**
     * {@inheritdoc}
     */
    public function getFile() {
        return drupal_get_path('module', 'editor_simplebox') . '/js/plugins/simplebox/plugin.js';
    }

    /**
     * {@inheritdoc}
     */
    public function getButtons() {
        $path = drupal_get_path('module', 'editor_simplebox') . '/js/plugins/simplebox/icons';
        return array(
            'SimpleBox' => array(
                'label' => t('SimpleBox'),
                'image' => $path . '/simplebox.png',
            ),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig(Editor $editor)
    {
        return array();
    }
}
