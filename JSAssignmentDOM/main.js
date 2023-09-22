"use strict";
const parent = document.getElementById("item-list");
const addBtn = document.getElementById("add-button");
const removBtn = document.getElementById("remove-button");
const count = document.getElementById("count");
let cnt = 0;

addBtn.addEventListener("click", function () {
  let item = document.getElementById("new-item").value;
  if (item != " ") {
    let list_item = document.createElement("li");
    list_item.innerHTML = item;
    parent.appendChild(list_item);
    let delBtn = document.createElement("button");
    delBtn.textContent = "delete";
    list_item.appendChild(delBtn);
    document.getElementById("new-item").value = "Enter a new item";
    cnt++;
    count.innerText = cnt;
  }
});

removBtn.addEventListener("click", function () {
  const par = document.querySelectorAll("li:not(.checked)");
  if (par.length > 0) {
    par[par.length - 1].remove();
    cnt--;
    count.innerText = cnt;
  }
});
parent.addEventListener("click", function (e) {
  if (e.target.tagName === "LI") {
    if(e.target.firstChild!=e.target.lastChild){
        e.target.lastChild.remove();
    }
    e.target.style.backgroundColor = "#f0afb2";
    e.target.classList.toggle("checked");
  } else if (
    e.target.tagName === "BUTTON" &&
    !e.target.parentElement.classList.contains("checked")
  ) {red
    e.target.parentElement.remove();
    cnt--;
    count.innerText = cnt;
  }
});






 
 

