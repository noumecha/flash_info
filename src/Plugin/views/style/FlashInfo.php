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
}