
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="wrapper rounded bg-white">

<div class="h3">Registration Form</div>

<form action="insert.php" method="POST">
    <div class="form">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>First Name</label>
                <input type="text" name="fname"  class="form-control" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Last Name</label>
                <input type="text" name="lname" class="form-control" required>
            </div>
        
        
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Birthday</label>
                <input type="date" name="bdate" class="form-control" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Gender</label>
                <div class="d-flex align-items-center mt-2">
                    <label class="option">
                        <input type="radio" name="gender" value="male" name="radio">Male
                        <span class="checkmark"></span>
                    </label>
                    <label class="option ms-4">
                        <input type="radio" name="gender" value="female" name="radio">Female
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        
        
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Phone Number</label>
                <input type="tel" name="number" class="form-control" required>
            </div>
        
        <div class=" my-md-1 my-3" style="width: 400px;">
            <label>Subject</label>
            <select name="subject" id="sub" required>
                <option value="" selected hidden>Choose Option</option>
                <option value="    ">    </option>
                <option value="A/C">A/C</option>
                <option value="Sata">Stat</option>
                <option value="B.A">B.A</option>
                <option value="Eco">Eco</option>
            </select>

            <button type="submit" class="btn btn-success"> <a href="addsubject.php"> Add Subject </a></button>

        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block">submit</button>
    </div>
</form>

</div>
</body>
</html>