 // dropdown list 
//******************* */

let dropdownList = document.getElementById("dropdown-list");
let dropdownBtn = document.getElementById("dropdown-btn");
dropdownBtn.addEventListener('click',()=>{
     dropdownList.classList.toggle('dropdown-active');
 });
