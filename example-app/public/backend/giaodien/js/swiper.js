/*--------Start Swiper slide side-bar----------- */

var swiper = new Swiper(".slide-swp", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullests: true,
        clickable: true,
    },
    autoplay: {
        delay: 2500,
    },
    loop: true,
});

/*--------End Swiper slide side-bar----------- */

/*-------Start Swpier slide slide_sale---------*/

var swiper = new Swiper(".sale_sec", {
    slidesPerView: 5,
    spaceBetween: 30,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
    breakpoints: {
        1600: {
            slidesPerView: 5,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        700: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        0: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
    },
});

var swiper = new Swiper(".product_swip", {
    slidesPerView: 4,
    spaceBetween: 30,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
    breakpoints: {
        1500: {
            slidesPerView: 5,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        900: {
            slidesPerView: 2,
        },
        700: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        0: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
    },
});

/*-------End Swpier slide slide_sal---------*/

/*JS CLICK USER*/
document.addEventListener("DOMContentLoaded", function () {
    const iconUser = document.querySelector(".icon_user");
    const navBar = document.querySelector(".nav-bar");

    iconUser.addEventListener("click", function (event) {
        // Ngăn chặn sự kiện click truyền đi để không ảnh hưởng đến các phần tử khác
        event.stopPropagation();
        // Đảo ngược trạng thái hiển thị của nav-bar
        navBar.style.display =
            navBar.style.display === "block" ? "none" : "block";
    });

    // Đóng nav-bar khi người dùng click bên ngoài
    document.addEventListener("click", function () {
        navBar.style.display = "none";
    });
});
