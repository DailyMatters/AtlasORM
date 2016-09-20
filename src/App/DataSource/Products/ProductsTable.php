<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace App\DataSource\Products;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class ProductsTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'product_id',
            'name',
            'category_id',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCols()
    {
        return [
            'product_id' => (object) array (
  'name' => 'product_id',
  'type' => 'int',
  'size' => 11,
  'scale' => NULL,
  'notnull' => true,
  'default' => NULL,
  'autoinc' => true,
  'primary' => true,
),
            'name' => (object) array (
  'name' => 'name',
  'type' => 'varchar',
  'size' => 255,
  'scale' => NULL,
  'notnull' => true,
  'default' => NULL,
  'autoinc' => false,
  'primary' => false,
),
            'category_id' => (object) array (
  'name' => 'category_id',
  'type' => 'int',
  'size' => 11,
  'scale' => NULL,
  'notnull' => true,
  'default' => NULL,
  'autoinc' => false,
  'primary' => false,
),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getPrimaryKey()
    {
        return [
            'product_id',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getAutoinc()
    {
        return 'product_id';
    }

    /**
     * @inheritdoc
     */
    public function getColDefaults()
    {
        return [
            'product_id' => null,
            'name' => null,
            'category_id' => null,
        ];
    }
}
