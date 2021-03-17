<?php

namespace Drupal\mycacheopdracht\Plugin\Block;

use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "mycahe_tag_example",
 *   admin_label = @Translation("mycahe_tag_example"),
 *   category = @Translation("myCahe")
 * )
 */
class MyTagCacheBlock extends BlockBase
{
  public function build()
  {
    $build = array();
    $build['node_id'] = array(
      '#markup' => $this->t('This is the block for the cache tag '),
      '#cache' => $this->getCacheTags()
    );

    return $build;
  }

  public function getCacheTags()
  {
    if (\Drupal::routeMatch()->getParameter('node')) {
      $node = 66;
      return Cache::mergeTags(parent::getCacheTags(), array('node:' . $node));
    } else {
      return parent::getCacheTags();
    }
  }

}
