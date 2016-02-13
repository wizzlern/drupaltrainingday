<?php

/**
 * @file
 * Contains \Drupal\wizzlern_pegi\Plugin\Block\NewGames.
 */

namespace Drupal\wizzlern_pegi\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a recent games block.
 *
 * @Block(
 *   id = "wizzlern_pegi_recent_games",
 *   admin_label =  @Translation("New games")
 * )
 */
class NewGames extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $items = array();

    $nodes = $this->loadGames(5);
    foreach ($nodes as $node) {
      if ($node->access('view')) {
        $items[] = $node->toLink();
      }
    }

    // NOTE: We set the 'max-age' here to zero seconds. This will disable
    // caching of the block, which will disable caching of the page that this
    // block appears on. This is bad for performance.
    // We do it here to keep things simple for you, since you have just started
    // learning Drupal and don't want to expose you to Render Cache yet.

    return array(
      '#theme' => 'item_list',
      '#items' => $items,
      '#cache' => ['max-age' => 0]
    );

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

    // NOTE: It is not a good practice to use the static methods from \Drupal
    // in OO code, such as \Drupal::entityQuery() and
    // \Drupal::entityTypeManager(). It makes the objects dependent on this
    // Drupal class (hardcoded) without declaring a dependency. This makes it
    // impossible to unit test the code and makes the code more tightly coupled
    // than necessary.
    // We do it to keep things simple for you, since you have just started
    // learning Drupal and don't want to expose you to Dependency Injection yet.

    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'game')
      ->condition('status', 1)
      ->range(0, $max)
      ->sort('created', 'DESC')
      ->execute();

    return \Drupal::entityTypeManager()
      ->getStorage('node')
      ->loadMultiple($nids);
  }
}
