
const cartItems = [];


function addToCart(itemName, quantity, price) {
  cartItems.push({ itemName, quantity, price });
  updateCartTable();
}


function removeFromCart(index) {
  cartItems.splice(index, 1);
  updateCartTable();
}


function updateCartTable() {
  const cartTable = document.getElementById('cartTable');
  cartTable.innerHTML = `
    <tr>
      <th>Item</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
  `;

  let totalAmount = 0;

  cartItems.forEach((item, index) => {
    const row = cartTable.insertRow(-1);
    const itemNameCell = row.insertCell(0);
    const quantityCell = row.insertCell(1);
    const priceCell = row.insertCell(2);
    const actionsCell = row.insertCell(3);

    itemNameCell.textContent = item.itemName;
    quantityCell.textContent = item.quantity;
    const totalPriceForItem = item.quantity * item.price;
    priceCell.textContent = `₹${totalPriceForItem.toFixed(2)}`;

    actionsCell.innerHTML = `<button onclick="removeFromCart(${index})">Remove</button>`;

    totalAmount += totalPriceForItem;
  });

  const totalPriceDisplay = document.getElementById('totalPriceDisplay');
  totalPriceDisplay.textContent = `Total Price: ₹${totalAmount.toFixed(2)}`;
}


const calculateTotalButton = document.getElementById('calculateTotalButton');
calculateTotalButton.addEventListener('click', updateCartTable);

