<?php
/**
 * Tatoeba Project, free collaborative creation of multilingual corpuses project
 * Copyright (C) 2009  HO Ngoc Phuong Trang <tranglich@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 *
 * @category PHP
 * @package  Tatoeba
 * @author   HO Ngoc Phuong Trang <tranglich@gmail.com>
 * @license  Affero General Public License
 * @link     https://tatoeba.org
 */

$this->set('title_for_layout', $this->Pages->formatTitle(
    format(__("Edit message {number}"), array('number' => $message->id))
));
?>
<div id="annexe_content">
    <div class="module">
        <h2><?php echo __("Menu"); ?></h2>
        <p>
            <?php
            echo $this->Html->link(
                __('Back to Wall'),
                array(
                    'controller' => 'wall',
                    'action' => 'index',
                    "{$message->id}#message_{$message->id}"
                )
            );
            ?>
        </p>
    </div>
</div>

<div id="main_content">
    <div class="module" >
    <?php $this->Wall->displayEditMessageForm($message); ?>
    </div>
    
</div>
