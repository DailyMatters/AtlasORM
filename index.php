<?php

require_once __DIR__ . '/vendor/autoload.php';

use Atlas\Orm\Mapper\Mapper;
use Atlas\Orm\AtlasContainer;
use App\DataSource\Category\CategoryMapper;
use App\DataSource\Products\ProductsMapper;

$atlasContainer = new AtlasContainer('mysql:host=localhost;dbname=atlasorm','root', '' );
$atlasContainer->setMappers([ProductsMapper::CLASS, CategoryMapper::CLASS]);

$atlas = $atlasContainer->getAtlas();

$categoryRecord = $atlas->fetchRecord(CategoryMapper::CLASS, '1', [
    'products' => function ($select) {
        $select->with(['products']);
    }
]);

var_dump( $categoryRecord );