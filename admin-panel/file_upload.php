<?php
if(!session_status()) {
    session_start();
}
require_once '../config.php';
	require("../webconfig.php");

if (array_key_exists("submit", $_REQUEST)) {
    if ((($_FILES["file"]["type"] == "image/gif")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/pjpeg")
            || ($_FILES["file"]["type"] == "image/png")
            || ($_FILES["file"]["type"] == "application/pdf")
            || ($_FILES["file"]["type"] == "application/msword")
            || ($_FILES["file"]["type"] == "text/txt")
            || ($_FILES["file"]["type"] == "text/doc")
            )
            && ($_FILES["file"]["size"] < 20000000000000000)) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        } else {
            echo "Upload: " . $_FILES["file"]["name"] . "<br />";
            echo "Type: " . $_FILES["file"]["type"] . "<br />";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
           
            $folderUrl="../wow-slider/data/images/".$_POST["Header"]."";        

            if(!is_dir($folderUrl)){
                mkdir($folderUrl);
                echo 'folder created';
            }
            $url="../wow-slider/data/images/".$_POST["Header"]."/"; 
            
            
            if (file_exists($url . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " already exists. ";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $url . $_FILES["file"]["name"]);
                echo "Stored in: " . $url . $_FILES["file"]["name"];
                $String = $_FILES["file"]["name"];               

            }
        }
    } else {
        echo 'File type is not valid';
    }
}
?>
<table>
    <form action="file_upload.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>File:</td>
            <td><input type="file" name="file" required/></td>
        </tr>
        <tr>
            <td>Course Name:</td>
            <td>
                <input type="text" name="Header"  />
<!--                <select name="course" required>
                    //<?php
//                    while ($row = mysql_fetch_array($coures)) {
//                        echo "<option >" . $row[0] . "</option>";
//                    }
//                    ?>
                </select>-->
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Submit" /></td>
        </tr>
    </form>
</table>

