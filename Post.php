<?php

class Post
{
    private $title;
    private $date;
    private $content;
    private $authorName;

    public function __construct($title,$date,$content,$authorName) {
        $this->title = $title;
        $this->date = $date;
        $this->authorName = $authorName;
        $this->content = $content;
        
      }
      function getTitle(){
        return $this->title;
      }
     function get_Date(){
        return $this->date;
      }
     function getContent(){
        return $this->content;
      }
        function getAuthorName(){
        return $this->authorName;
      }

     

    

}
