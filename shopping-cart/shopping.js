// Cart and Wishlist arrays to store the selected items
var cart = [];
var wishlist = [];

// Function to add item to the cart
function addToCart(productId) {
    cart.push(productId);
    updateCart();
}

// Function to remove item from the cart
function removeFromCart(productId) {
    var index = cart.indexOf(productId);
    if (index !== -1) {
        cart.splice(index, 1);
    }
    updateCart();
}

// Function to add item to the wishlist
function addToWishlist(productId) {
    wishlist.push(productId);
    updateWishlist();
}

// Function to remove item from the wishlist
function removeFromWishlist(productId) {
    var index = wishlist.indexOf(productId);
    if (index !== -1) {
        wishlist.splice(index, 1);
    }
    updateWishlist();
}

// Function to update the cart UI
function updateCart() {
    var cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';
    for (var i = 0; i < cart.length; i++) {
        var listItem = document.createElement('li');
        listItem.innerHTML = 'Product ' + cart[i] + ' <button onclick="removeFromCart(' + cart[i] + ')">Remove from Cart</button>';
        cartItems.appendChild(listItem);
    }
}

// Function to update the wishlist UI
function updateWishlist() {
    var wishlistItems = document.getElementById('wishlist-items');
    wishlistItems.innerHTML = '';
    for (var i = 0; i < wishlist.length; i++) {
        var listItem = document.createElement('li');
        listItem.innerHTML = 'Product ' + wishlist[i] + ' <button onclick="removeFromWishlist(' + wishlist[i] + ')">Remove from Wishlist</button>';
        wishlistItems.appendChild(listItem);
    }
}