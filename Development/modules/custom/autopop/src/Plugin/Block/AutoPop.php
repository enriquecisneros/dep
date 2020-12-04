<?php
/**
  *@file
  *contains \Drupal\autopop\Plugin\Block\AutoPop
  */
 namespace Drupal\autopop\Plugin\Block;
 
 use Drupal\Core\Block\BlockBase;
 use Drupal\Core\Session\AccountInterface;
 use Drupal\Core\Access\AccessResult;


 /**
 * Provides a 'AutoPop' List Block
 *
 * @Block(
 *   id = "auto_pop",
 *   admin_label = @Translation("Auto Pop"),
 *   category = @Translation("Blocks")
 * )
 */

	class AutoPop extends BlockBase {
	
	/**
	* {@inheritdoc}	
	*/
	public function build() {
	   $renderable = [
	      '#theme' => 'autopop',
	    ];
	   return $renderable;
	}
}