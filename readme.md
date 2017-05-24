Pasos para utilitzar el laravel

1 git clone https://github.com/aws2-18/AWS2-MP12-Projecte.git

2 Accedes a la carpeta AWS2-MP12-Projecte

3 sudo cp .env.example .env

4 sudo nano .env (poneis la ip de la basededatos, nombre, usuario, password)

5 composer install

6 php artisan:key generate

7 php artisan migrate

8 php artisan db:seed

9 php artisan serve
