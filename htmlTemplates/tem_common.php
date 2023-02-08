  

 <!--
 ********************************************
 for showing spinner and mask when Ajax is called
 ********************************************
-->
<div id='loading' class="nodisplay box" style='background-color:white;width:200px;'>
  <div id='loadmsg' style='margin-bottom:6px'>Loading, please wait</div>
  <img src="res/spinner.gif">
</div>
<div id='loadingmask' class="nodisplay"></div>


 <!--
   ********************************************
  <div>s for showing message in dialog box, either with OK or with Yes No 
  and the background mask for this dialog
   ********************************************
  -->
   
  <div id="msgbox" class="nodisplay mbox">
    <br>
    <span class="bmessage"></span>
    <br><br>
    <p id='msgButton' class='nodisplay'> <button>OK</button> </p>
    <p id='yesnoButtons' class='nodisplay'>
      <button style='margin-right:10px;'>Yes</button>
      <button>No</button>
    </p>
  </div>
    
  <div id="msgboxmask" class="nodisplay"></div>

