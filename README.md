# exception_mail
Laravel package that sends mail reporting errors
## Instalação
 - composer require edilton/exceptionmail dev-master

## Uso
* Deve ser configurado o envio de email no Laravel Framework [Veja aqui!](https://laravel.com/docs/5.2/mail).


* Adiconar o Service Provider em config/app.php
  ```php
  'providers' => [
      //...
      ExceptionMail\ExceptionMailServiceProvider::class
  ]
  ```
* Rode o seguinte comando no artisan:
  
  ```bash
  php artisan vendor:publish
  ```
* Edit o arquivo config\exeptionmailconfig.php
    ```php 
    <?php

return [
    'app'           => 'Nome da Aplicação',
    'email'         => 'seuemail@seudomninio.com',
    'cc'            => ['fulano@dominio.com'],
    'active'        =>  env('APP_ENV', 'production')
];
  ```

  
* Altere o arquivo  App\Exception\Handle.php para :
    ```php 
  <?php
        
        namespace App\Exceptions;
        
        use Exception;
        use Illuminate\Database\Eloquent\ModelNotFoundException;
        use Symfony\Component\HttpKernel\Exception\HttpException;
        use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
        use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
        use ExceptionMail\Exceptions\ExceptionMailHandler;
        
        class Handler extends ExceptionMailHandler
        {
    ```
