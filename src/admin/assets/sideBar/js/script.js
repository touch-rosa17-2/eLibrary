
function abc(){
    alert("testing");
}

// show dropdown
var btnClassification = document.getElementById("btnClassification");
var childClassification = document.getElementById("childClassification");
    // down arrow
var downArrow = document.getElementById("downArrow");
// library
var btnLibrary = document.getElementById("btnLibrary");
var childLibrary = document.getElementById("childLibrary");
var downArrowLibra = document.getElementById("downArrowLibra");

// btnClassification.addEventListener("click", function(){
    function showSubClassification(){
    if(childClassification.style.display == "block"){
        childClassification.style.display = "none";
        downArrow.style.transform = 'rotate(90deg)';
        
    }else{
        childClassification.style.display = "block";
        downArrow.style.transform = 'rotate(0deg)';
}
}
    function showSubLibrary(){
        if(childLibrary.style.display == "block"){
            childLibrary.style.display = "none";
            downArrowLibra.style.transform = 'rotate(90deg)';
        }else{
            childLibrary.style.display = "block";
            downArrowLibra.style.transform = 'rotate(0deg)';
        }
    }
//)

// down arrow
let downArrow = document.querySelectorAll(".downArrow");
for(var i=0; i<downArrow.length; i++){
    downArrow[i].addEventListener("click", (e)=>{
        console.log(e);
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showChild");
    });
}


// reponsive sidebar
let sidebar = document.querySelector(".container-sideMenu");
let sidebarBtn = document.querySelector(".bx-menu");
sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
});