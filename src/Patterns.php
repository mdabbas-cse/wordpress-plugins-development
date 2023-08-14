<?php


/**
 * Class Patterns.
 * 
 * 
 * @package aquila-features
 */

namespace AquilaFeatures;

/**
 * Class Patterns.
 */

class Patterns
{

  /**
   * Constructor.
   */
  public function __construct()
  {
    $this->init();
  }


  /**
   * Initialize.
   */

  private function init()
  {
    /**
     * action hook to register block patterns
     */
    add_action('init', [$this, 'register_block_patterns']);

    add_action('init', [$this, 'register_block_pattern_categories']);
  }

  /**
   * Register block patterns
   */
  public function register_block_patterns()
  {

    if (!function_exists('register_block_pattern')) {
      return;
    }

    // Get the two column pattern content.
    $two_columns_content = aquila_features_get_template('patterns/two-columns');

    /**
     * Register Two Column Pattern
     */
    register_block_pattern(
      'aquila-features/two-columns',
      [
        'title' => __('Aquila Features Two Column', 'aquila-features'),
        'description' => __('Aquila Two Column Patterns', 'aquila-features'),
        'categories' => ['aquila-columns'],
        'content' => $two_columns_content,
      ]
    );

  }

  /**
   * Register block pattern categories
   */
  public function register_block_pattern_categories()
  {
    $pattern_categories = [
      'aquila-columns' => __('Aquila Features Columns', 'aquila-features'),
    ];

    if (!empty($pattern_categories)) {
      foreach ($pattern_categories as $pattern_category => $pattern_category_label) {
        register_block_pattern_category(
          $pattern_category,
          ['label' => $pattern_category_label]
        );
      }
    }
  }
}