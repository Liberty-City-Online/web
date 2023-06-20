// JavaScript kodu
// Örneğin, aktif bağlantıyı işaretleme ve tıklama olayını ekleme
document.addEventListener("DOMContentLoaded", function() {
    var categoryLinks = document.querySelectorAll("nav ul.categories li a");

    categoryLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            var currentActive = document.querySelector("nav ul.categories li a.active");
            if (currentActive) {
                currentActive.classList.remove("active");
            }
            link.classList.add("active");
        });
    });
});
