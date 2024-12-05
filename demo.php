<?php

if(isset($_POST['btnSubmit']))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $hobby = $_POST['hobby'];
   $degree = $_POST['degree'];
   echo $name."<br>".$email."<br>".$gender."<br>".implode(",",$hobby)."<br>".$degree;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <div class="container">
        <div class="row ms-auto">
            <div class="col-md-10">
                <form class="form" method="post">
                    <div class="form-group col-md-8">
                        <label>Name</label>
                        <input type="text" name="name" required class="form-control">
                    </div>
                    <div class="form-group col-md-8">
                        <label>Email</label>
                        <input type="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group col-md-8">
                        <label>Gender</label>
                        <input type="radio" class="" value="Male" required name="gender">Male
                        <input type="radio" class="" required value="Femlae" name="gender">Female
                    </div>
                    <div class="form-group col-md-8">
                        <label>Hobby</label>
                        <input type="checkbox" class="" value="Reading"  name="hobby[]">Reading
                        <input type="checkbox" class=""  value="Music" name="hobby[]">Music
                        <input type="checkbox" class=""  value="Travelling" name="hobby[]">Travelling
                        <input type="checkbox" class=""  value="Learning" name="hobby[]">Learning
                    </div>
                    <div class="form-group col-md-10">
                        <label>Degree</label>
                        <select class="form-control" name="degree">
                            <option value="">Select Degree</option>
                            <option value="1">BCA</option>
                            <option value="2">BBA</option>
                            <option value="3">B Com</option>
                        </select>
                    </div>
                    <div class="form-group col-md-10">
                        <button name="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>