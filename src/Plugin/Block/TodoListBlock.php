<?php

namespace Drupal\todo_list\Plugin\Block;

use Drupal\Core\Annotation\Translation;
use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Todo List' Block.
 *
 * @Block(
 *   id = "todo_list_block",
 *   admin_label = @Translation("Todo List block"),
 *   category = @Translation("AndyFranklin Admin"),
 * )
 */
class TodoListBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#title' => 'Todo List',
            '#description' => 'The todo list!',
            '#theme' => 'block--todo-list',
        );
    }
}
