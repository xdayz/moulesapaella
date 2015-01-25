Informations importantes au projet
===================


Ce document permettra de répertorier les différentes méthodes à utiliser : Conventions de nommages, commentaires, etc...

----------

Premier point : **Conventions de nommages**
-------------

En ce qui concerne les noms de variables, de classes, de fonctions, on sera au maximum en anglais.
En effet, CakePHP utilise lui même certaines conventions sur ses noms de classes, modèles et vues.
Pour les noms de fonctions, bien se souvenir que les fonctions sont liés à une pages (qui sera la classe).

Par exemple, la class Filieres (là, on a pas le choix, en français :) ) aura donc plusieurs méthodes (au hasard ;) )
- getFilieres ($idFiliere)
- setFilieres ($idFiliere)
Bien utiliser les getters et les setters dans deux fonctions distinctes.

Deuxième point important : **Les commentaires**
--- 
On commente tout ce qu'on peut !  Les fonctions, les variables, les boucles ... TOUT !
On est plusieurs à travailler dessus, donc pensez aux copains qui passeront derrière :D

Pour vos commentaires de méthodes, utilisez cette syntaxe :

```php
/***
* Récupère la totalité des trucs
* @params : $monSuperId (int)
* @return : listeDeSuperbesFonctions (array)
***/
public function maSuperbeFonction($monSuperId){
	[.....]
	$this->set('listeDeSuperbesFonctions', $maSuperVariables)
}
```


Troisièmes points : **Vos questions**
---
N'hésitez pas à m'envoyer des mails en me posant vos questions, je suis pas dieu, je sais pas tout, mais si un jour une question sur CakePHP ou quoi, hésitez pas !