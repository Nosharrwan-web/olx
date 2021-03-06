<?php
namespace Products\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $imagee
 * @property string $imageee
 * @property int $price
 * @property string $description
 *
 * @property \Products\Model\Entity\Phinxlog[] $phinxlog
 */
class Product extends Entity
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
        'image' => true,
        'imagee' => true,
        'imageee' => true,
        'price' => true,
        'description' => true,
        'phinxlog' => true,
    ];
}
