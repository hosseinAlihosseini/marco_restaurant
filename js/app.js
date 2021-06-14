if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    let removeCartBtn = document.getElementsByClassName('remove-cart-btn');
    for (let i = 0; i < removeCartBtn.length; i++) {
        let button = removeCartBtn[i];
        button.addEventListener('click', removeCartItem)
    }

    let quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (let i = 0; i < quantityInputs.length; i++) {
        let input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    let addCartButtons = document.getElementsByClassName('add-cart-btn')
    for (let i = 0; i < addCartButtons.length; i++) {
        let button = addCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
}

function removeCartItem(event) {
    console.log('clicked')
    let buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal();
}

function quantityChanged(event) {
    let input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    let button = event.target
    let shopItem = button.parentElement.parentElement
    let title = shopItem.getElementsByClassName('food-title')[0].innerText
    let shopItemPrice = button.parentElement
    let price = parseInt(shopItemPrice.getElementsByClassName('cost-food')[0]
        .innerText.replace('تومان', ''));
    console.log(price, title)
    addItemToCart(title, price)
    updateCartTotal()
}


function addItemToCart(title, price) {
    let cartRow = document.createElement('div')
    cartRow.classList.add('detail-food-selected')
    let cartItems = document.getElementsByClassName('cart-section-content')[0]
    let cartNamesItem = cartItems.getElementsByClassName('food-title')
    for (let i = 0; i < cartNamesItem.length; i++) {
        if (cartNamesItem[i].innerText == title) {
            alert('شما قبلا این غذا را انتخاب کرده بودید')
            return
        }
    }
    let cartRowContent = `
        <div class="food-selected-part1">
            <p class="food-title">${title}</p>
            <input class="cart-quantity-input" type="number" value="1">
        </div>
        <div class="food-selected-part2">
            <p class="cost-food">${price} <span style="font-weight: lighter;">تومان</span></p>
            <button class="remove-cart-btn">-</button>
        </div>
    `;
    cartRow.innerHTML = cartRowContent
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('remove-cart-btn')[0]
        .addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0]
        .addEventListener('change', quantityChanged)
}



function updateCartTotal() {
    let cartItem = document.getElementsByClassName('cart-section-content')[0]
    let cartRows = cartItem.getElementsByClassName('detail-food-selected')
    console.log(cartRows)
    let total = 0
    for (let i = 0; i < cartRows.length; i++) {
        let cartRow = cartRows[i]
        let part1 = cartRow.getElementsByClassName('food-selected-part1')[0];
        let part2 = cartRow.getElementsByClassName('food-selected-part2')[0];
        let priceElement = part2.getElementsByClassName('cost-food')[0];
        let quantityCart = part1.getElementsByClassName('cart-quantity-input')[0];
        let price = parseInt(priceElement.innerText.replace('تومان', ''));
        let quantity = quantityCart.value;
        console.log(quantity, price)

        total = total + (price * quantity)
        console.log(cartRows.length)
    }
    document.getElementsByClassName('total-cost-food')[0].innerText = total + 'تومان'
    console.log(total)
}