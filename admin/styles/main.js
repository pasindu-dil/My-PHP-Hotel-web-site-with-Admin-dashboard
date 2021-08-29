const dash = document.getElementById("dashboard");
const ant = document.getElementById("analytics");
const book = document.getElementById("book");
const user = document.getElementById("users");

const dashTab = document.getElementById("dashboardTab");
const anlyTab = document.getElementById("analyticsTab");
const bookTab = document.getElementById("bookingTab");
const userTab = document.getElementById("userTab");

const list = document.getElementsByTagName("li");

dash.className = "active";
dashTab.className = "active";

dash.addEventListener('click', function() {
    for (let i = 0; i < list.length; i++) {
        list[i].classList.remove("active");
    }
    dash.className = "active";
    dashTab.className = "active";
    anlyTab.classList.remove("active");
    bookTab.classList.remove("active");
    userTab.classList.remove("active");
    anlyTab.className = "tabs";
    bookTab.className = "tabs";
    userTab.className = "tabs";
});

ant.addEventListener('click', function(){
    for (let i = 0; i < list.length; i++) {
        list[i].classList.remove("active");
    }
    ant.className = "active";
    anlyTab.className = "active";
    dashTab.classList.remove("active");
    bookTab.classList.remove("active");
    userTab.classList.remove("active");
    dashTab.className = "tabs";
    bookTab.className = "tabs";
    userTab.className = "tabs";
});

book.addEventListener('click', function(){
    for (let i = 0; i < list.length; i++) {
        list[i].classList.remove("active");
    }
    book.className = "active";
    bookTab.className = "active";
    dashTab.classList.remove("active");
    anlyTab.classList.remove("active");
    userTab.classList.remove("active");
    dashTab.className = "tabs";
    anlyTab.className = "tabs";
    userTab.className = "tabs";
});

user.addEventListener('click', function(){
    for (let i = 0; i < list.length; i++) {
        list[i].classList.remove("active");
    }
    user.className = "active";
    userTab.className = "active";
    dashTab.classList.remove("active");
    anlyTab.classList.remove("active");
    bookTab.classList.remove("active");
    dashTab.className = "tabs";
    anlyTab.className = "tabs";
    bookTab.className = "tabs";
});