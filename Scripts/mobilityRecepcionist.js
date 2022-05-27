let btnAddDate = document.getElementById("btnAddDateScreen");
let btnUpdateDate = document.getElementById("btnAUpdateDateScreen");
let btnSeeDate = document.getElementById("btnSeeDateScreen");
let btnDelete = document.getElementById("btnDeleteDateScreen");
let btnAddClient = document.getElementById("btnAddClientScreen");
let btnUpdateClient = document.getElementById("btnUpdateClientScreen");

btnAddDate.addEventListener(
  "click",
  () => (location.href = "../Screens/recepcionistScreen.php")
);
btnUpdateDate.addEventListener(
  "click",
  () => (location.href = "../Screens/recepcionistUpdateScreen.php")
);
btnSeeDate.addEventListener(
  "click",
  () => (location.href = "../Screens/recepcionistAddClient.php")
);
btnDelete.addEventListener(
  "click",
  () => (location.href = "../Screens/recepcionistDeleteScreen.php")
);
btnAddClient.addEventListener(
  "click",
  () => (location.href = "../Screens/recepcionistAddClient.php")
);
btnUpdateClient.addEventListener(
  "click",
  () => (location.href = "../Screens/recepcionistUpdateClient.php")
);
