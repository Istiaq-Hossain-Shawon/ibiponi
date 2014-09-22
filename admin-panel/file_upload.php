<?php
if(!session_status()) {
    session_start();
}
require_once '../config.php';
require("../webconfig.php");
require_once("Database.php");

$name=new Database();
$name->controls();
$name->connection();
if(!($name->con))
{
    echo 'Error: ' . mysql_error();
}



echo "thanks for taking the survey";

if(isset($_POST['submit'])){

    $name ->savePerson_detail($_POST);
    $name=$_POST['Header'];
    $product_name=$_POST['product_name'];
    $Model_size=$_POST['Model_size'];
    $Net_Prize=$_POST['Net_Prize'];
    $Selling_Prize=$_POST['Selling_Prize'];
    $Warranty=$_POST['Warranty'];
    $PdtDescription=$_POST['Description'];
    //$Brand_name=$_POST['Brand_name'];
    $db=new Database();
    $db->controls();
    $db->connection();
    $db->insert($name,$product_name,$Model_size,$Net_Prize,$Selling_Prize,$Warranty,$PdtDescription);

}


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
            <td>Group header:</td>
            <td>
                <input type="text" name="Header" required />

            </td>
        </tr>
        <tr>
            <td>Product Name:</td>
            <td><input type="text" name="product_name" required/></td>
        </tr>
        <tr>
            <td>Model size:</td>
            <td><input type="text" name="Model_size" /></td>
        </tr>
        <tr>
            <td>Brand name:</td>
            <td><input type="text" name="Brand_name" /></td>
        </tr>
        <tr>
            <td>Net Prize:</td>
            <td><input type="text" name="Net_Prize" /></td>
        </tr>
        <tr>
            <td>Selling Prize:</td>
            <td><input type="text" name="Selling_Prize" /></td>
        </tr>
        <tr>
            <td>Warranty:</td>
            <td><input type="text" name="Warranty" /></td>
        </tr>
        <tr>
            <td>User:</td>
            <td><input type="text" name="Description" /></td>
        </tr>


        <tr>
            <td>File:</td>
            <td><input type="file" name="file" /></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Submit" /></td>
        </tr>
    </form>
</table>

