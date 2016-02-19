<?php

/**
 * @file
 * Contains \Drupal\styleguide\GeneratorInterface.
 */

namespace Drupal\styleguide;

/**
 * Interface GeneratorInterface.
 *
 * @package Drupal\styleguide
 */
interface GeneratorInterface {

  /**
   * Return a simple array of words.
   *
   * @param $size
   *   The size of the list to return.
   * @return
   *   An array of words.
   */
  public function wordList($size = 5, $words = 3);

  /**
   * Return a random word or words.
   *
   * @param $size
   *   The number of words to return.
   * @param $case
   *   A string indicating the case to return. This is the name of a PHP function.
   *   options are 'ucfirst', 'ucwords', 'strtoupper', and 'strtolower'.
   *   Defaults to return strtolower().
   */
  public function words($size = 1, $case = 'strtolower');

  /**
   * Returns a random email address.
   *
   * @return string
   */
  public function email();

  /**
   * Return a random table header array.
   *
   * @param $size
   *   The size of the list to return.
   * @return
   *   An array of header elements.
   */
  public function tableHeader($size = 5);

  /**
   * Return a random table row array.
   *
   * @param $size
   *   The size of the list to return.
   * @return
   *   An array of row elements.
   */
  public function tableRows($size = 5);

  /**
   * Lorum ipsum text, used to generate words and phrases.
   *
   * @param $size
   *   The size of the list to return.
   * @param $words
   *   The number of words to return. Pass 0 for a whole paragraph.
   * @param $case
   *   The case of the text. Options are 'mixed', 'upper' and 'lower'.
   * @param $returns
   *   Indicates whether line returns should not be stripped out of the result.
   * @param $punctuation
   *   Indicates whether punctuation should not be stripped out of the result.
   * @param $array
   *   Indicates that the return value should be an array instead of a string.
   * @return
   *   A string or array of content.
   */
  public function lorem($size = 5, $words = 0, $case = 'mixed', $returns = TRUE, $punctuation = TRUE, $array = FALSE);

  /**
   * Generate paragraph(s) of random text.
   *
   * @param $size
   *   The number of paragraphs to return.
   * @return
   *   HTML paragraphs.
   */
  public function paragraphs($size = 5);

  /**
   * Provide a default image for display.
   *
   * Images should be in the assets directory. The current images are
   * (c) Ken Rickard and used by permission.
   *
   * @param $image
   *   The name of the image. Will be prefixed with 'image-'.
   * @param $type
   *   The file type, (jpg, png, gif). Do not include a dot.
   * @return
   *    The Drupal path to the file.
   */
  public function image($image = 'vertical', $type = 'jpg');

  /**
   * Generate a random sentence.
   *
   * @param string $link
   *   The link to add to the sentence.
   */
  public function sentence($link = FALSE);

  /**
   * Simulate Drupal pagination,
   *
   * @param $size
   *   The number of page numbers to display.
   * @param $total
   *   The total number of pages to simulate.
   * @return
   *   A Drupal pager HTML element.
   */
  public function pager($size = 8, $total = 20);

  /**
   * Generate a array of random links
   *
   * @param $url
   *   The internal path or external URL being linked to.
   * @param $size
   *   The total number of links to generate .
   * @return
   *   A array of random links
   */
  public function links($url, $size = 4);

  /**
   * Generate a random menu item
   *
   * @param $url
   *   The internal path or external URL being linked to.
   * @return
   *   A random menu item, see menu_tree_page_data for a description of the data structure.
   */
  public function menuItem($url);

  /**
   * Generate a links array for theme_links.
   */
  public function ulLinks();
}
