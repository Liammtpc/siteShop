let product = document.getElementById("product");
let bloge = document.getElementById("bloge");
let opinin = document.getElementById("opinin");
let contact = document.getElementById("contact");
let inform = document.getElementById("inform");
let buy = document.getElementById("buy");
console.log(product);
function user() {
  inform.style.display = "flex";
  buy.style.display = "none";
}
function buys() {
  inform.style.display = "none";
  buy.style.display = "block";
}
function products() {
  product.style.display = "flex";
  bloge.style.display = "none";
  opinin.style.display = "none";
  contact.style.display = "none";
}
function bloges() {
  product.style.display = "none";
  bloge.style.display="flex";
  opinin.style.display = "none";
  contact.style.display = "none";
}
function opinins() {
  product.style.display = "none";
  bloge.style.display = "none";
  opinin.style.display = "flex";
  contact.style.display = "none";
}
function contacts() {
  product.style.display = "none";
  bloge.style.display = "none";
  opinin.style.display = "none";
  contact.style.display = "flex";
}