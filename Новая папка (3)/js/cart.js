
document.addEventListener("DOMContentLoaded", () => {
  const cartItems = document.getElementById("cart-items");
  const totalElem = document.getElementById("total");
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  fetch("data/products.json")
    .then(res => res.json())
    .then(products => {
      let total = 0;
      cart.forEach(id => {
        const item = products.find(p => p.id === id);
        const div = document.createElement("div");
        div.textContent = `${item.name} - ${item.price} so'm`;
        cartItems.appendChild(div);
        total += item.price;
      });
      totalElem.textContent = "Jami: " + total + " so'm";
    });
});
