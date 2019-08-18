<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Education Software School Addition Response</title>
    </head>
    <body>
        <b>Education Software School Addition Response</b>
        <br><br>
        <?php
       
            require_once 'config.php';
           

                
                $name = mysql_escape_string($_POST['name']);
                $affiliation = mysql_escape_string($_POST['date']);
                $contact = mysql_escape_string($_POST['contact']);
                $landmark = mysql_escape_string($_POST['landmark']);
                $place = mysql_escape_string($_POST['place']);
                $post = mysql_escape_string($_POST['post']);
                
                $educational_district = mysql_escape_string($_POST['educational_district']);
                $pin = mysql_escape_string($_POST['pin']);
                $stream = mysql_escape_string($_POST['stream']);
                $course = mysql_escape_string($_POST['Biology Science']).";".mysql_escape_string($_POST['Computer Science']).";".mysql_escape_string($_POST['Political Commerce']).";".mysql_escape_string($_POST['Computer Commerce']).";".mysql_escape_string($_POST['humanities 1']).";".mysql_escape_string($_POST['humanities 2']).";".mysql_escape_string($_POST['humanities 3']).";".mysql_escape_string($_POST['additional']);

                
                    if (mysql_query("INSERT INTO `school`(`id`, `name`, `affiliation`, `contact number`, `landmark`, `place`, `post`, `educational district`, `pin`, `stream`, `course`) VALUES "
                                    . "(null,'$name','$affiliation','$contact','$landmark','$place','$post','$educational_district','$pin','$stream','$course')")) {
                         echo 'Inserted Successfully';
                        
                        } else {
                            echo 'Insertion failure '.  mysql_error();
                        }
                     
                
             
        
        ?>
    </body>
</html>
