<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    
    <h2>Registration Form</h2>
    <div class="container">
        <form action="connection.php" method="post">
            <div>
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Enter your name">
            </div>

            <div>
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Enter your email">
            </div>

            <div class="gendercontainer">
                <label for="">Gender</label>
                <input class = "gender1" type="radio" name="gender" value="m">Male</input>
                <input class = "gender1" type="radio" name="gender" value="f">Female </input>            
            </div>

            <div>
                <label for="">Mobile Phone</label>
                <input type="text" name="mobile" placeholder="Enter your mobile number"/>
            </div>

            <div>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Enter your password"/>
            </div>

            <div class="btn">
                <button type="button">Submit data</button>
            </div>
        </form>
    </div>
    
</body>
</html>