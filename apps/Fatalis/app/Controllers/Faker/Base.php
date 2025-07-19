<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\BaseProvider;
use Config\Services;
use Config\Web;

class Base extends BaseController
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

	/** @return array */
	private function getDatas(): array
	{
        $template = Config(Web::class);
        $title    = 'Base';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'asciify' => ['type' => 'string', 'label' => 'Asciify', 'id' => 'asciify', 'item' => htmlentities(BaseProvider::asciify($string = '**********'))],
				'bothify' => ['type' => 'string', 'label' => 'Bothify', 'id' => 'bothify', 'item' => BaseProvider::bothify($string = '## ?? #?')],
				'lexify' => ['type' => 'string', 'label' => 'Lexify', 'id' => 'lexify', 'item' => BaseProvider::lexify($string = '????')],
				'numberBetween' => ['type' => 'string', 'label' => 'Number Between', 'id' => 'numberBetween', 'item' => BaseProvider::numberBetween($int1 = 0, $int2 = 2147483647)],
				'numerify' => ['type' => 'string', 'label' => 'Numerify', 'id' => 'numerify', 'item' => BaseProvider::numerify($string = '###')],
				'passthrough' => ['type' => 'string', 'label' => 'Passthrough', 'id' => 'passthrough', 'item' => BaseProvider::passthrough($value = 'lorem')],
				'randomAscii' => ['type' => 'string', 'label' => 'Random Ascii', 'id' => 'randomAscii', 'item' => BaseProvider::randomAscii()],
				'randomDigit' => ['type' => 'string', 'label' => 'Random Digit', 'id' => 'randomDigit', 'item' => BaseProvider::randomDigit()],
				'randomDigitNot' => ['type' => 'string', 'label' => 'Random Digit Not', 'id' => 'randomDigitNot', 'item' => BaseProvider::randomDigitNot($except = 5)],
				'randomDigitNotNull' => ['type' => 'string', 'label' => 'Random Digit Not Null', 'id' => 'randomDigitNotNull', 'item' => BaseProvider::randomDigitNotNull()],
				'randomElement' => ['type' => 'string', 'label' => 'Random Element', 'id' => 'randomElement', 'item' => BaseProvider::randomElement($array = ['a', 'b', 'c', 'd', 'e', 'f', 'g'])],
//				'randomElements' => ['type' => 'array', 'label' => 'Random Elements', 'id' => 'randomElements', 'item' => BaseProvider::randomElements($array = ['a', 'b', 'c', 'd', 'e', 'f', 'g'], $count = 3, $allowDuplicates = false)],
				'randomFloat' => ['type' => 'string', 'label' => 'Random Float', 'id' => 'randomFloat', 'item' => BaseProvider::randomFloat($nbMaxDecimals = null, $min = 0, $max = null)],
				'randomKey' => ['type' => 'string', 'label' => 'Random Key', 'id' => 'randomKey', 'item' => BaseProvider::randomKey($array = ['a', 'b', 'c', 'd', 'e', 'f', 'g'])],
				'randomLetter' => ['type' => 'string', 'label' => 'Random Letter', 'id' => 'randomLetter', 'item' => BaseProvider::randomLetter()],
				'randomNumber' => ['type' => 'string', 'label' => 'Random Number', 'id' => 'randomNumber', 'item' => BaseProvider::randomNumber($nbDigits = null, $strict = false)],
				'regexify' => ['type' => 'string', 'label' => 'Regexify', 'id' => 'regexify', 'item' => BaseProvider::regexify($regex = '[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}')],
				'shuffle' => ['type' => 'string', 'label' => 'Shuffle', 'id' => 'shuffle', 'item' => BaseProvider::shuffle($arg = 'hello, world')],
//				'shuffleArray' => ['type' => 'array', 'label' => 'Shuffle Array', 'id' => 'shuffleArray', 'item' => BaseProvider::shuffleArray($array = ['a', 'b', 'c', 'd', 'e', 'f', 'g'])],
				'shuffleString' => ['type' => 'string', 'label' => 'Shuffle String', 'id' => 'shuffleString', 'item' => BaseProvider::shuffleString($string = 'hello, world', $encoding = 'UTF-8')],
				'toLower' => ['type' => 'string', 'label' => 'To Lower', 'id' => 'toLower', 'item' => BaseProvider::toLower($string = 'WORD')],
				'toUpper' => ['type' => 'string', 'label' => 'To Upper', 'id' => 'toUpper', 'item' => BaseProvider::toUpper($string = 'word')],
            ],
        ];
	}
}
