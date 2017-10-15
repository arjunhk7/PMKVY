  <?php
 include "uid.php";

  ?>

  <html>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <body>

  <form action="signup.php" method="POST" id="signup">
   <input type="number" name="uid" placeholder="<?php echo $row['uuid']; ?>" disabled="true" /><br></br>
  <input type="text" name="fname" placeholder="<?php echo $row['Fname']; ?>" disabled="true" /><br></br>
  <input type="text" name="lname" placeholder="<?php echo $row['Lname']; ?>" disabled="true" /><br></br>
  <input type="date" name="dob" value="<?php echo $row['DOB']; ?>" disabled="true" /><br></br>
  <input type="text" name="addr" placeholder="<?php echo $row['Address']; ?>" disabled="true" /><br></br>
  <input type="text" name="dis" placeholder="<?php echo $row['District']; ?>" disabled="true" /><br></br>
  <input type="text" name="state" placeholder="<?php echo $row['State']; ?>" disabled="true" /><br></br>
  <input type="number" name="pin" placeholder="<?php echo $row['Pin']; ?>" disabled="true" /><br></br>

  <input type="number" name="mob" placeholder="<?php echo $row['Phone']; ?>" disabled="true" /><br></br>
  <input type="text" name="gender" placeholder="<?php echo $row['Gender']; ?>" disabled="true" /><br></br>
  <input type="submit" name="Next" value="NEXT" id= "sign"/><br></br>

  </form>
  </body>

  </html>
