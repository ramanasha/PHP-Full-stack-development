<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="test4.php" method="post">
      <fieldset style ="width:400px;">
        <p>My Info</p>
      <label for="fname">Full Name :</lable>
        <input  type="text" name="fname" id="fname" /><br><br>
      <label>Last Name : <input  type="text" name="lname" id="lname" /></label><br><br>
      <label>Please select your gender:
      <input type="radio" name="gender" value = "Male" id="gender"/> Male</label>
      <label><input type="radio" name="gender" value = "Female" id="gender"/> Female<br><br></label>
      <label> Address : <textarea wrap="150" type="text" name="address" id="address"></textarea><br><br></label>
      <input type="submit" value="Submit"/>
    </fieldset>
    </form>
  </body>
</html>
