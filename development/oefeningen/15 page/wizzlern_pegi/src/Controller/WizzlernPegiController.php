<?php

/**
 * @file
 * Contains \Drupal\wizzlern_pegi\Controller\WizzlernPegiController.
 */

namespace Drupal\wizzlern_pegi\Controller;

use Drupal\Core\Controller\ControllerBase;

// ==== Step 1 ====
// Load Game review nodes.
// - Use the loadGames() helper function from the Recent Games block to load
//   10 of the latest games from the storage.
// - Extra 1: Rework loadGames() to use a $max parameter for the maximum number
//   of nodes to load.
// - Extra 2: Allow loadGames() to load all game nodes when $max is 0.

// ==== Step 2 ====
// Output Game review node teasers.
// - Of each loaded node we want to show the teaser. Use the puzzle pieces below
//   to get the Teaser view for each node.
//   Tip: If you have no idea how to use some of the puzzle pieces, you should
//   search examples of how a puzzle pieces is used in Drupal's code.
// - Render the node teasers as an item list.
// - Generate some game reviews using the Devel Generate module.
// - Check the result at URL /games.

// ---- Puzzle pieces ----
// getViewBuilder('node')
// view($node, $view_mode)
// \Drupal::entityTypeManager()

// ==== Step 3 (extra) ====
// If there are no Game reviews the Games page show a text.
// - Let the controller return a text if no games are present.
//   Tip: When you build the Recent games block for the first time, you used
//   dummy text output. Use the same technique to output a 'no games' text.
// - Un-publish all Game reviews and check the result at URL /games.

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
      '#cache' => ['max-age' => 0],
    );

    return $build;
  }

}
