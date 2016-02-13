<?php

/**
 * Contains exercises to create a custom block with recent game reviews.
 * Estimated time: 45 min.
 */

// ==== Step 1 ====
// Load Game review nodes using an entity query.
// - You will work in \Drupal\wizzlern_pegi\Plugin\Block\NewGames.
// - Create a helper method to load games from the storage: loadGames()
//   This method will return an array of node objects.
// - Find examples in core to load nodes using entityQuery: entityQuery('node').
// - Create an entity query to load the 5 most recent game reviews using the
//   puzzle pieces below.
//   You can search for examples of the puzzle pieces in Drupal's code.
// - Use the loadGames() method in the block class and check the return value
//   using the kint() debug function.

// ---- Puzzle pieces ----
// condition('status', 1)
// condition('type', $content_type)
// execute()
// getStorage('node')
// loadMultiple($nids)
// range(0, $max)
// sort('created', 'DESC')
// \Drupal::entityQuery('node')
// \Drupal::entityTypeManager()

// ==== Step 2 ====
// The block shows links of the 5 most recent game reviews.
// - Use the loadGames() method to load Game review nodes.
// - Build an array of links to game review nodes using the puzzle pieces below.
// - Replace the array of dummy strings by the node links.
// - Check the result by visiting the block on one of the site's pages.

// ---- Puzzle pieces ----
// $node
// foreach()
// toLink()
