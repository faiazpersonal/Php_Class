<?php 
    error_reporting(0);
    class Student {
        public $id;
        public $name;
        public $batch;

        public function __construct($id, $name, $batch){
            $this ->id = $_POST['id'];
            $this ->name = $_POST['name'];
            $this ->batch = $_POST['batcg'];
            $this -> result($this ->id);
        }
        public function result($id){
            $file = fopen('marks.txt','r');
            while(!feof($file)){
                $data = fgets($file);
                $mark = explode("=",$data);
                if ($id == $mark[0]){
                    echo $mark[1]."(ID: ".$this -> id."Batch: ".$this -> batch.") Has got ".$mark[2]."marks";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title> Student marks read</title>
</head>
<body>
    <form action="" method="post">
        Enter Your Id: <input type="text" name="id"> <br><br>
        <input type="submit" name="submit" value="Show Result">
    </form>
    
    <?php  $obj = new Student($id,$name,54);
    
    ?>
</body>
</html>