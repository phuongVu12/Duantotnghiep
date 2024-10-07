<div class="small-container cart-page">
    <h2>Giỏ hàng của bạn</h2>

    <table>
        <tr>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Mã sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
            <th>Hành động</th>
        </tr>

        <!-- Ví dụ về một sản phẩm trong giỏ hàng -->
        <tr>
            <td>
                <img src="path/to/product-image.jpg" alt="Tên sản phẩm">
            </td>
            <td>Tên sản phẩm 1</td>
            <td style="text-transform: uppercase;">Mã SP001</td>
            <td>
                <input type="number" min="1" value="2">
            </td>
            <td><?php echo number_format(50000,0,',','.').' ₫' ?></td>
            <td><?php echo number_format(100000,0,',','.').' ₫' ?></td>
            <td>
                <button class="delete">Xóa</button>
                <button class="update">Cập nhật</button>
            </td>
        </tr>

        <!-- Thêm nhiều sản phẩm nếu cần -->
    </table>

    <div class="total">
        <a href="path/to/products"><strong>>> Tiếp tục mua hàng</strong></a>
        <a href="path/to/checkout"><button class="empty" type="button">Tiếp tục đặt hàng</button></a>
        <p>Tổng thành tiền: <span><?php echo number_format(100000,0,',','.').' ₫' ?></span></p>
    </div>
</div>
