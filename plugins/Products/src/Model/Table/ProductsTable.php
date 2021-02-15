<?php
namespace Products\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Products\Model\Table\PhinxlogTable&\Cake\ORM\Association\BelongsToMany $Phinxlog
 *
 * @method \Products\Model\Entity\Product get($primaryKey, $options = [])
 * @method \Products\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \Products\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \Products\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Products\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Products\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Products\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \Products\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Phinxlog', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'phinxlog_id',
            'joinTable' => 'products_phinxlog',
            'className' => 'Products.Phinxlog',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

            $validator
            ->scalar('imagee')
            ->maxLength('imagee', 255)
            ->requirePresence('imagee', 'create')
            ->notEmptyFile('imagee');

            $validator
            ->scalar('imageee')
            ->maxLength('imageee', 255)
            ->requirePresence('imageee', 'create')
            ->notEmptyFile('imageee');

        $validator
            ->integer('price')
            ->maxLength('price', 255)
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('description')
            ->maxLength('discription', 255)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
