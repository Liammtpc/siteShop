let page = document.getElementById("info");
let ok = false;
function display() {
  if (ok == false) {
    page.style.opacity = "1";
    ok = true;
  } else {
    page.style.opacity = "0";
    ok = false;
  }
}
const numElement = document.getElementById("number");
let num = parseInt(numElement.value);
function minis() {
  num--;
  numElement.value = num;
}

function pluse() {
  num++;
  numElement.value = num;
}
let parent, child;
parent = document.getElementById("bag");
child = document.getElementById("sp1");
child.innerHTML = parent.childElementCount;
