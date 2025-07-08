
document.addEventListener("DOMContentLoaded", () => {
  fetch("data/products.json")
    .then(res => res.json())
    .then(data => {
      const menu = document.getElementById("menu");
      data.forEach(item => {
        const div = document.createElement("div");
        div.innerHTML = `
          <h3>${item.name}</h3>
          <img src="${item.image}" width="150"><br>
          <p>${item.price} so'm</p>
          <button onclick="addToCart('${item.id}')">Qo'shish</button>
        `;
        menu.appendChild(div);
      });
    });
});

function addToCart(id) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.push(id);
  localStorage.setItem("cart", JSON.stringify(cart));
  alert("Savatchaga qo‘shildi!");
}
