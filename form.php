<!DOCTYPE html>
<html>
    <head>
        <title>Registrations for Alumni</title>
        <link rel="stylesheet" type="text/css" href="styles.css">

    </head>
    <body >
       <center>
        <div style="font-color:white">
        <h1 align="center"> REGISTRATIONS FORM</h1>
        <form method="post" action="connect.php"   >
            <label for="Firstname" ></label>
              FIRST NAME:
               <input type="text" name="Firstname" size="20" id="Firstname" maxlength="30" required><hr>
            <label for="Lastname" last name></label>
              LAST NAME :
               <input type="text" name="Lastname" size="20" maxlength="30"> <hr>
            <label for="branch" branch></label>
                EMAIL :
            <input type="email" name="email" size="23" maxlength="30" required><hr>
            <label for="psyr" pass year></label>
             
            <h2>Personal Details</h2>
            
            <p><label>GENDER : </label>
            <input type="radio" name="gender" value="f" unchecked>female
            <input type="radio" name="gender" value="m" unchecked>male<hr></p>
          
            <label for="City">Choose a City:</label>

<select name="city" id="city">
  <option value="nagpur">Nagpur</option>
  <option value="mumbai">Mumbai</option>
  <option value="pune">Pune</option>
  <option value="delhi">Delhi</option>
</select><hr>
           
            
            <input type="submit" align="center"><input type="reset" align="center">

            </center>
</div>

    </body>
</html>