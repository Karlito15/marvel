# Config/Paths.php

### Change System Directory
from 
``` php
public string $systemDirectory = __DIR__ . '/../../system';
```

to 
``` php
public string $systemDirectory = __DIR__ . '/../../../../system/4.6.0';
```

### Change Writable Directory
from 
``` php
public string $writableDirectory = __DIR__ . '/../../writable';
```

to 
``` php
public string $writableDirectory = __DIR__ . '/../../../../vars/[SITENAME]';
```
