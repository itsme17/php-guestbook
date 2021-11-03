<?php
// require 'Post.php';
  
class PostLoader
{
    // function __construct() {}

    private $feedback = "feedback.json";
    private $title;
    private $date;
    private $content;
    private $authorName;
    private $data=array();
    public function createAndAddToJson(){

       if(isset($_POST["btn"])) {
        if (file_exists($this->feedback)) {
            $this->storeData();
            array_push($this->data,$this->title,$this->date,$this->authorName,$this->content);
            echo json_encode($this->data);
            $json = json_encode($this->data);
               file_put_contents($this->feedback, $json);

        // echo $this->title;
        // echo $this->date;
        // echo $this->authorName;
        // echo $this->content;
        } else {
           $createfile = fopen($this->feedback, 'w');
            header("Refresh:0");
        }
        
        
       }

    }

    public function storeData(){

            if(isset($_POST["title"])) {
                $this->title = $_POST["title"];
            }
            if(isset($_POST["date"])) {
                $this->date = $_POST["date"];
            }       
            if(isset($_POST["authorname"])) {
                $this->authorName = $_POST["authorname"];
            }
            if(isset($_POST["content"])) {
                $this->content = $_POST["content"];
            }
        }

}

