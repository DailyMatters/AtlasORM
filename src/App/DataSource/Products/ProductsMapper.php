<?php
namespace App\DataSource\Products;

use App\DataSource\Tag\CategoryMapper;
use Atlas\Orm\Mapper\AbstractMapper;

/**
 * @inheritdoc
 */
class ProductsMapper extends AbstractMapper
{
    /**
     * @inheritdoc
     */
    protected function setRelated()
    {
        $this->manyToOne('category_id', CategoryMapper::CLASS);
    }
}
