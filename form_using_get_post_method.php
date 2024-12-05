<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="css/bootstrap.min.css"> 
     <style>
      body{
        

      }
      .login_box
      {
        width:400px;
      }
     </style>

</head>
<body class="bg-light d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-6 border ">
        <div class="login_box p-4 mx-auto rounded ">
              <form action="" method="post" class=" form mx-auto">

    <div>
    <label for="" class="form-label">Username :</label>
    <input type="text" name="username" required class="form-control">
    </div>

    <div>
    <label for="" class="form-label">Email :</label>
    <input type="e-mail" name="email" required class="form-control">
    </div>                                                                         


    <div>
    <label for="" class="form-label">Password :</label>
    <input type="password" name="password" required class="form-control">
    </div>                                                                         

    
     <div>
     <label for="" class="form-label">  Gender :</label>  <br>
     <input type="radio" name="gender" required class="check-input" value="Male" >Male
     <input type="radio" name="gender" required class="check-input" value="Female">Female
    </div>
<br>

    <div>
    <label for="" class="form-label"> City :</label>
    <br>
   
     <select name="city" id="" class="form-select">

       <option value=" ">Select city</option>
       <option value="Patan">Patan</option>
       <option value="Mehsana">Mehsana</option>
       <option value="Vadnagar">Vadnagar</option>
       <option value="Ahemdabad">Ahemdabad</option>

     </select>
     </div><br>

     <div>
      <label class="form-label">Cast : </label>
        <select name="cast" class="form-select">
          <option value="">Select Cast</option>
          <option value="General">General</option>
          <option value="OBC">OBC</option>
          <option value="SC">SC</option>
          <option value="ST">ST</option>

        </select>
     


     </div><br>
     
     <div>
      <label for="" class="form-label">Language Known :</label>
      <br>
      <input type="checkbox" value="English" name="language[]">English
      <input type="checkbox" value="Hindi" name="language[]">Hindi
      <input type="checkbox" value="Gujarati" name="language[]">Gujarati
     </div>
 <br>

     <div>
     <label class="form-label">Hobby :</label><br>
                        <input type="checkbox" class="" value="Reading"  name="hobby[]">Reading
                        <input type="checkbox" class=""  value="Music" name="hobby[]">Music
                        <input type="checkbox" class=""  value="Travelling" name="hobby[]">Travelling
                        <input type="checkbox" class=""  value="Learning" name="hobby[]">Learning
     </div>

     <br>
     <button class="btn btn-lg btn-primary " name="submit" type="submit">Submit</button>

     



     </div>

    </form>
    </div>
    <div class="col-6 border">
    <div>
    <label for="" class="form-label">Username :</label>
  
    <?php
     $name=$_POST['username'];
    echo $name;   ?>

    </div>

    <div>
    <label for="" class="form-label">Email :</label>
    <?php
        $email=$_POST['email'];
        echo $email;

     ?>
    </div>

    

    <div>
    <label for="" class="form-label">Gender :</label>
    <?php
    $gender=$_POST['gender'];
    echo $gender;

    ?>
    </div>

    <div>
    <label for="" class="form-label">City :</label>
    <?php 
    $city=$_POST['city'];
    echo $city;
    ?>
    </div>

    <div>
    <label for="" class="form-label">Cast :</label>
    <?php 
    $cast=$_POST['cast'];
    echo $cast;
    ?>
    </div>

    <div>
    <label for="" class="form-label">Language :</label>
    <?php 
    $language=$_POST['language'];
    $lang=implode(",",$language);
    echo $lang;
    ?>
    </div>



    <div>
    <label for="" class="form-label">Hobby:</label>
    <?php
      $hobby=$_POST['hobby'];
      $hb=implode(",",$hobby);
      echo $hb;

      ?>

    </div>

    


    
    </div>
    </div>
    </div> 

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>