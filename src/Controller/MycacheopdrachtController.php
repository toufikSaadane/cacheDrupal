<?php

namespace Drupal\mycacheopdracht\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for MyCacheOpdracht routes.
 */
class MycacheopdrachtController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
