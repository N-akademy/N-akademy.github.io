Vous allez devoir créer une application web utilisant le framework Laravel.

Ce client souhaite solliciter votre aide, et vous fait confiance pour la suite des opérations.

Votre client souhaite un site vitrine sur les animaux, composé d'articles (d'animaux) possédant plusieurs informations :
- un nom
- un sexe
- un âge
- un poids
- une taille
- une race (spécifique)

Également des informations sur la race :
- un nom
- une classification (mammifères, etc)
- une espérance de vie

Vous devrez réaliser un C.R.U.D permettant de gérer des animaux, mais également un sur les races (cela fait 2 C.R.U.D).
Vous devrez fournir un système de connexion, et ainsi gérer certains accès à certaines pages :

Guest :
- Liste des animaux du site vitrine
- Page de login
- (PAS D'INSCRIPTION)

Authentifié :
- Liste des animaux du site vitrine
- Liste des races présentes sur le site vitrine
- Les deux C.R.U.D
- Page de logout


Cela signifie donc que les utilisateurs (users) devront posséder un rôle particulier, dont les informations suivantes :
- un nom de rôle

Le site doit être un minimum agréable. 
Vous devrez faire attention aux erreurs lors des C.R.U.D, lors de l'envoi des données, etc. Vous utiliserez du templating afin de gagner un peu de temps pour tout ce qui touche au header, footer, etc.

Également, vous devrez créer vos tables avec des migrations et tenter d'insérer des données via le principe de seeding.
Votre rendu devra donc comporter ces fichiers contenant des données. Vous ferez attention à bien faire vos relations dans vos models.


BONUS : Si vous utilisez les 'resources' pour vos routes/controllers, un bonus vous sera accordé.
BONUS(2): L'accès aux C.R.U.D devront être accessibles pour l'administrateur uniquement.

Rendu : 15h30 sur Git. Vous enverrez votre lien sur le Google Classroom.

(Si vous préférez un autre thème que les animaux, sachez que vous êtes tout à fait libre tant que vous ne réutilisez pas le thème des livres et que vous créez bien les tables et clefs étrangères demandées)

Exemples de thèmes : Magasin d'instruments de musique, magasin d'articles de pêche, de boulangerie, etc.
