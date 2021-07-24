
<form method="POST" enctype="multipart/form-data">

    <input type="file" nome="fileUpload">
    <button type="submit">Send</button>

</form>


<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $file = $_FILES["fileUpload"];

        if ($file["error"]) {
            
            throw new Exception("error:". $file["error"]);
        }

        $dirUploads = "upoads";

        if (!is_dir($dirUploads)) {

            mkdir($dirUploads);
        }

        if (move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])) {

            echo "Upload sucess";
            
        }else {

            throw new Exception("Error Processing Request",1);
        }
    }



?>


