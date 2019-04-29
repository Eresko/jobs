<div class="main-page">
    <div class="main-slider">
        <? $bannersIblockId = $core->getIblockId($core::IBLOCK_CODE_BANERS_MAIN); ?>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "main-baners",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "DETAIL_PICTURE",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => $bannersIblockId,
                "IBLOCK_TYPE" => "media",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "10",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "magazine",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "NAME_BUTTON",
                    1 => "URL_BUTTON",
                    2 => "DESCRIPTION2",
                ),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY2" => "PROPERTY_DATE",
                "SORT_BY1" => "SORT",
                "SORT_ORDER2" => "DESC",
                "SORT_ORDER1" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => ".default",
            )
        ); ?>
    </div>
    <div class="container">
        <div class="main-important">
            <div class="title-2">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "COMPONENT_TEMPLATE" => "",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/main/title-sections.php"
                    )
                ); ?>
            </div>
            <? $sectionIblockId = $core->getIblockId($core::IBLOCK_CODE_IMPORTANT_SECTION); ?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "section",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => $sectionIblockId,
                    "IBLOCK_TYPE" => "media",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "10",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "magazine",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "URLSECTION",
                        1 => "FILE_ICON",

                    ),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY2" => "PROPERTY_DATE",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER2" => "DESC",
                    "SORT_ORDER1" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => ".default",
                )
            ); ?>
        </div>
        <div class="main-news">
            <div class="title-2">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "COMPONENT_TEMPLATE" => "",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/main/title-news.php"
                    )
                ); ?>
            </div>
            <div class="main-news__wrap">
                <div class="main-news__news">
                    <?
                    global $arFilterNewsMain;
                    $arFilterNewsMain["PROPERTY_CITY"] = false;
                    ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "main-news",
                        array(
                            "SHOW_DESCRIPTION" => "N",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "DATE",
                                1 => "",
                            ),
                            "FILTER_NAME" => "arFilterNewsMain",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "3",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "DATE",
                                1 => "",
                                2 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY2" => "PROPERTY_DATE",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER2" => "DESC",
                            "SORT_ORDER1" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => ".default"
                        )
                    ); ?>
                    <div class="flex-line">
                        <div class="link-center">
                            <a href="/news/" class="link">
                                Все новости
                                <svg class="i-icon">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-news__signal">
                    <div class="card card--signal">
                        <div class="card--signal__block">
                            <? $staticIblockId = $core->getIblockId($core::IBLOCK_CODE_STATIC_IMAGES); ?>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.detail",
                                "main-violations",
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => $staticIblockId,
                                    "ELEMENT_ID" => "",
                                    "ELEMENT_CODE" => "statika-3",
                                    "CHECK_DATES" => "Y",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                    ),
                                    "PROPERTY_CODE" => array(
                                        0 => "DESCRIPTION_STATIC",
                                        1 => "NAME_BUTTON",
                                        2 => "URL_BUTTON",
                                        3 => "IMG",
                                    ),
                                    "IBLOCK_URL" => "",
                                    "DETAIL_URL" => "",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "CACHE_TYPE" => "A",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_GROUPS" => "Y",
                                    "SET_TITLE" => "N",
                                    "SET_CANONICAL_URL" => "N",
                                    "SET_BROWSER_TITLE" => "N",
                                    "BROWSER_TITLE" => "-",
                                    "SET_META_KEYWORDS" => "N",
                                    "META_KEYWORDS" => "-",
                                    "SET_META_DESCRIPTION" => "N",
                                    "META_DESCRIPTION" => "-",
                                    "SET_LAST_MODIFIED" => "N",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                    "ADD_SECTIONS_CHAIN" => "Y",
                                    "ADD_ELEMENT_CHAIN" => "N",
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "USE_PERMISSIONS" => "N",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "USE_SHARE" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "PAGER_TITLE" => "Страница",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SHOW_404" => "N",
                                    "MESSAGE_404" => ""
                                ),
                                false
                            ); ?>
                        </div>
                        <div class="card--signal__block">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.detail",
                                "main-violations",
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => $staticIblockId,
                                    "ELEMENT_ID" => "",
                                    "ELEMENT_CODE" => "statika-4",
                                    "CHECK_DATES" => "Y",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                    ),
                                    "PROPERTY_CODE" => array(
                                        0 => "DESCRIPTION_STATIC",
                                        1 => "NAME_BUTTON",
                                        2 => "URL_BUTTON",
                                        3 => "IMG",
                                    ),
                                    "IBLOCK_URL" => "",
                                    "DETAIL_URL" => "",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "CACHE_TYPE" => "A",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_GROUPS" => "Y",
                                    "SET_TITLE" => "N",
                                    "SET_CANONICAL_URL" => "N",
                                    "SET_BROWSER_TITLE" => "N",
                                    "BROWSER_TITLE" => "-",
                                    "SET_META_KEYWORDS" => "N",
                                    "META_KEYWORDS" => "-",
                                    "SET_META_DESCRIPTION" => "N",
                                    "META_DESCRIPTION" => "-",
                                    "SET_LAST_MODIFIED" => "N",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                    "ADD_SECTIONS_CHAIN" => "Y",
                                    "ADD_ELEMENT_CHAIN" => "N",
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "USE_PERMISSIONS" => "N",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "USE_SHARE" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "PAGER_TITLE" => "Страница",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SHOW_404" => "N",
                                    "MESSAGE_404" => ""
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-info">
        <div class="container">
            <div class="grid grid-4">
                <div class="main-info__item">
                    <div class="main-info__title">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "COMPONENT_TEMPLATE" => "",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/main/title-tv.php"
                            )
                        ); ?>
                    </div>
                    <?php
                    $filterMedia = ["=PROPERTY_SHOW_MAIN_VALUE" => "1"];
                    $mediaIblockId = $core->getIblockId($core::IBLOCK_CODE_TV_PROJECTS);
                    ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "media-main",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                            ),
                            "FILTER_NAME" => "filterMedia",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => $mediaIblockId,
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "1",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "VIDEO",
                                1 => "VIDEO_IMG",
                                2 => "SHOW_MAIN",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY2" => "PROPERTY_DATE",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER2" => "DESC",
                            "SORT_ORDER1" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => ".default",
                        )
                    ); ?>

                </div>
                <div class="main-info__item">
                    <div class="main-info__title">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "COMPONENT_TEMPLATE" => "",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/main/title-magazines.php"
                            )
                        ); ?>
                    </div>
                    <? $mediaIblockId = $core->getIblockId($core::IBLOCK_CODE_NEWSPAPERS_AND_MAGAZINES); ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "media-main",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                            ),
                            "FILTER_NAME" => "filterMedia",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => $mediaIblockId,
                            "IBLOCK_TYPE" => "media",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "1",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "magazine",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "FILE",
                                1 => "SHOW_MAIN",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY2" => "PROPERTY_DATE",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER2" => "DESC",
                            "SORT_ORDER1" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => ".default",
                        )
                    ); ?>
                </div>
                <div class="main-info__item">
                    <div class="main-info__title">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "COMPONENT_TEMPLATE" => "",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/main/title-newspapers.php"
                            )
                        ); ?>
                    </div>
                    <div class="main-info__content">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "media-main",
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(
                                    0 => "DETAIL_PICTURE",
                                ),
                                "FILTER_NAME" => "filterMedia",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => $mediaIblockId,
                                "IBLOCK_TYPE" => "media",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "1",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "newspaper",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array(
                                    0 => "SHOW_MAIN",
                                ),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY2" => "PROPERTY_DATE",
                                "SORT_BY1" => "SORT",
                                "SORT_ORDER2" => "DESC",
                                "SORT_ORDER1" => "ASC",
                                "STRICT_SECTION_CHECK" => "N",
                                "COMPONENT_TEMPLATE" => ".default",
                            )
                        ); ?>
                    </div>
                </div>
                <div class="main-info__item main-info__item--figure">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.detail",
                        "main-news",
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "IBLOCK_TYPE" => "content",
                            "IBLOCK_ID" => $staticIblockId,
                            "ELEMENT_ID" => "",
                            "ELEMENT_CODE" => "statika-5",
                            "CHECK_DATES" => "Y",
                            "FIELD_CODE" => array(
                                0 => "",
                            ),
                            "PROPERTY_CODE" => array(
                                0 => "DESCRIPTION_STATIC",
                                1 => "NAME_BUTTON",
                                2 => "URL_BUTTON",
                                3 => "IMG",
                                4 => "MODAL",
                            ),
                            "IBLOCK_URL" => "",
                            "DETAIL_URL" => "",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_GROUPS" => "Y",
                            "SET_TITLE" => "N",
                            "SET_CANONICAL_URL" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "BROWSER_TITLE" => "-",
                            "SET_META_KEYWORDS" => "N",
                            "META_KEYWORDS" => "-",
                            "SET_META_DESCRIPTION" => "N",
                            "META_DESCRIPTION" => "-",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "ADD_ELEMENT_CHAIN" => "N",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "USE_PERMISSIONS" => "N",
                            "STRICT_SECTION_CHECK" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "USE_SHARE" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "PAGER_TITLE" => "Страница",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "SET_STATUS_404" => "N",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main-library">
        <div class="container">
            <div class="title-2">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "COMPONENT_TEMPLATE" => "",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/main/title-library.php"
                    )
                ); ?>
            </div>
            <div class="grid grid-2">
                <div class="main-library__content">
                    <? $libraryIblockId = $core->getIblockId($core::IBLOCK_CODE_LIBRARY); ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "library-main",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "N",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => $libraryIblockId,
                            "IBLOCK_TYPE" => "media",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "4",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "newspaper",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "FILE",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY2" => "SORT",
                            "SORT_BY1" => "RAND",
                            "SORT_ORDER2" => "ASC",
                            "SORT_ORDER1" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => ".default",
                        )
                    ); ?>
                    <div class="link-center mob">
                        <a href="/library/" class="link">
                            Все книги
                            <svg class="i-icon">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-2">
                    <div class="promo-block">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.detail",
                            "main-library",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "IBLOCK_TYPE" => "content",
                                "IBLOCK_ID" => $staticIblockId,
                                "ELEMENT_ID" => "",
                                "ELEMENT_CODE" => "statika-6",
                                "CHECK_DATES" => "Y",
                                "FIELD_CODE" => array(
                                    0 => "",
                                ),
                                "PROPERTY_CODE" => array(
                                    0 => "DESCRIPTION_STATIC",
                                    1 => "NAME_BUTTON",
                                    2 => "URL_BUTTON",
                                    3 => "TYPE_TEXT",
                                ),
                                "IBLOCK_URL" => "",
                                "DETAIL_URL" => "",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_GROUPS" => "Y",
                                "SET_TITLE" => "N",
                                "SET_CANONICAL_URL" => "N",
                                "SET_BROWSER_TITLE" => "N",
                                "BROWSER_TITLE" => "-",
                                "SET_META_KEYWORDS" => "N",
                                "META_KEYWORDS" => "-",
                                "SET_META_DESCRIPTION" => "N",
                                "META_DESCRIPTION" => "-",
                                "SET_LAST_MODIFIED" => "N",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "ADD_ELEMENT_CHAIN" => "N",
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "USE_PERMISSIONS" => "N",
                                "STRICT_SECTION_CHECK" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "USE_SHARE" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "PAGER_TITLE" => "Страница",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "SET_STATUS_404" => "N",
                                "SHOW_404" => "N",
                                "MESSAGE_404" => ""
                            ),
                            false
                        ); ?>
                    </div>
                    <div class="promo-block">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.detail",
                            "main-library",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "IBLOCK_TYPE" => "content",
                                "IBLOCK_ID" => $staticIblockId,
                                "ELEMENT_ID" => "",
                                "ELEMENT_CODE" => "statika-7",
                                "CHECK_DATES" => "Y",
                                "FIELD_CODE" => array(
                                    0 => "",
                                ),
                                "PROPERTY_CODE" => array(
                                    0 => "DESCRIPTION_STATIC",
                                    1 => "NAME_BUTTON",
                                    2 => "URL_BUTTON",
                                    3 => "TYPE_TEXT",
                                ),
                                "IBLOCK_URL" => "",
                                "DETAIL_URL" => "",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_GROUPS" => "Y",
                                "SET_TITLE" => "N",
                                "SET_CANONICAL_URL" => "N",
                                "SET_BROWSER_TITLE" => "N",
                                "BROWSER_TITLE" => "-",
                                "SET_META_KEYWORDS" => "N",
                                "META_KEYWORDS" => "-",
                                "SET_META_DESCRIPTION" => "N",
                                "META_DESCRIPTION" => "-",
                                "SET_LAST_MODIFIED" => "N",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "ADD_ELEMENT_CHAIN" => "N",
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "USE_PERMISSIONS" => "N",
                                "STRICT_SECTION_CHECK" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "USE_SHARE" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "PAGER_TITLE" => "Страница",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "SET_STATUS_404" => "N",
                                "SHOW_404" => "N",
                                "MESSAGE_404" => ""
                            ),
                            false
                        ); ?>
                    </div>
                </div>
            </div>
            <div class="link-center">
                <a href="/library/" class="link">
                    Все книги
                    <svg class="i-icon">
                        <use xlink:href="#icon-arrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
