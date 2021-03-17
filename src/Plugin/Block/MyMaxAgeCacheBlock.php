<?php


namespace Drupal\mycacheopdracht\Plugin\Block;


use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;
/**
 * Provides an example block.
 *
 * @Block(
 *   id = "mycahe_maxAge_example",
 *   admin_label = @Translation("mycahe_maxAge_example"),
 *   category = @Translation("myCahe")
 * )
 */

class MyMaxAgeCacheBlock extends BlockBase
{

  public function build()
  {
    $build = array();
    $build['node_id'] = array(
      '#markup' => $this->t('This is the block for the cache tag '),
      '#cache' => $this->getCacheMaxAge()
    );

    return $build;
  }


  /**
   * @return int
   */
  public function getCacheMaxAge()
  {
    return 0;
  }
}
