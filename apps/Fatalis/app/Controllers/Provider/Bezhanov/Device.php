<?php

namespace App\Controllers\Provider\Bezhanov;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Bezhanov\DeviceProvider;
use Config\Services;
use Config\Web;

class Device extends BaseController
{
    public function index()
    {
        $body = view('contents/html/oculux/cards', $this->getDatas());

        $this->response->setContentType('text/html; charset=UTF-8');
        $this->response->setBody($body);
        $this->response->sendBody();
    }

    public function xml()
    {
        $body = view('contents/html/oculux/cards', $this->getDatas());
        $this->response->setXML($body);
    }

    public function json()
    {
        $body = view('contents/html/oculux/cards', $this->getDatas());
        $this->response->setJSON($body);
    }

    //--------------------------------------------------------------------

    /**
     * @return array
     */
    private function getDatas(): array
    {
        $template = Config(Web::class);
        $title    = 'Device';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
                'deviceBuildNumber'     => ['type' => 'string', 'label' => 'Build Number', 'id' => 'deviceBuildNumber', 'item' => DeviceProvider::deviceBuildNumber()],
                'deviceManufacturer'    => ['type' => 'string', 'label' => 'Manufacturer', 'id' => 'deviceManufacturer', 'item' => DeviceProvider::deviceManufacturer()],
                'deviceModelName'       => ['type' => 'string', 'label' => 'Model Name', 'id' => 'deviceModelName', 'item' => DeviceProvider::deviceModelName()],
                'devicePlatform'        => ['type' => 'string', 'label' => 'Platform', 'id' => 'devicePlatform', 'item' => DeviceProvider::devicePlatform()],
                'deviceSerialNumber'    => ['type' => 'string', 'label' => 'Serial Number', 'id' => 'deviceSerialNumber', 'item' => DeviceProvider::deviceSerialNumber()],
                'deviceVersion'         => ['type' => 'string', 'label' => 'Version', 'id' => 'deviceVersion', 'item' => DeviceProvider::deviceVersion()],
            ],
        ];
    }
}
