<?php
include_once("../Connection.php");
?>
<html>
        <head>
                <meta charset="utf-8" />
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <title>Admin Panel</title>
                        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
                        <link rel="stylesheet" type="text/css" media="screen" href="admindex.css" />
            </head>
    <body>
            <div id="header">
                    <div class="logo">
                        <a>Admin<span>Panel</span></a>
                    </div>
                </div>
                
                <div id ="container">
                    <div class="sidebar">
                        <ul id ="nav">
                            <li><a href="student_register.php" target="frame1">STUDENT</a></li>
                            
                            <li><a href="view_company.php" target="frame1">COMPANY</a></li>
                            <li><a href="contactus_detail.php" target="frame1">CONTACT US</a></li>
                            <li><a href="logout.php" target="frame1">LOGOUT</a></li>


                            <!-- <li><a href="restaurant.html" target="frame1"> RESUME</a></li>
                            <li><a href="#"> ORDER</a></li>
                            <li><a href="feed_form.php" target="frame1"> JOB REQUIREMENT</a></li> -->
                        </ul>
                    </div>
    </body>
</html>