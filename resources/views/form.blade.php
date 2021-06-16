<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Form Validation in Laravel</title>
    
    <style>
    form {
    border: 1px solid #1A33FF;
    background: #ecf5fc;
    padding: 40px 50px 45px;
    font: Arial;
    }

    label {
    font-weight: 600;
    }

    .submit{
        color: red;
        font-weight: 400;
        display: block;
        padding: 6px 0;
        font-size: 14px;
    }



    </style>
  
</head>

<body>
        
<form action="/action_page.php">
  <label>Name:</label><br>
  <input type="text" id="name" name="name"><br><br>
  
  <label>Username:</label><br>
  <input type="text" id="username" name="user"><br><br>

  <label>Date of birth:</label><br>
  <input type="date" id="dob" name="Date of birth"><br><br>

  <label>email:</label><br>
  <input type="email" id="email" name="email"><br><br>

  <label>phone:</label><br>
  <input type="text" id="phone" name="phone"><br><br>

  <label>NIC:</label><br>
  <input type="text" id="NIC" name="NIC"><br><br>

  <label>Gender:</label><br>
  <input type="text" id="Gender" name="Gender"><br><br>

  <label>Password:</label><br>
  <input type="password" id="Password" name="Password"><br><br>

  <label>Reenter password:</label><br>
  <input type="password" id="rePassword" name="rePassword"><br><br>




  <input type="submit" value="Submit" id="submit">
</form>
    
</body>

</html>