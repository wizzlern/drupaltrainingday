<?php

/**
 * Contains exercises to create a custom block with recent game reviews.
 * Estimated time: 45 min.
 */

// ==== Step 1 ====
// Load Game review nodes using an entity query.
// - Use the custom block code \Drupal\wizzlern_pegi\Plugin\Block\NewGames.
// - Write a helper method to load games from the storage.
// - Find examples in core to load nodes using entityQuery: entityQuery('node').
// - Use an entity query to load the 5 most recent game reviews.
// - Let the helper method return the 5 nodes.

// ==== Step 2 ====
// The block shows links of the 5 most recent game reviews.
// - Use the helper method from step 1.
// - The Node objects have a method that returns a link to the node page. Find
//   this method.
// - Use this method to build an array of links to game review nodes.
// - Replace the dummy content of the block by the node links.
// - Check the result by visiting the block on one of the site's pages.
