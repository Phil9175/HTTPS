# Projet HTTPS - ESGI Groupe 18

Avant de commencer il faut inclure la classe autoload pour charger notre classe et les structures de données :

```sh
include_once("class/autoload.php");
```

## Quelle méthode utiliser

La méthode make_payment() est la méthode à utiliser pour envoyer le paiement avec les paramètres suivants :

- **$redirect_urls** : indique les URLs de redirection à utiliser en cas de succès ou d'échec
- **$payer** : correspond au type de paiement, il peut être intéractif ou de type Paypal
- **$amount** : renseigne le montant que l'utilisateur va payer

```sh
paypal = new paypal();
$redirect_urls = new redirect_urls("http://nobox.info/success.php", "http://nobox.info/cancel.php");
$payer = new payer("paypal", NULL, NULL);
$amount = new amount("EUR", $_POST["montant"], NULL);	
$paiement = $paypal->make_payment($redirect_urls, $payer, $amount);
header('Location: '.$paiement->links[1]->href);
```


## Comment utiliser le module

1- On instancie un objet Paypal qui va ensuite récupérer un token

2- Il faut créer un paiement avec la méthode make_payment()

3- On redirige ensuite l'utilisateur vers l'URL de paiement Paypal où il va ensuite se connecter à son compte

4- L'utilisateur est redirigé vers une page de succès ou d'echec de paiement.

5- En fonction du statut du paiement, on decide d'executer le paiement ou pas.

6- On redirige l'utilisateur vers la page de notre choix.


## A quoi correspondent les méthodes

la classe paypal contient toutes les méthodes nécessaires pour créer, executer, rembourser ou connaitre le statut d'un paiement.

La méthode __construct s'authentifie auprès de Paypal.
La méthode make_payment créé un paiement.
La méthode execute_payment execute le paiement auprès de paypal.
la méthode refund_payment rembourse un paiement paypal.
la méthode look permet de voir le statut d'un paiement ainsi que tous ses paramètres.