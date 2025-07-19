<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\DateTimeProvider;
use Config\Services;
use Config\Web;

class Datetime extends BaseController
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
        $title    = 'Datetime';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'amPm'                  => ['type' => 'string', 'label' => 'Am Pm', 'id' => 'amPm', 'item' => DateTimeProvider::amPm($max = 'now')],
				'century'               => ['type' => 'string', 'label' => 'Century', 'id' => 'century', 'item' => DateTimeProvider::century()],
				'date'                  => ['type' => 'string', 'label' => 'Date', 'id' => 'date', 'item' => DateTimeProvider::date($format = 'Y-m-d', $max = 'now')],
//				'dateTime'              => ['type' => 'datetime', 'label' => 'DateTime', 'id' => 'dateTime', 'item' => DateTimeProvider::dateTime($max = 'now', $timezone = 'Europe/Paris')],
//				'dateTimeAD'            => ['type' => 'datetime', 'label' => 'DateTime AD', 'id' => 'dateTimeAD', 'item' => DateTimeProvider::dateTimeAD($max = 'now', $timezone = 'Europe/Paris')],
//				'dateTimeBetween'       => ['type' => 'datetime', 'label' => 'DateTime Between', 'id' => 'dateTimeBetween', 'item' => DateTimeProvider::dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = 'Europe/Paris')],
//				'dateTimeInInterval'    => ['type' => 'datetime', 'label' => 'DateTime In Interval', 'id' => 'dateTimeInInterval', 'item' => DateTimeProvider::dateTimeInInterval($date = '-5 days', $interval = '+5 days', $timezone = 'Europe/Paris')],
//				'dateTimeThisCentury'   => ['type' => 'datetime', 'label' => 'DateTime This Century', 'id' => 'dateTimeThisCentury', 'item' => DateTimeProvider::dateTimeThisCentury($max = 'now', $timezone = 'Europe/Paris')],
//				'dateTimeThisDecade'    => ['type' => 'datetime', 'label' => 'DateTime This Decade', 'id' => 'dateTimeThisDecade', 'item' => DateTimeProvider::dateTimeThisDecade($max = 'now', $timezone = 'Europe/Paris')],
//				'dateTimeThisMonth'     => ['type' => 'datetime', 'label' => 'DateTime This Month', 'id' => 'dateTimeThisMonth', 'item' => DateTimeProvider::dateTimeThisMonth($max = 'now', $timezone = 'Europe/Paris')],
//				'dateTimeThisYear'      => ['type' => 'datetime', 'label' => 'DateTime This Year', 'id' => 'dateTimeThisYear', 'item' => DateTimeProvider::dateTimeThisYear($max = 'now', $timezone = 'Europe/Paris')],
				'dayOfMonth'            => ['type' => 'string', 'label' => 'Day Of Month', 'id' => 'dayOfMonth', 'item' => DateTimeProvider::dayOfMonth($max = 'now')],
				'dayOfWeek'             => ['type' => 'string', 'label' => 'Day Of Week', 'id' => 'dayOfWeek', 'item' => DateTimeProvider::dayOfWeek($max = 'now')],
				'iso8601'               => ['type' => 'string', 'label' => 'Iso 8601', 'id' => 'iso8601', 'item' => DateTimeProvider::iso8601($max = 'now')],
				'month'                 => ['type' => 'string', 'label' => 'Month', 'id' => 'month', 'item' => DateTimeProvider::month($max = 'now')],
				'monthName'             => ['type' => 'string', 'label' => 'Month Name', 'id' => 'monthName', 'item' => DateTimeProvider::monthName($max = 'now')],
				'time'                  => ['type' => 'string', 'label' => 'Time', 'id' => 'time', 'item' => DateTimeProvider::time($format = 'H:i:s', $max = 'now')],
				'timezone'              => ['type' => 'string', 'label' => 'Timezone', 'id' => 'timezone', 'item' => DateTimeProvider::timezone()],
				'unixTime'              => ['type' => 'string', 'label' => 'UnixTime', 'id' => 'unixTime', 'item' => DateTimeProvider::unixTime($max = 'now')],
				'year'                  => ['type' => 'string', 'label' => 'Year', 'id' => 'year', 'item' => DateTimeProvider::year($max = 'now')],
				// 'setDefaultTimezone' => ['type' => 'string', 'label' => 'SetDefaultTimezone', 'id' => 'setDefaultTimezone', 'item' => DateTimeProvider::setDefaultTimezone($timezone = 'Europe/Paris')],
				'getDefaultTimezone'    => ['type' => 'string', 'label' => 'Get Default Timezone', 'id' => 'getDefaultTimezone', 'item' => DateTimeProvider::getDefaultTimezone()],
            ],
        ];
	}
}
