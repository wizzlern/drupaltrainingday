<?php

/**
 * @file
 * Contains \Drupal\wizzlern_pegi\Controller\WizzlernPegiController.
 */

namespace Drupal\wizzlern_pegi\Controller;

use Drupal\Core\Controller\ControllerBase;

// ==== Step 2 ====
// Load Game review nodes and output node teasers.
// - Write a helper method to load all game reviews from the storage.
// - Find an example in core to format a node using the viewBuilder.
// - Use the viewBuilder to view nodes in teaser view.
// - Let the controller method return a list of teasers.
// - If required create or generate game review nodes.
// - Check the result at URL /games.

// ==== Step 3 (optional) ====
// If there are no Game reviews the Games page show a text.
// - Let the controller return a text if no games are present.
// - Un-publish the Game reviews.
// - Check the result at URL /games.

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

    $items = array('one', 'two', 'three');

    $build['games'] = array(
      '#theme' => 'item_list',
      '#items' => $items,
    );

    return $build;
  }

}
