- klonirati repozitorij
- postaviti bazu
- pokrenuti migracije (php artisan migrate)
- pokrenuti seeder (php artisan db:seed)
- created_at i updated_at u seederu su postavljeni na trenutno vrijeme ili trenutno vrijeme plus n dana u svrhu testiranja
- za soft delete određenog meala u svrhu testiranja kreirana je posebna ruta koja soft delete-a meal s obzirom na unesen id, također kreirana je i ruta za restore
- za prikaz jela koristi se ruta '/meals'
- sve rute su u api.php


