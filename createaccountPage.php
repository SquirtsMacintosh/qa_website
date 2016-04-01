<html>
   <head>
      <link rel="stylesheet" type="style/css" href="style/flexing.css">
      <link rel="stylesheet" type="text/css" href="style/webstyle.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script src="res/parsley.min.js"></script>
   </head>

   <div align="center">
      <img src="res/QA_logo.png">
   </div>

   <!--*********** Form for creating a user ***********-->
   <div id="create-accounts" class="form-container">
      <form method="POST" action="php/createaccount.php" align=center data-parsley-validate>
         <div style="list-style-type:none" class="flex-user">
            <div class="username-input">
               <label>Create Username:</label>
               <input class="createIn" type="text" name="myUser" data-parsley-errors-container="#error-block-user" data-parsley-required data-parsley-length="[6,20]">
            </div>
         </div>
         <div class="flex-email">
            <div class="email-input">
               <label>Email:</label>
               <input class="createIn" type="text" name="myEmail" data-parsley-errors-container="#error-block-user" data-parsley-required data-parsley-type="email">
            </div>
         </div>
         <div class="flex-pass">
            <div class="pass-input">
               <label>Enter Password:</label>
               <input class="createIn" type="password" name="myPass" data-parsley-errors-container="#error-block-user" data-parsley-required data-parsley-length="[6,30]">
            </div>
         </div>
         <div class="flex-repass">
            <div class="repass-input">
               <label>Retype Password:</label>
               <input class="createIn" type="password" name="samePass" data-parsley-errors-container="#error-block-user" data-parsley-required="[6,30]">
            </div>
         </div>
         <div class="button-container" align="center">
            <input class="myButton" type="submit" name="submit2" value="Create">
            <button class="myButton" onclick="window.location='loginPage.php'" type="submit">Back</button>
         </div>
         <div class="clearfix"></div>
         <div class="errors"><ul class="error-list"></ul></div>
      </form>
   </div>
</html>
