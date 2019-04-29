<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="container" data-pager>
    <div class="grid grid-4" data-pager-container="library">

        <? if ($arResult['ITEMS']): ?>
            <? foreach ($arResult['ITEMS'] as $itemLibrary): ?>
                <? $this->AddEditAction($itemLibrary['ID'], $itemLibrary['EDIT_LINK'], CIBlock::GetArrayByID($itemLibrary["IBLOCK_ID"], "ELEMENT_EDIT")); ?>
                <? $this->AddDeleteAction($itemLibrary['ID'], $itemLibrary['DELETE_LINK'], CIBlock::GetArrayByID($itemLibrary["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
                <div id="<?= $this->GetEditAreaId($itemLibrary['ID']); ?>">
                    <?
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "ITEM" => $itemLibrary,
                            "PATH" => SITE_DIR . 'local/include/library/library.php',
                        ),
                        false,
                        Array('HIDE_ICONS' => 'Y')
                    );
                    ?>
                </div>
            <? endforeach; ?>
        <? else: ?>
            Элементы электронной библиотеки не найдены<br><br>
        <? endif ?>
    </div>
    <? if ($arResult['ITEMS']): ?>
        <div class="link-center">
            <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                <?= $arResult["NAV_STRING"] ?>
            <? endif; ?>
        </div>
    <? endif ?>
</div>