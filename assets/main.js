document.addEventListener("DOMContentLoaded", () => {

    // Add to cart
    document.querySelectorAll(".add-to-cart").forEach(btn => {
        btn.addEventListener("click", () => {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            cart.push({
                name: btn.dataset.name,
                price: parseFloat(btn.dataset.price)
            });
            localStorage.setItem("cart", JSON.stringify(cart));
            alert("Toegevoegd aan winkelmandje");
        });
    });

    // Show cart
    const cartItems = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");

    if (cartItems) {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        let total = 0;

        cart.forEach(item => {
            total += item.price;
            cartItems.innerHTML += `<p>${item.name} - €${item.price}</p>`;
        });

        cartTotal.innerText = "Totaal: €" + total;
    }

    // Filters
    document.querySelectorAll(".filter").forEach(filter => {
        filter.addEventListener("change", () => {
            const active = [...document.querySelectorAll(".filter:checked")].map(f => f.value);
            document.querySelectorAll(".product-card").forEach(card => {
                card.style.display =
                    active.length === 0 || active.includes(card.dataset.category)
                        ? "block" : "none";
            });
        });
    });

});
