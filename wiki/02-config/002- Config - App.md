# Config/App.php

### Change
from 
``` php
public string $baseURL = 'http://localhost:8080/';
```

to 
``` php
public string $baseURL = 'URL_OF_PRODUCTION';
```

### Change
from 
``` php
public string $indexPage = 'index.php';
```

to 
``` php
public string $indexPage = '';
```

### Change
from 
``` php
public string $defaultLocale = 'en';
```

to 
``` php
public string $defaultLocale = 'fr';
```

### Change
from 
``` php
public array $supportedLocales = ['en'];
```

to 
``` php
public array $supportedLocales = ['en', 'fr', 'it'];
```

### Change
from 
``` php
public string $appTimezone = 'UTC';
```

to 
``` php
public string $appTimezone = 'Europe/Paris';
```
