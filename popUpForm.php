

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>

        <!-- the code below has the login signup details-->
        <div class="tab">
          <button class="tablinks" onclick="showForm(event, 'Login')">Login</button>
          <button class="tablinks" onclick="showForm(event, 'SignUp')" style="border-left:1px solid white;">Sign Up</button>
        </div>

        <div id="Login" class="tabcontent">
          <form action="databaseStuff/login.php" method="post">

            <div class="FormText">
              <label><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>


              <!-- <input type="checkbox" checked="checked"> Remember me -->
            </div>

            <div class="FormFooter" style="background-color:#f1f1f1">
              <button class="button" type="submit">Login</button>
              <button id="formCancelButton" type="button" class="button" onclick="cancelForm()">Cancel</button>
            </div>
          </form>
        </div>

        <div id="SignUp" class="tabcontent">
          <form  action="databaseStuff/signup.php" method="post">

            <div class="FormText">
              <label><b>Email</b></label>
              <input type="text" placeholder="Enter email " name="uname" required>

              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pswSignUp" id="pass" required>

              <label><b>Confirm Password</b></label>
              <input type="password" placeholder="Confirm Password" name="pswConfirmSignUp" id="confpass" onkeyup="passComparisionFun()" required>
              <label id="passAuthenticator" style="display:none; width:100%; text-align:center;"><b>Confirm Password</b></label>
            </div>
            <div class="FormFooter" style="background-color:#f1f1f1">
              <button class="button" type="submit">Sign Up</button>
            </div>
          </div>
          </form>


      <!-- the code above have the login signup details-->
    </div>

</div>

<script>
function passComparisionFun(){
  //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass');
    var pass2 = document.getElementById('confpass');

    //Store the Confimation Message Object ...
    var message = document.getElementById('passAuthenticator');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.display = "block";
        message.style.color = goodColor;
        message.innerHTML = "Passwords Matched!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.display = "block";
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}

// Get the modal
  var modal = document.getElementById('myModal');

// Get the button that opens the modal
  var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  var btnCancel = document.getElementById("formCancelButton");
// When the user clicks the button, open the modal
  btn.onclick = function() {
    modal.style.display = "block";
  }

// When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

// When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  btnCancel.onclick = function(){
    modal.style.display = "none";
  }
</script>


<script>
function showForm(evt, formName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(formName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
