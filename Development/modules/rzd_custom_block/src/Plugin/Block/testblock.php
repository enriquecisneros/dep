<?php

/**
 * @file
 * Contains \Drupal\rzd_custom_block\Plugin\Block\testblock.<?php

/**
 * @file
 * Contains \Drupal\rzd_custom_block\Plugin\Block\testblock.
 */
namespace Drupal\rzd_custom_block\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 * )
 */
class testblock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#markup' => $this->t('Hello, World!'), 
        );
    }
}
?>
