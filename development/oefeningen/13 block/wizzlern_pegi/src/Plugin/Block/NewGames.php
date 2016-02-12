<?php

/**
 * @file
 * Contains \Drupal\wizzlern_pegi\Plugin\Block\NewGames.
 */

// Exercises to create a custom block with a list of items.
// Estimated time: 30 min.

// ==== Step 1 ====
// Set up the @Block annotation.
// - Find the SystemPoweredByBlock.php file and use it as an example block.
// - Determine the interfaces that are implemented by BlockBase.
// - Complete the @Block annotation below.
//   - Use the documentation sources provided in the presentation slide.
//   - Annotation keys are documented in: \Drupal\Core\Block\Annotation\Block.

// ==== Step 2 ====
// Implement the build() method with dummy output.
// - Let the build() method return a string of dummy content as block content.
// - Go to the Block Layout page and add the block to the second sidebar.
// - Check the output of the block.

// ==== Step 3 ====
// Format the block output as a list of dummy content.
// - Remove the return value from the previous exercise and uncomment the
//   return array.

namespace Drupal\wizzlern_pegi\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a recent games block.
 *
 * @Block(
 *   id = ...
 *   admin_label = ...
 * )
 */
class NewGames extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $items = array();

//    return array(
//      '#theme' => 'item_list',
//      '#items' => $items,
//      '#cache' => ['max-age' => 0]
//    );

  }

}
