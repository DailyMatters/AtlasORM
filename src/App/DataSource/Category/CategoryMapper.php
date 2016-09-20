<?php
namespace App\DataSource\Category;

use App\DataSource\Tag\ProductsMapper;
use Atlas\Orm\Mapper\AbstractMapper;

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
