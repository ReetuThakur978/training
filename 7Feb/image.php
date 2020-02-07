<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image'] ['tmp_name'];
       $imgContent = addslashes(file_get_contents($image));

        
         //Insert image data into database
         
        
        $db =mysqli_connect("localhost", "root","1234","users");
        
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into user_image (image, created) VALUES ('$imgContent', '$dataTime')");
        if($insert)
        {
            echo "File uploaded successfully.";
        }
        else
        {
            echo "File upload failed, please try again.";
        } 
    }
  
    }
    $result = $db->query("SELECT * from user_image");
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $imgData['image'] ).'"/>';
    }else{
        echo 'Image not found...';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<body>
    <!-- create a box to choose the file -->
    <form action="" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html>