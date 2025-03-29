# Task-Manager
**Task Manager** est une application web de gestion de tâches développée avec Laravel et Vue.js. Elle permet aux utilisateurs de créer, modifier et suivre leurs tâches en temps réel via **Pusher**. Sécurisée avec **Laravel Sanctum**, elle offre une interface intuitive et une API RESTful pour une intégration facile avec d'autres services.
# Task Manager

Task Manager est une application de gestion de tâches collaborative permettant aux utilisateurs de créer, attribuer et suivre des tâches en temps réel.

## Installation et Configuration

### 1. Cloner le projet
```bash
git clone https://github.com/votre-repo/task-manager.git
cd task-manager
```

### 2. Installer les dépendances
#### Backend (Laravel)
```bash
composer install
cp .env.example .env
php artisan key:generate
```

#### Frontend (Vue.js)
```bash
npm install
```

### 3. Configurer la base de données
Dans `.env`, renseignez vos paramètres MySQL :
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```
Puis exécutez :
```bash
php artisan migrate --seed
```

### 4. Configurer Pusher (temps réel)
Dans `.env`, ajoutez vos clés :
```ini
PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_app_secret
PUSHER_APP_CLUSTER=your_cluster
```
Puis exécutez :
```bash
php artisan config:clear
```

## Démarrage du Projet
### 1. Lancer le backend Laravel
```bash
php artisan serve
```

### 2. Lancer le frontend Vue.js
```bash
npm run dev
```

## Utilisation
- **Créer un compte** ou **se connecter**.
- **Ajouter des tâches** et les attribuer à des utilisateurs.
- **Recevoir des mises à jour en temps réel** via Pusher.
- **Gérer ses tâches facilement** avec une interface intuitive.

## Auteur
- **Benoit BEYA** - [Votre Profil GitHub]((https://github.com/BMalumbi/)

## Licence
Ce projet est sous licence MIT.
