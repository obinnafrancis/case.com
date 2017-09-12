function moveRight() {
  var selItem = document.forms[0].leftList.selectedIndex;//This reads the selected item in the left list and stores it inn the variable selItem
  if (selItem == -1) {
      window.alert("You must first select an item on the left side.")// a popup alert when you try to move without selecting any item
  } else {
      codex();
      document.forms[0].rightList.add(document.forms[0].leftList[selItem], null);/// this part appends the selected item to the right List
      
  }
}

function moveLeft() {
  var selItem = document.forms[0].rightList.selectedIndex;
  if (selItem == -1) {
      window.alert("You must first select an item on the Right side.")
  } else {
      document.forms[0].leftList.add(document.forms[0].rightList[selItem], null);
  }
}
function codex() {
  var sel = document.getElementById('elementId').selectedIndex;
  if (sel == -1){
     window.alert("You must first select an item on the left side.");
  }else{
    var sel2 = document.getElementById('elementId');
    var text= sel2.options[sel2.selectedIndex].text;
    //window.alert("yes"+text);
    document.getElementById('two').value += '['+text+'] ';
  }
}