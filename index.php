<?php

require_once __DIR__ . '/vendor/autoload.php';

use Atlas\Orm\Mapper\Mapper;
use Atlas\Orm\AtlasContainer;
use App\DataSource\Category\CategoryMapper;
use App\DataSource\Products\ProductsMapper;

$atlasContainer = new AtlasContainer('mysql:host=localhost;dbname=atlasorm','root', '' );
$atlasContainer->setMappers([ProductsMapper::CLASS, CategoryMapper::CLASS]);

$atlas = $atlasContainer->getAtlas();

/*$categoryRecord = $atlas->fetchRecord(CategoryMapper::CLASS, '1', [
    'category_id' => function ($select) {
        $select->with(['category_id']);
    }
]);*/

//$categoryRecord = $atlas->fetchRecord(CategoryMapper::CLASS, '2');

$categoryRecordSet = $atlas
    ->select(CategoryMapper::CLASS)
    ->orderBy(['category_id DESC'])
    ->limit(10)
    ->cols([
        'category_id',
        'name'
    ])
->fetchRecordSet();

var_dump( $categoryRecordSet[0] );