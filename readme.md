# API Example

Basic implementation of APi in laravel (without using any third party package)

Used Laravel 5.4.35


APi routes are defined in 
```
routes/api.php
```

Controllers (Version one and version 2)

```
app/Http/Controllers/Api/V1/PostsController.php
app/Http/Controllers/Api/V2/PostsController.php
```


Exception handled for if api route not found in 

```
app/Exceptions/Handler.php
```

```php
use use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//...
public function render($request, Exception $exception)
{
    if($exception instanceof NotFoundHttpException)
    {
      return response()->json(['error' => 'Route Not found']);
    }
    return parent::render($request, $exception);
}
```
