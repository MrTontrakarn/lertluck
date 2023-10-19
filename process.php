<?php
include 'connection.php';

foreach ($_FILES['upload']['tmp_name'] as $key => $value) {
    $file_name = $_FILES['upload']['name'][$key];
    $new_name = rand(0, microtime(true)) . '-' . $file_name;
    
    if (move_uploaded_file($_FILES['upload']['tmp_name'][$key], "upload/" . $new_name)) {
        $sql = "INSERT INTO images (image, new_ptc, created_at) 
                VALUES (:image, 1, :datetime)";
        
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $params = array(
                'image' => $new_name,
                'datetime' => date("Y-m-d h:i:s")
            );
            
            if ($stmt->execute($params)) {
                echo "Image '$new_name' uploaded and inserted into the database successfully.";
            } else {
                echo "Error inserting image into the database.";
            }
        } else {
            echo "Error preparing the SQL statement.";
        }
    } else {
        echo "Error uploading the image '$file_name'.";
    }
}
?>
