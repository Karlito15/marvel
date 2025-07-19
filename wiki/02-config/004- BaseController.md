# BaseController

``` php
<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [
        'filesystem', 'html', 'number', 'text', 'url',  // CodeIgniter
        'navigation',  // Karlito
    ];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param LoggerInterface $logger
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger): void
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = service('session');
        $this->config = config('Document');
        $this->config = config('Template');
    }

    /**
     * Provides a simple way to tie into the main CodeIgniter class
     * and tell it how long to cache the current page for.
     *
     * @param integer $time
     */
//    protected function cachePage(int $time): void
//    {
//        CodeIgniter::cache($time);
//    }

    //--------------------------------------------------------------------

    /**
     * @param string $body
     * @param string $contentType
     */
    protected function returnResponse(string $body, string $contentType): void
    {
        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody($body);
        $response->setHeader('Content-type', $contentType);
        $response->noCache();

        // Sends the output to the browser
        // This is typically handled by the framework
        $response->send();
    }
}
```
