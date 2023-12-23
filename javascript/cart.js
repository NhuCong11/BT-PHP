function displayItemsFromLocalStorage(key) {
    // Lấy dữ liệu từ localStorage
    let items = JSON.parse(localStorage.getItem(key));
    let total = 0;
    const submitBtn = document.querySelector(".form-submit");
    const messageCart = document.getElementById("message-cart");

    // Kiểm tra xem có sản phẩm nào trong giỏ hàng hay không
    if (items && items.length > 0) {
        submitBtn.removeAttribute("disabled");
        messageCart.style.display = "none";
        // Duyệt qua từng sản phẩm và tạo HTML
        items.forEach((item) => {
            const element = document.createElement("div");
            element.innerHTML = `
                <div class="card-item-left">
                    <img src=${item.img} alt="" class="item-img" />
                    <div class="item-info">
                        <div class="item-name">${item.title} (M)</div>
                        <div class="item-customize">70% đường,100% đá,</div>
                        <div class="item-total">
                            <span class="item-total-price ">${(
                                item.price * item.quantity
                            ).toFixed(3)}đ</span>
                        </div>
                    </div>
                </div>`;
            // Thêm phần tử mới vào div có class là 'product'
            document.querySelector(".product").appendChild(element);

            // Tính tổng tiền
            total += item.price * item.quantity;
        });

        // Hiển thị tổng tiền
        const totalElement = document.createElement("div");
        totalElement.innerHTML = `<h3 class="total">Tổng tiền: ${total.toFixed(
            3
        )}đ</h3>`;
        document.querySelector(".product").appendChild(totalElement);
    }
}

// Gọi hàm khi trang web được tải
window.addEventListener("DOMContentLoaded", () =>
    displayItemsFromLocalStorage("cart_data")
);
