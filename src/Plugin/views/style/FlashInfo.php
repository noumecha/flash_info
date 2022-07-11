<?php

namespace Drupal\flash_info\Plugin\views\style;

use Drupal\core\form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style view plugin to add some customization to a top control slider
 * the slider is linked to a titles of some content
 * 
 * @ViewsStyle(
 *  id = "flashinfo_slider",
 *  title = @Translation(" Flash Info Swiper "),
 *  help = @Translation(" Add some slider controls and dinamize slider titles "),
 *  theme = "flash_info_view",
 *  dispplay_types = { "normal" }
 * )
 * 
 */

class FlashInfo extends StylePluginBase
{
    /**
     * {@inheritdoc}
     */
    protected $usesRowPlugin = TRUE;

    /**
     * custom css for the rows
     * 
     * @var bool
     */
    protected $usesRowClass = TRUE;

    /**
     * build form options
     * {@inheritdoc}
     * 
     */
    public function buildOptionsForm(&$form, FormStateInterface $form_state)
    {
        parent::buildOptionsForm($form, $form_state);
        $form['theme'] = [
            '#type' => 'select',
            '#title' => $this->t(' Model '),
            '#options' => [
                'top--left' => 'top-left',
                'top--right' => 'top-right',
                'bottom--left' => 'bottom--right'
            ]
        ];
        $form['swipe_options'] = [
            '#type' => 'details',
            '#title' => $this->t('swipe settings')
        ];
        $form['swipe_options']['speed'] = [
            '#type' => 'number',
            '#title' => $this->t('vitesse'),
            '#default_value' => $this->options['swipe_options']['speed']
        ];
        $form['swipe_options']['loop'] = [
            '#type' => 'checkbox',
            '#title' => $this->t('Loop'),
            '#default_value' => $this->options['swipe_options']['loop']
        ];
    }
    /**
     * submittings option from the form 
     * {@inheritdoc}
     */
    
}