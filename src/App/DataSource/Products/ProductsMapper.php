<?php

namespace App\DataSource\Products;

use Atlas\Orm\Mapper\AbstractMapper;
use App\DataSource\Category\CategoryMapper;

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
