// Setting Year
var currentYearElement = document.getElementById("currentYear");
var currentYear = new Date().getFullYear();
currentYearElement.textContent = currentYear;

// Menghilangkan alert setelah 5 detik
setTimeout(function () {
    $(".alert").fadeOut("slow");
}, 5000);
