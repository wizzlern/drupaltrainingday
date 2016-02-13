<?php

/**
 * @file
 * Contains \Drupal\wizzlern_pegi\Controller\WizzlernPegiController.
 */

namespace Drupal\wizzlern_pegi\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Wizzlern Pegi module routes.
 */
class WizzlernPegiController extends ControllerBase {

  /**
   * Content controller callback: View games overview page.
   *
   * @return array
   *   Render array of page output.
   */
  public function gamesOverview() {
    $items = array();
    $build = array();

    // NOTE: It is not a good practice to use the static methods from \Drupal
    // in OO code, such as \Drupal::entityQuery() and
    // \Drupal::entityTypeManager(). It makes the objects dependent on this
    // Drupal class (hardcoded) without declaring a dependency. This makes it
    // impossible to unit test the code and makes the code more tightly coupled
    // than necessary.
    // We do it to keep things simple for you, since you have just started
    // learning Drupal and we don't want to expose you to Dependency Injection
    // yet.

    $nodes = $this->loadGames(10);

    foreach ($nodes as $nid => $node) {
      $items[$nid] = \Drupal::entityTypeManager()
        ->getViewBuilder('node')
        ->view($node, 'teaser');
    }

    // NOTE: We set the 'max-age' here to zero seconds. This will disable
    // caching of the page. This is bad for performance.
    // We do it here to keep things simple for you, since you have just started
    // learning Drupal and we don't want to expose you to Render Cache yet.

    if ($items) {
      $build['games'] = array(
        '#theme' => 'item_list',
        '#items' => $items,
        '#cache' => ['max-age' => 0],
      );
    }
    else {
      $build['empty'] = array(
        '#markup' => $this->t('Bummer, we have no game reviews for you. Try again tomorrow.'),
        '#cache' => ['max-age' => 0],
      );
    }

    return $build;
  }

  /**
   * Loads recent game reviews.
   *
   * @param $max
   *   The maximum number or games to load.
   *
   * @return \Drupal\Core\Entity\EntityInterface[]
   *   Array of Game review nodes.
   */
  protected function loadGames($max) {
    $query = \Drupal::entityQuery('node')
      ->condition('type', 'game')
      ->condition('status', 1)
      ->sort('created', 'DESC');
    if ($max) {
      $query->range(0, $max);
    }
    $nids = $query->execute();

    return \Drupal::entityTypeManager()
      ->getStorage('node')
      ->loadMultiple($nids);
  }

}
