<?php

namespace Citfact\SiteCore\Event;

use Citfact\SiteCore\City\CityManager;
use Citfact\SiteCore\Core;

class EventRepository
{
    /** @var $cityManager CityManager */
    private $cityManager;
    /** @var $core Core */
    private $core;

    public function __construct($cityManager)
    {
        $this->cityManager = $cityManager;
        $this->core = Core::getInstance();
    }

    /**
     * Получает последнее активное мероприятие в указанном городе, если сабытия нет, возвращает false
     * @param $idCity
     * @return array|bool
     */
    public function getLastEvent($idCity)
    {
        $date = new \DateTime('-2 days');
        $arFilter = [
            "ACTIVE_DATE" => "Y",
            "ACTIVE" => "Y",
            "PROPERTY_CITY" => $idCity,
            "IBLOCK_ID" => $this->core->getIblockId(Core::IBLOCK_CODE_EVENT),
            "!=PROPERTY_ARCHIVE_VALUE" => "Y",
            ">=" . "PROPERTY_DATE_START" => $date->format('Y-m-d H:i:s'),
        ];

        $res = \CIBlockElement::GetList(['PROPERTY_DATE_START'], $arFilter, false, [], ['ID', 'NAME', 'PREVIEW_PICTURE', 'PROPERTY_CITY', 'PROPERTY_ARCHIVE', 'PROPERTY_DATE_START', 'PROPERTY_LOCATION']);
        $result = [];
        if ($arRes = $res->GetNext()) {
            $result = $arRes;
        } else {
            return false;
        }
        $renderImage = \CFile::ResizeImageGet(\CFile::GetFileArray($arRes['PREVIEW_PICTURE']),
            ["width" => 330, "height" => 170], BX_RESIZE_IMAGE_EXACT);
        $result['PICTURE'] = $renderImage['src'];
        $result['CITY_NAME'] = $this->cityManager->getCityInfo($idCity)['NAME'];

        return $result;
    }
}