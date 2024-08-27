//UI

const getsearchbtn = document.getElementById('search-btn');
const getsearchbox = document.getElementById('search-box');

getsearchbtn.addEventListener('click',closeopen)

function closeopen(){
    if (getsearchbox.style.display === "none") {
        getsearchbox.style.display = "block";
    } else if (getsearchbox.style.display === "block") {
        getsearchbox.style.display = "none";
    }
    
    
}