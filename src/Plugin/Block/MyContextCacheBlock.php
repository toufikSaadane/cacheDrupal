<?php


namespace Drupal\mycacheopdracht\Plugin\Block;


use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;


/**
 * Provides an example block.
 *
 * @Block(
 *   id = "mycahe_context_example",
 *   admin_label = @Translation("mycahe_context_example"),
 *   category = @Translation("myCahe")
 * )
 */
class MyContextCacheBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('mycahe_context_example!'),
    ];
    return $build;
  }

  public function getCacheContexts()
  {
    // voor een bepaalde query string url.query_args:request (request is de query argument)
    return Cache::mergeContexts(parent::getCacheContexts(), array('url.query_args'));
  }

}
