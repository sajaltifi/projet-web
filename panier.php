<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - Parapharmacie</title>
    <link rel="stylesheet" href="panier.css">
</head>
<body>
    <header><img src="rivaderm images\back.PNG" ></header>
    <div class="tete">
    <a href="parapharmcie.php"><strong>Accueil</strong></a>
      <a href="produits.php"><strong>Nos produits</strong></a>
      <a href="sign in.php"><strong>Mon compte</strong></a>
      <a href="conseil.php"><strong>Nos conseils</strong> </a>
      <a href="test contact.php"><strong>Contact</strong></a>
      <a href="a propos.php"><strong>A propos</strong></a>
    </div>
    <br>
    <div class="bordure"></div>
    <br>
    <br>
        <span style="text-align: center;"><h1>Mon Panier</span></h1>
    <div id="cart-items">
        <!-- Contenu du panier sera affiché ici -->
    </div>
    <div class="cart-icon">
        <img src="rs/panier.webp" alt="Panier">
    </div>
    <div id="payment-methods">
        <h2>Choisissez votre mode de paiement :</h2>
        <input type="radio" id="payment-cb" name="payment" value="cb">
        <label for="payment-cb">
            <img src="rs/carte bancaire.jpg" alt="Carte Bancaire">
        </label>
        
        <input type="radio" id="payment-paypal" name="payment" value="paypal">
        <label for="payment-paypal">
            <img src="rs/paypal.webp" alt="PayPal">
        </label>
        
        <input type="radio" id="payment-cash" name="payment" value="cash">
        <label for="payment-cash">
            <img src="rs/stouch.png" alt="Espèces">
        </label>
    </div>
    <button id="checkout-btn">Acheter</button>

    <script src="panier.js"></script>
</body>
</html>
