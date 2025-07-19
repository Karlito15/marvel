<?php

namespace App\Controllers\Datas;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\DateTimeProvider;
use App\ThirdParty\Faker\ImageProvider;
use App\ThirdParty\Faker\LoremProvider;
use App\ThirdParty\Faker\PersonProvider;
use Config\Services;
use Config\Web;

class Post extends BaseController
{
    public function index()
    {
		$body = view('contents/html/oculux/datas/post', $this->getDatas());

		$this->response->setContentType('text/html; charset=UTF-8');
		$this->response->setBody($body);
		$this->response->sendBody();
    }

	public function xml()
	{
		$body = view('contents/html/oculux/datas/post', $this->getDatas());
		$this->response->setXML($body);
	}

	public function json()
	{
		$body = view('contents/html/oculux/datas/post', $this->getDatas());
		$this->response->setJSON($body);
	}

	//--------------------------------------------------------------------

	/** @return array */
	private function getDatas(): array
	{
        $template = Config(Web::class);
        $title    = 'Post';
        return [
            'breadcrumb' => ['Datas', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'postTitle'     => LoremProvider::sentence(12, true),
            'postIntro'     => LoremProvider::paragraph(3, true),
            'postContent'   => [
                'subTitle' => [
                    LoremProvider::paragraph(3, true),
                    LoremProvider::paragraph(3, true),
                ],
                'parags' => [
                    LoremProvider::paragraphs(5, false),
                ]
            ],
            'postCitation'  => LoremProvider::text(100),
//            'postPicture'   => ImageProvider::imageUrl(800, 600, 'sports', true, null, true),
            'postAuthor'    => PersonProvider::name(),
            'postPublished' => DateTimeProvider::dateTimeThisYear()->format('d/m/Y'),
        ];
	}
}
