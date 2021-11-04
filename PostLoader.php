<?php
// require 'Post.php';
  
class PostLoader
{
    private $feedback = "feedback.json";
    private $title;
    private $date;
    private $content;
    private $authorName;
    // function __construct() {
    
    // }
    public function createAndAddToJson(){

       if(isset($_POST["btn"])) {
        $this->storeData();
       
        if (file_exists($this->feedback)) {
            $data = json_decode(file_get_contents($this->feedback));
            if(!empty($data)){
            $y = array_reverse($data);
            $z = array_slice($y, 0, 20);
            foreach($z as $key=>$info) {
                ?>
            <div class="messages">
                    <?php echo $key +1 . '. ' ?>
                    <label>Title: <span><?php echo $info->title ?></span></label></br>
                    <label>Date: <span><?php echo $info->date ?></span></label></br>
                    <label>Author Name: <span><?php echo $info->authorName ?></span></label></br>
                    <label>Content: <span><?php echo $info->content ?></span></label></br>
                    <br>
            </div>
                <?php
            }
        }
            $data[] = array( 
                'title' => $this->title,
                'date' => $this->date,
                'authorName' => $this->authorName,
                'content' => $this->content            
            );    
            
            $json = json_encode($data);
            file_put_contents($this->feedback, $json);
               
        } else {
           $createfile = fopen($this->feedback, 'w');
            header("Refresh:0");
        }
        
        
       }

    }

    public function storeData(){

            if(isset($_POST["title"])) {
                $this->title = htmlspecialchars($_POST["title"]);
            }
            if(isset($_POST["date"])) {
                $this->date = htmlspecialchars($_POST["date"]);
            }       
            if(isset($_POST["authorname"])) {
                $this->authorName = htmlspecialchars($_POST["authorname"]);
            }
            if(isset($_POST["content"])) {
                $this->content = htmlspecialchars($_POST["content"]);
            }
        }

}

