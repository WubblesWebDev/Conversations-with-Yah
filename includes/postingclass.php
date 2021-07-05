<?php
  class Cwy_posts{
    public $title;
    public $userid;
    public $post;


    function __construct($inTitle, $inUserid, $inPost)
    {
      $this->title = $inTitle;
      $this->userid = $inUserid;
      $this->post = $inPost;
    }
  }


