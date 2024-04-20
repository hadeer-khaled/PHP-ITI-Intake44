<?php

    if(isset($_GET["errors"])){
        $errors = json_decode($_GET["errors"], true);
    }

    if(isset($_GET['old_data'])){
        $old_data = json_decode($_GET["old_data"], true);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <form action="done.php" method="post">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname"
            value="<?php echo $old_data['firstname']? $old_data['firstname']: ''; ?>"
            >
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['firstname']? $errors["firstname"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname"
            value="<?php echo $old_data['lastname']? $old_data['lastname']: ''; ?>">
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['lastname']? $errors["lastname"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username"
            value="<?php echo $old_data['firstname']? $old_data['firstname']: ''; ?>"
            >
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['username']? $errors["username"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" class="form-control" id="department" name="department"
            value="<?php echo $old_data['department']? $old_data['department']: ''; ?>">
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['department']? $errors["department"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" 
            value="<?php echo $old_data['address']? $old_data['address']: ''; ?>"
            ></textarea>
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['address']? $errors["address"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label for="country">Country:</label>
            <select class="form-control" id="country" name="country">
                <option value="USA">Egypt</option>
                <option value="UK">UK</option>
                <option value="Canada">US</option>
            </select>
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['country']? $errors["country"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label>Gender:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="male" name="gender" value="male"
                <?php echo $old_data['gender'] =="male"? "checked" : ""; ?>
                >
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="female" name="gender" value="female"
                <?php echo $old_data['gender'] =="female"? "checked" :""; ?>
                >
                <label class="form-check-label" for="female">Female</label>
            </div>
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['gender']? $errors["gender"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label>Skills:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="html" name="skills[]" value="HTML">
                <label class="form-check-label" for="html">PHP</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="css" name="skills[]" value="CSS">
                <label class="form-check-label" for="css">MySQL</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="javascript" name="skills[]" value="JavaScript">
                <label class="form-check-label" for="javascript">JavaScript</label>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
