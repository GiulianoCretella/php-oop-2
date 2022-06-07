<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<!-- classe per cibo,classe per giochi,classe per cucce -->
<!-- utente normale  -->
<!-- utente premium extend utente ma con sconto 20% e dati registrazione -->
<!-- carta di credito con controllo  -->

<?php
require_once __DIR__.'/Classes/PremiumUser.php';
require_once __DIR__.'/Classes/Products.php';
   $utente1 = new User('Giuliano','Cretella');
   var_dump($utente1);
   $utente2 = new PremiumUser('Giovanni','Barella');
   $utente2->setSale('20%');
   $utente2->getSale();
   var_dump($utente2);
   $prodotto1= new Products('Crocchette X Special Salmone','Mangime',30,'Gatto');
   var_dump($prodotto1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoolean</title>
</head>
<body>
    
</body>
</html>