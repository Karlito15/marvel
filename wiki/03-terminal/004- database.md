# Database

#### Create a new database schema.
``` shell
php bin\spark db:create         
```

#### Runs the specified seeder to populate known data into the database.
``` shell
php bin\spark db:seed           
```

#### Retrieves information on the selected table.
``` shell
php bin\spark db:table          
```

#### Locates and runs all new migrations against the database.
``` shell
php bin\spark migrate           
```

#### Does a rollback followed by a latest to refresh the current state of the database.
``` shell
php bin\spark migrate:refresh   
```

#### Runs the "down" method for all migrations in the last batch.
``` shell
php bin\spark migrate:rollback  
```

#### Displays a list of all migrations and whether they've been run or not.
``` shell
php bin\spark migrate:status    
```
