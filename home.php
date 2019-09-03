



<?php
  

  require('config/config.php');
  require('config/db.php');

 if(isset($_POST['username'])){
    //Get Form data
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
      $age = mysqli_real_escape_string($conn, $_POST['age']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
   


 $id = mysqli_real_escape_string($conn, $_GET['id']);
  #Create Query
  $query = 'SELECT * FROM users WHERE id = '.$id;
  #Get result
  $result = mysqli_query($conn, $query);
  #Fetch data
  $user = mysqli_fetch_assoc($result);
  #Free result
  mysqli_free_result($result);
  #Close connection
  mysqli_close($conn);
}

?>

<?php include('inc/header.php'); ?>
  <div class="jumbotron">
    
    <h1 style="font-family: 'Impact'">WELCOME, Student</h1>
      <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="container" style="background-image: url('inc/excelwall.png'); text-align: justify">
        <center><h3 style="color:darkorange; font-size:40px;">Excel Technical Skills and Career Center</h3></center>
        <br>
        <center>
 

 

        <hr>
        <h1>WEB DEVELOPMENT COURSE ABOUT</h1><br>
 <h2 id="1">What are technical skills?</h2> 
       <p><strong>Technical skills</strong> are qualities acquired by using and gaining expertise in performing physical or digital tasks. Traditionally, people working in mathematics, computer science, mechanics and information technology use various technical skills. Today, however, many more industries rely on employees with technical knowledge. For example, retail and foodservice workers often need to know how to use point-of-sale (POS) software. </p> 
       <p>Some specific examples of technical skills might include:</p> 
       <span style="text-align:left"><ul> 
        <li>Programming languages</li> 
        <li>Common operating systems</li> 
        <li>Software proficiency</li> 
        <li>Technical writing</li> 
        <li>Project management</li> 
        <li>Data analysis</li> 
       </ul> </span>
       <p>Technical skills vary widely between industry and job type. For computer programmers, knowledge of various coding languages is considered a technical skill. Customer service representatives may need technical skills relating to customer management and telephone systems. Teachers might need technical skills related to instructional technologies and software applications ranging from student behavior monitoring to grading.<br> &nbsp;</p> 
 <div class="row">  
       <div class="hori">
         <h2>EXCEL ICON</h2>
         <img src="inc/excelicon.png" width="200" height="200">
      </div>
       
      <div class="hori">
         <h2>CENTER ADDRESS</h2>
         <img src="inc/excelwall.png" width="200" height="200">
         <h5>201, 1800 Mahogany, Pasig,</h5>
         <h5> Metro Manila</h5>
      </div>

      <div class="hori">
         <h2>MAP LOCATION</h2>
         <img src="inc/map.png" width="200" height="200">
        
      </div>
 </div>
 <hr>

  <div class="row">  
       <div class="hori">
         <h2>TESDA CERTIFIED</h2>
         <img src="inc/tesda.jpg" width="200" height="200">
      </div>
       
      <div class="hori">
         <h2>PROG LANGUAGES</h2>
         <img src="inc/lang.jpg" width="200" height="200">
        
      </div>

      <div class="hori">
         <h2>SAMPLE CERTIFICATE</h2>
         <img src="inc/cert.jpg" width="200" height="200">
        
      </div>
 </div>
</center>
    
      
        <hr class="my-4"> 
      </div>
    </form>
  </div>
<?php include('inc/footer.php'); ?>