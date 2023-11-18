<?php
 session_start();

include('conn.php'); 
                //Code for submitting love
                if(isset($_POST['submit'])){
                
                    $userid =($_POST['userID'])/1540948579;
                    $postid=($_POST['postID'])/1540948579;
                    
                
                if (isset($_SESSION["email"]) ){
                
                    $sql7 = "select * from love where userID='$userid' and postID='$postid'  ";
                    $result7 = mysqli_query($conn,$sql7)or die( mysqli_error($conn));
                    $user_like = mysqli_num_rows($result7) ;
                 if(mysqli_num_rows($result7)>=1)
                   {
                    $like_color='red';
                   }   
                else{
                
                
                    $sql8 = "INSERT INTO `love`( `userID`, `postID`) VALUES ('$userid','$postid')";
                    if(mysqli_query($conn,$sql8)){
                        echo"<script>alert('like submited ; window.location='home'</script>";
                
                    }
                    else{
                        echo 'Error: '.mysqli_error($conn);
                      
                    }
                    
                       # code...
                           };
                
                
                
                  
                }
                else{
                    
                    echo"<script>alert('You must login before you can comment) ; window.location='login'</script>";
                }
                
                    
                    
                    }
                   

?>
