<?php
    include_once("Connection.php");
?>
<?php
    if(isset($_POST['submit']))
    {
            $fullname=$_POST['full_name'];
            $Email=$_POST['email'];
            $Subject=$_POST['subject'];
            $Message=$_POST['message'];

            $query="insert into contact_us(full_name,email,subject,message) value('$fullname','$Email','$Subject','$Message')";
            if(!mysqli_query($conn,$query))
            {
                echo 'Not inserted';
            }
            else{
                echo "Inserted";
            }
                
           header("location:index6.php");
    }
    ?>
