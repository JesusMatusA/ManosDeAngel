let btnAddDate = document.getElementById("btnAddDateScreen");
let btnUpdateDate = document.getElementById("btnAUpdateDateScreen");
let btnDelete = document.getElementById("btnDeleteDateScreen");
let btnAddClient = document.getElementById("btnAddClientScreen");
let btnUpdateClient = document.getElementById("btnUpdateClientScreen");
let btnSeeDate = document.getElementById("btnSeeDateScreen");

btnAddDate.addEventListener(
    "click",
    () => (location.href = "../recepcionistScreens/firstScreen.php")
);
btnAddClient.addEventListener(
    "click",
    () => (location.href = "../recepcionistScreens/AddClientScreen.php")
);
btnUpdateClient.addEventListener(
    "click",
    () => (location.href = "../recepcionistScreens/UpdateClientScreen.php")
);
btnSeeDate.addEventListener(
    "click",
    () => (location.href = "../recepcionistScreens/SeeDateScreen.php")
);
