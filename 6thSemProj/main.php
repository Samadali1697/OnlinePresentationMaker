<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Main|Paron: The New Way To Present</title>
    <link rel="stylesheet" type="text/css" href="css/StyleSheet.css">
    <link rel="stylesheet" type="text/css" href="css/StyleSheet2.css">
  </head>
  <body style="background-color:rgba(255,255,255,0.6);">

    <?php include("menuHead.php"); ?>
    <div class="container">
      <div  class="MainRow">

        <div class="MainRow coll1">
          <p>Toolbox</p>
          <ul>
              <li><a class="active" href="#textbox"><img src="stuff/textbox.png">Textbox</a></li>
              <li><a href="#image"><img src="stuff/image.png">Image</a></li>
              <li><a href="#video"><img src="stuff/video.png">Video</a></li>

          </ul>
        </div>
<!--        ////////////////////////////////////////////////////////////////////////////////////////////////
                        Start of main Work Area code
            ///////////////////////////////////////////////////////////////////////////////////////////////-->
        <div class="MainRow coll2">
          <p>Workarea</p>
          <div class="mainSlide" id="mainSlide" >

            <div class="mHead" style="background-color:red;">

            </div>
            <div class="mBody">

            </div>
          </div>
        </div>

<!--        ////////////////////////////////////////////////////////////////////////////////////////////////
                      Start of main Work Area code
           ///////////////////////////////////////////////////////////////////////////////////////////////-->

        <div class="MainRow coll3" >
          <p>Slides</p>
          <button class="button" type="button" name="button" onclick="addSlide()" >Add Slide</button>
          <div class="allSlidesContainer">
            <ul id="collll3">
                <li id="eachSlideLI1">
                  <p style="font-size:10px; background-color:inherit; border:none;">1</p>
                  <div class="eachSlide" data-value="1" id="eachSlide1">

                    <button type="button" name="button" id="select1" onclick="btnSelect(this)">Select</button>
                    <button type="button" name="button" id="delete1" onclick="btnDelete(this)">Delete</button>
                  </div>
                </li>

              </ul>
            </div>
        </div>
      </div>
    </div>

    <script>


    var clicks = 1;
      function addSlide(){
        clicks += 1;
        document.getElementById('collll3').innerHTML += '<li  id="eachSlideLI'+clicks+'"><p style="font-size:10px; background-color:inherit; border:none;">'+clicks+'</p><div class="eachSlide" data-value="'+clicks+'" id="eachSlide'+clicks+'">   <button type="button" name="button" id="select'+clicks+'" onclick="btnSelect(this)">Select</button> <button type="button" name="button" id="delete'+clicks+'" onclick="btnDelete(this)">Delete</button>     </div></li>';

      }


      /////////////////////for select and delete button events ////////////////////////////
      function btnSelect(obj){
        var id = obj.id;
        var btn = document.getElementById(id);
        var prntDiv = btn.parentNode;

        //alert(prntDiv.innerHTML)
        document.getElementById('mainSlide').innerHTML += prntDiv.innerHTML;
      }
      function btnDelete(obj){
        var id = obj.id;
        var btn = document.getElementById(id);
        var prntDiv = btn.parentNode;
        var liprntDiv = prntDiv.parentNode;
        //alert(liprntDiv.id);
        liprntDiv.parentNode.removeChild(liprntDiv);
      }


      ///////////////////////////////////////////////////////////////////////////////////////

      ////////// start of mouse movement code JQuery //////////////////////////////////////////////
      function mouseXY()
      {
        var X = event.clientX;
        var Y = event.clientY;
        document.getElementById('tt').style.top=0+"px";
        document.getElementById('tt').style.left=0+"px";


        document.getElementById('tt').style.top=Y+"px";
        document.getElementById('tt').style.left=X+"px";
      }
      ////////// end of mouse movement code JQuery //////////////////////////////////////////////

    </script>

  </body>
</html>
