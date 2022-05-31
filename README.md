Prueba práctica avaliable <br>
Objetivo: Creación de un pequeño model de plataforma de servicios CMS.
Emprego de framework - Laravel/TailwindCSS - Sitio web perfectamente responsivo.


## Primeros Comandos
```shell
composer require laravel/ui --dev
composer require laravel-frontend-presets/tailwindcss --dev
php artisan ui tailwindcss --auth
npm install
npm audit fix --force
npm audit fix
npm run dev
```

##Creando ModeloTablaControlador
```shell
php artisan make:model Post -mcr
php artisan make:model Comment -mcr
```

##Comandos
```shell
composer require cviebrock/eloquent-sluggable
php artisan migrate
php artisan make:factory PostFactory -m Post
php artisan db:seed
php artisan make:request Comment
php artisan make:request PostRequest
```

![image](https://user-images.githubusercontent.com/91055703/171108745-44e8924d-8abc-406f-8811-ad7eae22e36e.png)


![image](https://user-images.githubusercontent.com/91055703/171108681-9099dd5c-14cc-44a4-9e03-158d2d621067.png)

![image](https://user-images.githubusercontent.com/91055703/171108794-03291a9a-b4e3-406f-93eb-ade752702595.png)


![image](https://user-images.githubusercontent.com/91055703/171108856-2f017358-5b24-4af3-bcfb-a4a4d7461e06.png)



