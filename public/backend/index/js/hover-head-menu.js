document.addEventListener("DOMContentLoaded", () => {
    // Lấy tất cả các phần tử menu-item
    const menuItems = document.querySelectorAll(".menu-item");

    const overlay = document.createElement("div");
    overlay.className = "overlay";
    document.body.appendChild(overlay);
    menuItems.forEach((menuItem) => {
        const hoverMenu = menuItem.querySelector(".hover-menu");

        // Khi di chuột vào menu-item
        menuItem.addEventListener("mouseenter", () => {
            hoverMenu.style.opacity = "1"; // Hiển thị hover-menu
            hoverMenu.style.visibility = "visible"; // Đảm bảo phần tử được hiển thị
            hoverMenu.style.transform = "translateY(0)"; // Đưa phần tử về vị trí gốc
        });

        // Khi di chuột ra khỏi menu-item
        menuItem.addEventListener("mouseleave", () => {
            hoverMenu.style.opacity = "0"; // Ẩn hover-menu
            hoverMenu.style.visibility = "hidden"; // Ẩn phần tử
            hoverMenu.style.transform = "translateY(10px)"; // Đưa phần tử xuống một chút để tạo hiệu ứng trượt
        });

        // Khi di chuột vào hover-menu để tránh việc hover-menu bị ẩn khi di chuyển chuột ra khỏi menu-item
        hoverMenu.addEventListener("mouseenter", () => {
            hoverMenu.style.opacity = "1"; // Đảm bảo hover-menu vẫn hiển thị
            hoverMenu.style.visibility = "visible"; // Đảm bảo phần tử được hiển thị
            hoverMenu.style.transform = "translateY(0)"; // Đưa phần tử về vị trí gốc
        });

        // Khi di chuột ra khỏi hover-menu
        hoverMenu.addEventListener("mouseleave", () => {
            hoverMenu.style.opacity = "0"; // Ẩn hover-menu
            hoverMenu.style.visibility = "hidden"; // Ẩn phần tử
            hoverMenu.style.transform = "translateY(10px)"; // Đưa phần tử xuống một chút để tạo hiệu ứng trượt
        });
    });
});
