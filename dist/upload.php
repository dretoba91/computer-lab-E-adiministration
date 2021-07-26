<?php

    session_start();
	include("connect.php");


//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = "select max(id) as id from software";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            if ($count > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO software(filename, created) VALUES('$filename', '$created')";
            mysqli_query($conn, $sql);
            header("Location: asoftware_install.php?st=success");
        }
        else
        {
            header("Location: asoftware_install.php?st=error");
        }
    }
    else
        header("Location: asoftware_install.php");
}
?>