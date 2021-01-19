<?php

class Post{

    public $post;
    public $comment;
    public $sticker;
    public $deleted;
    public $caption;

    function add_comment($comment){
        $this->comment = $comment;
    }
    function add_sticker($sticker){
        $this->sticker= $sticker;
    }
    function post_exists($deleted){
        return $deleted;
    }
    function add_post($post){
        //come back and add post logic here
    }
}

?>