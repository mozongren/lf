<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class ArticleModel extends RelationModel{
	
     protected $_link = array(
        'category'=>array(
            'mapping_type'      => self::BELONGS_TO ,
            'class_name'        => 'ArticleCategory',
            'foreign_key'       =>  'pid',
            'relation_foreign_key'  =>  'id',
            'mapping_name'      => 'category',
            )
        );
 }
