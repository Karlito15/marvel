# Config/Autoload.php

### Change
from 
``` php
    public $psr4 = [
        APP_NAMESPACE => APPPATH,
    ];
```

to 
``` php
    public $psr4 = [
        APP_NAMESPACE => APPPATH, // For custom app namespace
        'Config'      => APPPATH . 'Config',
    ];
```

### Add to end of file
``` php

    /**
     * Multiple WebSites
     */
    public function __construct()
    {
        parent::__construct();
        $psr4 = [
            'Karlito'  => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Colossus' => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Colossus' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Deadpool' => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Deadpool' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Fatalis'  => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Fatalis' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Galactus' => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Galactus' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Hela'     => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Hela' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Kang'     => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Kang' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Loki'     => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Loki' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Mephisto' => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Mephisto' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Onslaught'=> realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Onslaught' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Surtur'   => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Surtur' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Thanos'   => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Thanos' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
            'Ultron'   => realpath(dirname(ROOTPATH) . DIRECTORY_SEPARATOR . 'Ultron' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR),
       ];

        $classmap = [];

        //--------------------------------------------------------------------
        // Do Not Edit Below This Line
        //--------------------------------------------------------------------

        $this->psr4     = array_merge($this->psr4, $psr4);
        $this->classmap = array_merge($this->classmap, $classmap);

        unset($psr4, $classmap);
    }
```
