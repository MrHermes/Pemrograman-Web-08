const overviews = document.querySelectorAll("table tbody tr td button.overview");

for(let i = 0; i < overviews.length; i++){
    overviews[i].style.backgroundColor = "red";
}

// overviews.forEach(overview => {
//   overview.addEventListener('click', () => {
//     console.log("+++");
//     var modal = overview.nextElementSibling;
//     modal.style.display = 'block';

//     const cancel = document.querySelector(".cancel");
//     cancel.addEventListener('click', () => {
//       modal.style.display = 'none';
//     });
//   });
// });
