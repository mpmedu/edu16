  <!--
   ********************************************
  The html for the file explorer, needed to open files on the server
   ********************************************
  -->
  <div id="myExplorer" class="box nodisplay">
  <div id = "itemPopup" class='nodisplay'></div>
  <div class="myExp_div1" style="margin:0 15px;" >
    <h3 class="myExp_h3_cls1">Folders</h3>
    <div id="folders_div" class="myExp_div2"></div>
    <p><button style="margin-top:10px;" >Reset</button></p>
  </div>
  <div class="myExp_div1" style="margin-left:0; margin-right:15; float:right;">
    <h3 class="myExp_h3_cls1">Files</h3>
    <div id="files_div" class="myExp_div2"></div>
    <p style="margin-bottom:0">Filename: <input id="fn_input" type="text" disabled="true" style="width:170px; padding-left:3px; margin:5px 0px 8px 0; color:black;"></p>
    <p style="float:right"><button id="func1">Open</button><button id="canc1">Cancel</button> </p>
  </div>
  <div style="clear:both"></div>
</div>

   <!--
   ********************************************
  <svg> for plus and minus icons to expand or contract folders
   ********************************************
  -->
  <div id='tem_plusMinus' class='nodisplay'>
    <svg  width=14 height=18 data-closed=true>
      <rect class='inbox'  x="2" width="9" y="5" height="9" fill="#666" />
      <rect class='inbox'  x="3" width="7" y="6" height="7" fill="#fff" />
      <line class='inbox' x1="4" x2="9" y1="10" y2="10" stroke="#000" stroke-width="2"  />
      <line class='inbox' x1="4" x2="9" y1="11" y2="11" stroke="#fff" stroke-width="2"  />
      <line class='inbox down' y1="7" y2="12" x1="7" x2="7" stroke="#000" stroke-width="2"  />
      <line class='inbox down' y1="7" y2="9" x1="8" x2="8" stroke="#fff" stroke-width="2"  />
      <line class='inbox down' y1="10" y2="12" x1="8" x2="8" stroke="#fff" stroke-width="2"  />
    </svg>
  </div>
