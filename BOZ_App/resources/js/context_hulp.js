let contextHulpBtn = document.getElementById("contextHulpBtn");
let contextHulp = document.getElementById("contextHulp");

contextHulpBtn.addEventListener('click',()=>{
    contextHulp.style.display = "block";
    contextHulpBtn.style.display = "none";
});

contextHulp.addEventListener('click',()=>{
    contextHulp.style.display = "none";
    contextHulpBtn.style.display = "block";
});