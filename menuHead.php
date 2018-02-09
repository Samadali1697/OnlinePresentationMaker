<div class="menuHeader container">
  <div class="MenuBar" style="float:left; width:100%; background-color: rgba(0,0,0,0.8); border: 1px solid #0d4688;">

      <ul>
          <li><a class="active" href="#file"><img src="stuff/file.png" style="width:18px;"></a></li>
          <li><a href="#save"><img src="stuff/save.png" style="width:18px;"></a></li>
          <li><a href="#undo"><img src="stuff/undo.png" style="width:18px;"></a></li>
          <li><a href="#redo"><img src="stuff/redo.png" style="width:18px;"></a></li>
          <li style="float:right; border-right: 1px solid #000;"><a href="?logout"><img src="stuff/logout.png" style="padding-left:5px; width:18px; float:right;">Logout</a></li>
          <li style="margin-right:auto; float:right; background-color:#0d4688;"><a href="#present"><img src="stuff/play.png" style="padding-left:5px; width:18px; float:right;">Present</a></li>


      </ul>
  </div>
</div>

<?php

  if(isset($_GET['logout'])){
    //session_start();
    //session_destroy();
    header("location: index.php");
  }
?>
