br

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Description du projet

Hotel Artichaud est un site d'e-commerce de réservation de chambres d'hotel. Ce projet est une application backend développée avec **Laravel**, servant de base pour la gestion des réservations et des utilisateurs. Il fournit une API robuste permettant de **gérer les réservations**, **authentifier les utilisateurs**, et **stocker les informations de profil**. La base de données est optimisée avec **MySQL**, et la documentation de l’API est générée avec **Springdoc OpenAPI**. 🚀

## Dépendances

Pour gérer les dépendances, Laravel utilise composer

### ⚙️ **Dépendances requises**

PHP 8+, Composer, MySQL et Laravel installé.

#### 📦 **Dépendances principales**

Laravel utilise composer

Ces dépendances sont nécessaires pour faire fonctionner le backend :

composer require laravel/sanctum             # Authentification API
composer require fruitcake/laravel-cors      # Gestion du CORS
composer require doctrine/dbal               # Gestion des migrations
composer require barryvdh/laravel-debugbar   # Debugging
composer require laravel/tinker              # Interactions avec la base de données
composer require nesbot/carbon               # Manipulation des dates
composer require spatie/laravel-permission   # Gestion des rôles et permissions
composer require league/flysystem-aws-s3-v3  # Stockage des fichiers sur AWS S3 (optionnel)

🛠 **Dépendances pour le développement**

composer require --dev barryvdh/laravel-ide-helper   # Aide pour IDE (facultatif)
composer require --dev barryvdh/laravel-debugbar     # Barre de debug Laravel
composer require --dev nunomaduro/collision          # Meilleurs messages d'erreur

### 🏗 **Installation et configuration du projet**

1️⃣ **Cloner le projet**

git clone https://github.com/Johan8927/laravel-rez-game.git
cd laravel-rez-game

2️⃣ **Installer les dépendances**

composer install

3️⃣ **Créer et configurer le fichier `.env`**

cp .env.example .env

php artisan key:generate

Modifié ensuite `.env` pour configurer la base de données :

DB_DATABASE=mydb
DB_USERNAME=Artichoke
DB_PASSWORD=*******

4️⃣ **Lancer les migrations et seeders**

php artisan migrate --seed

5️⃣ **Démarrer le serveur**

php artisan serve

### 🔥 **Commandes utiles**

🚀 **Gestion du cache**

php artisan cache:clear        # Supprimer le cache
php artisan config:clear       # Supprimer le cache de configuration
php artisan route:clear        # Supprimer le cache des routes
php artisan view:clear         # Supprimer le cache des vues Blade bien que le projet n'utilise pas Blade mais un front-end avec Vue.js

📌 **Gestion des migrations**

php artisan migrate            # Exécuter toutes les migrations
php artisan migrate:rollback   # Annuler la dernière migration
php artisan migrate:refresh    # Réinitialiser et exécuter toutes les migrations

🔧 **Gestion des utilisateurs et rôles**

php artisan tinker             # Mode interactif pour tester des commandes
php artisan db:seed            # Insérer des donnée

---


## Intergiciel serveur Nuxt3

Même nom, but différent.

Le [middleware serveur](https://nuxt.com/docs/guide/directory-structure/server) dans nuxt 3 se trouve du côté nitro de votre application.

Vous pouvez imaginer ce middleware similaire à [un intercepteur Axios](https://axios-http.com/docs/interceptors) .


Il prendra en compte toute demande effectuée par votre application Nuxt avant toute autre route.

À partir de là, vous pouvez vous connecter, vérifier les en-têtes ou ajouter des données supplémentaires ou préparer des réponses.

Vous pouvez également créer une gestion des erreurs personnalisée à l'intérieur.

Ils peuvent faire beaucoup de choses, mais **les middlewares de serveur ne peuvent pas avoir de valeur de retour !**

Donnons un exemple simple pour mieux comprendre :

## Exemple de middleware de serveur Nuxt

Nous intercepterons toute demande et enregistrerons ce que nous recevons avant de procéder.

Pour ce faire, créez un dossier serveur et un dossier middleware à l’intérieur.

Créez un nouveau fichier appelé logger.ts et collez-y le code suivant :

```text
export default defineEventHandler((event) => {
  console.log('New request: ' + event.node.req.url)
})
```

Cela produira la sortie suivante dans votre console.

![https://d2n94a8z4tjrso.cloudfront.net/nuxt/serverMWconsoleOutput.png](https://d2n94a8z4tjrso.cloudfront.net/nuxt/serverMWconsoleOutput.png)

Notez que nous sommes côté serveur, donc cette sortie n'est pas visible dans la console du navigateur.

## Cas d'utilisation du middleware serveur Nuxt 3

Pour vous donner quelques idées sur les raisons pour lesquelles vous pourriez vouloir l'utiliser.

* Faire correspondre les paramètres d'itinéraire comme [article]
  ```text
  export default defineEventHandler((event) => 
  `You want to read, ${event.context.params.name}!`)
  ```
* Cookies de demande d'accès
* Demandes de journal
* réchauffer une API
  * Il est possible que votre API Azure gratuite se mette en veille en l'absence de requête. La première requête entraînerait donc normalement un délai d'attente. Vous pouvez effectuer une première requête lors du premier chargement de votre application pour réactiver l'API.
* Itinéraire attrape-tout
* Paramètres de requête du journal
