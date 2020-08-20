<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

- Se debe tener instalado laragon en el equipo
- git clone https://github.com/4shakes/crudyadira.git
- cd crudyadira
- composer install
- copiar .env.example y le quitamos el .example para que quede solo .env
- generamos la key por medio del comando php artisan key:generate
- Se edita el archivo .env y dentro
    - Ajustar detalles de conexión de base de datos 
- realizamos las migraciones con el comando php artisan migrate
- tras terminar de realizar todos los comandos para finalizar utilizaremos el comando npm install para el funcionamiento de vue
- para correr el proyecto iniciamos laragon y el comando npm run dev



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
