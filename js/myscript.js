function moveRight() 
{
  var selItem = document.forms[0].leftList.selectedIndex;
  if (selItem == -1) 
  {
      window.alert("You must first select an item on the left side.")
  } else 
  {
      document.forms[0].rightList.add(document.forms[0].leftList[selItem], null);
  }
}

function moveLeft() 
{
  var selItem = document.forms[0].rightList.selectedIndex;
  if (selItem == -1) 
  {
      window.alert("You must first select an item on the left side.")
  } else 
  {
      document.forms[0].leftList.add(document.forms[0].rightList[selItem], null);
  }
}