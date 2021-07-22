<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $memo
 * @property int $user_id
 * @property int $space_id
 * @property int|null $category_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Space $space
 * @property \App\Model\Entity\Category $category
 */
class Item extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'memo' => true,
        'user_id' => true,
        'space_id' => true,
        'category_id' => true,
        'created' => true,
        'modified' => true,
        'image' => true,
        'user' => true,
        'space' => true,
        'category' => true,
    ];
}
