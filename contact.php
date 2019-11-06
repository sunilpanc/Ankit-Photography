 <?php
        require 'connect.php';
            $name=$_POST['name'];
           
            $email=$_POST['email1'];
           
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            
            $query="insert into user(name,email,subject,message)Values('$name','$email','$subject','$message')";
             $run=mysqli_query($conn,$query);
              
             if($run){
                 
                 header('location:contactus.php');
                 echo"<script>alert('Your message has been sent successfully');</script>";
                 
             }
             
             else{
                 echo"errors:".mysqli_error($conn);
                 
             }
     
        ?>