![alt text](https://images.pexels.com/photos/9395008/pexels-photo-9395008.jpeg?cs=srgb&dl=pexels-erik-mclean-9395008.jpg&fm=jpg)
# AP1 GARAGISTE
Ce projet mener sur GitKraken va vous expliquer les toute l'installation complete de notre projet **AP1 GARAGISTE** sur Symfony.
## Pour commencer
Avant d'installer le projet, il est important d'avoir quelque pré-requis avant l'installation de ce dernier.
### Pré-requis
Quelques pré-requis sont impératif pour installer le programme et pouvoir le développer et le tester localement :
```
Wamp Server
Php en version 7.2 minimum
Composer
```

## Auteurs

Les auteurs ayant contribuer a se projet :
- **Miguel Fenerol**
- **Jardin Clément**
- **Max Michelet**

## Installation de Symfony / SCOOP

![alt text](https://www.2le.net/wp-inside/uploads/2019/12/symfony-5-nouveautes-300x135.jpg)
*Quelques étapes pour réaliser cette installation*
1. Dans une invite de commande PowerShell taper :
```
Set-ExecutionPolicy RemoteSigned -Scope CurrentUser # Optional: Needed to run a remote
script the first time
```
**Puis**
```
irm get.scoop.sh | iex
```
**Et enfin**
```
scoop install symfony-cli
```

## Installation du Projet
![alt text](https://images.pexels.com/photos/115558/pexels-photo-115558.jpeg?cs=srgb&dl=pexels-lisa-fotios-115558.jpg&fm=jpg)

1. Cloner le repo du projet sous cette adresse : [https://github.com/Gooobelet/AP1GARAGISTE](https://github.com/Gooobelet/AP1GARAGISTE)

2. Installer les micro-services importants :
```
composer require make
```
```
composer require annotations
```
```
composer require twig
```
```
composer require form
```
3. Installer la base de données sous ce lien <a id="raw-url" href="https://github.com/Gooobelet/AP1GARAGISTE/Master/ap1_garagiste.sql">Cliquer pour télécharger</a>

<p align="left">(<a href="#top">back to top</a>)</p>

## License
![alt text](https://www.channelfutures.com/files/2017/04/3_0-877x432.png)
[MIT License](https://en.wikipedia.org/wiki/MIT_License)

## Contribution
Si vous avez une suggestion qui améliorerait cela, veuillez bifurquer le dépôt et créer une demande d'extraction. Vous pouvez aussi simplement ouvrir un ticket avec le tag "amélioration". N'oubliez pas de mettre une étoile au projet ! Merci encore!

## Contact
Max Michelet - [@GitHub](https://github.com/Gooobelet) - [Email](max.michelet@stadjutor.com)
Miguel Fenerol - [@Github](https://github.com/Migou27) - [Email](miguel.fenerol@stadjutor.com)
Clément Jardin - [@github](https://github.com/jardinc27) - [Email](clement.jardin@stadjutor.com)