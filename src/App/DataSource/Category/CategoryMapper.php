<?php

namespace App\DataSource\Category;

use Atlas\Orm\Mapper\AbstractMapper;
use App\DataSource\Products\ProductsMapper;

/**
 * @inheritdoc
 */
class CategoryMapper extends AbstractMapper
{
    /**
     * @inheritdoc
     */
    protected function setRelated()
    {
        $this->oneToMany('category_id', ProductsMapper::CLASS);
    }
}
