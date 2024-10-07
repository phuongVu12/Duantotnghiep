document.querySelectorAll(".in-pic").forEach((item) => {
    item.addEventListener("mouseover", () => {
        item.querySelector("img").style.transform = "scale(1.01)"; // Phóng to ảnh 10%
    });

    item.addEventListener("mouseout", () => {
        item.querySelector("img").style.transform = "scale(1)"; // Quay lại kích thước bình thường
    });
});
