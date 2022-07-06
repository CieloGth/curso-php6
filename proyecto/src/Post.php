<?php
namespace App;
    class Post{
        protected $comments=[];
        public function addComment(Comment $comment){
            $this->comments[]=$comment;
        }
    }