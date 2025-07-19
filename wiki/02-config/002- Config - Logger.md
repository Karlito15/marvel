# Config/Logger.php

### Change
from 
``` php
public $threshold = (ENVIRONMENT === 'production') ? 4 : 9;
```

to 
``` php
public $threshold = (ENVIRONMENT === 'production') ? 4 : 6;
```

### Change
from 
``` php
public string $dateFormat = 'Y-m-d H:i:s';
```

to 
``` php
public string $dateFormat = 'H:i:s';
```
