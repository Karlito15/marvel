# CLI

### Usage
``` txt
CodeIgniter v4.6.0 Command Line Tool - Server Time: 2025-01-30 00:15:00 UTC+01:00

Cache
php bin/spark cache:clear       Clears the current system caches.
php bin/spark cache:info        Shows file cache information in the current system.

CodeIgniter
php bin/spark config:check      Check your Config values.
php bin/spark env               Retrieves the current environment, or set a new one.
php bin/spark filter:check      Check filters for a route.
php bin/spark help              Displays basic usage information.
php bin/spark list              Lists the available commands.
php bin/spark namespaces        Verifies your namespaces are setup correctly.
php bin/spark optimize          Optimize for production.
php bin/spark phpini:check      Check your php.ini values in production environment.
php bin/spark publish           Discovers and executes all predefined Publisher classes.
php bin/spark routes            Displays all routes.
php bin/spark serve             Launches the CodeIgniter PHP-Development Server.
php bin/spark serve --host example.dev

Database
php bin/spark db:create         Create a new database schema.
php bin/spark db:seed           Runs the specified seeder to populate known data into the database.
php bin/spark db:table          Retrieves information on the selected table.
php bin/spark migrate           Locates and runs all new migrations against the database.
php bin/spark migrate:refresh   Does a rollback followed by a latest to refresh the current state of the database.
php bin/spark migrate:rollback  Runs the "down" method for all migrations in the last batch.
php bin/spark migrate:status    Displays a list of all migrations and whether they've been run or not.

Encryption
php bin/spark key:generate      Generates a new encryption key and writes it in an `.env` file.

Generators
php bin/spark make:cell         Generates a new Controlled Cell file and its view.
php bin/spark make:command      Generates a new spark command.
php bin/spark make:config       Generates a new config file.
php bin/spark make:controller   Generates a new controller file.
php bin/spark make:entity       Generates a new entity file.
php bin/spark make:filter       Generates a new filter file.
php bin/spark make:migration    Generates a new migration file.
php bin/spark make:model        Generates a new model file.
php bin/spark make:scaffold     Generates a complete set of scaffold files.
php bin/spark make:seeder       Generates a new seeder file.
php bin/spark make:test         Generates a new test file.
php bin/spark make:validation   Generates a new validation file.

Housekeeping
php bin/spark debugbar:clear    Clears all debugbar JSON files.
php bin/spark logs:clear        Clears all log files.

Translation
php bin/spark lang:find         Find and save available phrases to translate.
php bin/spark lang:sync         Synchronize translation files from one language to another.
```
