const plusBtn = document.getElementById("plus");
const minusBtn = document.getElementById("minus");
const num = document.getElementById("num");
const submitBtn = document.getElementsByName("submit");
var count = 1;

num.value = 1;

plusBtn.addEventListener('click', function(){
    count = count + 1;
    num.value = count;
});

minusBtn.addEventListener('click', function(){
    count = count - 1;
    num.value = count
});