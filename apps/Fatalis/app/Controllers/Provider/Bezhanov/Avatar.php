<?php

namespace App\Controllers\Provider\Bezhanov;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Bezhanov\AvatarProvider;
use Config\Services;
use Config\Web;

class Avatar extends BaseController
{
    /** @return void */
    public function index(): void
    {
		$body = view('contents/html/oculux/cards', $this->getDatas());

		$this->response->setContentType('text/html; charset=UTF-8');
		$this->response->setBody($body);
		$this->response->sendBody();
    }

    /** @return void */
    public function xml(): void
    {
        $body = view('contents/html/oculux/cards', $this->getDatas());

        $this->response->setXML($body);
    }

    /** @return void */
    public function json(): void
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
        $title    = 'Avatar';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
                'avatar' => ['type' => 'string', 'label' => 'Avatar', 'id' => 'avatar', 'item' => AvatarProvider::getAvatar()],
            ],
        ];
    }
}
