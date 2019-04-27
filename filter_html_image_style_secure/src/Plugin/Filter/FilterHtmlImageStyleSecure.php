<?php

namespace Drupal\filter_html_image_style_secure\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * Provides a filter to restrict images to site (but allow image styles).
 *
 * @Filter(
 *   id = "filter_html_image_style_secure",
 *   title = @Translation("Restrict images to this site (allowing image styles)"),
 *   description = @Translation("Disallows usage of &lt;img&gt; tag sources that are not hosted on this site by replacing them with a placeholder image. Allows image styles by not checking that image actually exists."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_IRREVERSIBLE,
 *   weight = 9
 * )
 */
class FilterHtmlImageStyleSecure extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    return new FilterProcessResult(_filter_html_image_style_secure_process($text));
  }

  /**
   * {@inheritdoc}
   */
  public function tips($long = FALSE) {
    return $this->t('Only images hosted on this site may be used in &lt;img&gt; tags. Allows image styles by not checking that file actually exists.');
  }

}
