// Fonction pour afficher les éléments du panier
function displayCartItems() {
    // Ici, vous pouvez récupérer les éléments du panier depuis votre backend
    const cartContainer = document.getElementById('cart-items');
    

    // Notez que les éléments du panier peuvent être dynamiquement générés ici
}

// Afficher les éléments du panier au chargement de la page
window.onload = function() {
    displayCartItems();
};

// Gestion du clic sur le bouton "Acheter"
document.getElementById('checkout-btn').addEventListener('click', function() {
    const selectedPaymentMethod = document.querySelector('input[name="payment"]:checked');
    if (selectedPaymentMethod) {
        const paymentMethod = selectedPaymentMethod.value;
        alert(`Achat effectué avec ${paymentMethod} !`);
    } else {
        alert('Veuillez choisir un mode de paiement.');
    }
});
