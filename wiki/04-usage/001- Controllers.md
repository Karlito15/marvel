# Controllers

### Add Datas for Views

``` php
        $template = config(Web::class);
        $title   = 'Dashboard';
        $datas   = [
            'breadcrumb' => [$template::$siteName, $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
        ];
```

https://codeigniter4.github.io/userguide/outgoing/response.html#setting-the-output

### XML Output
``` php
    /**  @return void  */
    public function xml()
    {
        $body = view('contents/html/datas/user', $this->getDatas());
        $this->returnResponse($body, 'application/xml');
    }
```


### JSON Output
``` php
    /**  @return void  */
    public function json()
    {
        $body = view('contents/html/datas/user', $this->getDatas());
        $this->returnResponse($body, 'application/json');
    }
```
