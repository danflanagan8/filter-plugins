<?php

namespace Drupal\filter_wrap_iframes\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * Provides a filter that wraps some embedded iframes in a div..
 *
 * @Filter(
 *   id = "filter_wrap_iframes",
 *   title = @Translation("Wrap iframes so they can be made responsive"),
 *   description = @Translation("Wraps iframes in a div. Attempts to target only youtube and viemo sources."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_REVERSIBLE,
 *   weight = 9
 * )
 */
class FilterWrapIframes extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    return new FilterProcessResult(_filter_wrap_iframes_process($text));
  }

  /**
   * {@inheritdoc}
   */
  public function tips($long = FALSE) {
    return $this->t('Wraps iframes in a div so they can be made responsive.');
  }

}
