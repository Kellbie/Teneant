// function myButton() {
//   document.getElementById("first-form").style.display = "none";
//   document.getElementById("payment").style.display = "block";
// }
// function click(){
//   // var first = document.getElementById("cost");
//   // var second = document.getElementById("cost2");
//   // var third = document.getElementById("cost3");
//   // var fourth = document.getElementById("cost4");
//   // var fifth = document.getElementById("cost5");
//   document.getElementById("myText").value = "Johnny Bravo";

// }

// const field1 = document.getElementById("one");
// const field2 = document.getElementById("two");
// const field3 = document.getElementById("three");
// const submitBtn = document.getElementById("btnFirst");

// submitBtn.addEventListener("click", function kella() {
//   if (field1.value === "" || field2.value === "" || field3.value === "") {
//     alert("All fields are required!");
//   } else {
//     document.getElementById("div-two").style.display = "block";
//   }
// });

document.getElementById("btnFirst").addEventListener("click", function() {
  let formContainer = document.getElementById("two-test");
  let form1 = document.getElementById("div-two");
  let newForm = form1.cloneNode(true);
  newForm.id = "form" + (formContainer.childNodes.length + 1);
  formContainer.appendChild(newForm);
});
