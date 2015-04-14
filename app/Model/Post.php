<?php
class Post extends AppModel {
    public $name = 'Post';
    public $belongsTo = 'Category';

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
