 
var sidebar1=document.getElementById('sidebar');
var container=document.getElementById('content');
dragElement(document.getElementById("partition"));

 
function dragElement(elmnt) {
    var pos1 = 0, pos3 = 0  ; 
    elmnt.onmousedown = dragMouseDown;
 

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();    
    pos3 = e.clientX;
    
    document.onmouseup = closeDragElement; 
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();     
    pos1 = pos3 - e.clientX;     
    pos3 = e.clientX;  
      
    if(pos3>=200 && pos3<=1000){
      sidebar1.style.width=(elmnt.offsetLeft - pos1) + "px";  
      container.style.width=  (window.innerWidth-elmnt.offsetLeft - pos1-500 ) + "px"
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";       
    } 
      
  }

  function closeDragElement() { 
    document.onmouseup = null;
    document.onmousemove = null;
  }
}