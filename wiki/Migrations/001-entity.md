# Entity

## Step 1 : Generate an Entity

``` shell
php bin/spark make:entity
```

## Step 2 : Generate a Model

``` shell
php bin/spark make:model
```

## Step 3 : Configue the Model
Example : 
``` php
    protected $table         = 'users';
    protected $allowedFields = [
        'username', 'email', 'password',
    ];
    protected $returnType    = \App\Entities\User::class;
    protected $useTimestamps = true;
```

## Step 4 : Create a Migrations
Example : 
``` shell
php bin/spark make:migration FileName
php bin/spark migrate
php bin/spark migrate:refresh
php bin/spark migrate:rollback
php bin/spark migrate:status
```
