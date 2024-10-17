// document.addEventListener("DOMContentLoaded", function () {
//     const mainScreen = document.getElementById("mainScreen");
//     const newsScreen = document.getElementById("newsScreen");

//     const showNewsScreenBtn = document.getElementById("showNewsScreen");
//     const showMainScreenBtn = document.getElementById("showMainScreen");

//     if (showNewsScreenBtn) {
//         showNewsScreenBtn.addEventListener("click", function (event) {
//             event.preventDefault();

//             // Ana ekranı kaydırarak gizle, haberler ekranını kaydırarak göster
//             mainScreen.classList.add("slide-out-left");
//             newsScreen.classList.remove("hidden");
//             newsScreen.classList.add("slide-in-right");

//             // Animasyon sonrası sınıfları temizle
//             mainScreen.addEventListener('animationend', function() {
//                 mainScreen.classList.add("hidden");
//                 mainScreen.classList.remove("slide-out-left");
//                 newsScreen.classList.remove("slide-in-right");
//             }, { once: true });
//             swiper.update();
//             swiper.setTranslate(0, 0); // Swiper'ı hemen doğru pozisyona yerleştirir

//             // Eğer Swiper anlık olarak tekrar hesaplama yaparsa, refresh'i manuel olarak tetikleyin
//             setTimeout(() => {
//                 swiper.update();
//                 swiper.setTranslate(0, 0);
//             }, 100);
//         });
//     }

//     if (showMainScreenBtn) {
//         showMainScreenBtn.addEventListener("click", function (event) {
//             event.preventDefault();

//             // Haberler ekranını kaydırarak gizle, ana ekranı kaydırarak göster
//             newsScreen.classList.add("slide-out-right");
//             mainScreen.classList.remove("hidden");
//             mainScreen.classList.add("slide-in-left");

//             // Animasyon sonrası sınıfları temizle
//             newsScreen.addEventListener('animationend', function() {
//                 newsScreen.classList.add("hidden");
//                 newsScreen.classList.remove("slide-out-right");
//                 mainScreen.classList.remove("slide-in-left");
//             }, { once: true });
//         });
//     }

// });
