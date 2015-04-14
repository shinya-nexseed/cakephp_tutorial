<?php
class Category extends AppModel {
    public $name = 'Category';
    public $hasMany = 'Post';

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
    );
}
