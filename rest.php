<?php
    $verb =$_SERVER['REQUEST_METHOD'];
    if($verb == 'GET'){
        //GET SOMETHING
        
        //check if filename is set
        if(isset($_GET['filename'])){
            $file_content = file_get_contents($_GET['filename']);
            echo($file_content);

        }
        else{
            die("ERROR: REQUIRED PARAMETERS NOT GIVEN!");
        }
    }
    else if($verb == 'POST'){
        //POST SOMETHING
    }
    else if($verb == 'DELETE'){
        //DELETE SOMETHING
    }

?>