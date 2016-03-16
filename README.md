# exception_mail
Laravel package that sends mail reporting errors

## Uso
* Deve ser configurado o envio de email no Laravel Framework [Veja aqui!](https://laravel.com/docs/5.2/mail).


* Adiconar o Service Provider em config/app.php
  ```php
  'providers' => [
      //...
      'ExceptionMail\ExceptionMailServiceProvider'
  ]
  ```
* Rode o seguinte comando no artisan:
  
  ```bash
  php artisan vendor:publish
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
