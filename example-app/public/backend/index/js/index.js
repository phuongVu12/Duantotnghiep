document.querySelectorAll(".menu-link li").forEach((item) => {
    item.addEventListener("mouseover", function () {
        // Xóa lớp 'active' khỏi tất cả các phần tử
        document
            .querySelectorAll(".menu-link li")
            .forEach((li) => li.classList.remove("active"));

        // Thêm lớp 'active' cho phần tử hiện tại
        this.classList.add("active");
    });

    item.addEventListener("mouseleave", function () {
        // Loại bỏ lớp 'active' để bắt đầu hiệu ứng biến mất
        this.classList.remove("active");
    });
});
