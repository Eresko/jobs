<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Задание</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src='js/jquery-3.3.1.js'></script>
    <script type="text/javascript" src='js/main.js'></script>
</head>
<body>
<?
const MONTH = ["1" => "Январь","2" => "Февраль","3" => "Март","4" => "Апрель","5" => "Май","6" => "Июнь",
    "7" => "Июль","8" => "Август","9" => "Сентябрь","10" => "Октябрь","11" => "Ноябрь","12" => "Декабрь"];
$YEAR = 2017;
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $currentMonth=$_POST['month'] <10 ? '0'.$_POST['month']:$_POST['month'];
    $currentYear = $_POST['year'];
    if ($_POST['month'] ==1) {
        $previousMonth=12;
        $previousYear=$currentYear-1;
    }
    else {
        $previousMonth = $_POST['month']-1;
        $previousYear=$currentYear;
    }
    if ($_POST['month'] ==12) {
        $followingMonth=1;
        $followingYear=$_POST['year']+1;
        }
    else {
        $followingMonth=$_POST['month']+1;
        $followingYear=$_POST['year'];
    }
    $previousMonth=$previousMonth <10 ? '0'.$previousMonth:$previousMonth;
    $followingMonth=$followingMonth <10 ? '0'.$followingMonth:$followingMonth;
    $currentDate="01-".$currentMonth."-".$_POST['year'];
    $maxDayMounth=date("t",strtotime("01-".$currentMonth."-".$_POST['year']));
    $maxpreviousDayMounth=date("t",strtotime("01-".$previousMonth."-".$_POST['year']));
}
else {
    $previousDate = new DateTime("-1 month");
    $followingDate = new DateTime("+1 month");
    $date = new DateTime();
    $previousMonth = $previousDate->format("m");
    $followingMonth = $followingDate->format("m");
    $maxDayMounth = date("t");
    $currentMonth = date("m");
    $currentYear = date("Y");
    $currentYear = date("Y");
    $currentDate="01-".$currentMonth."-".$currentYear;
    $numberDateWeek = date('w', strtotime($currentDate));
    $curentWeek = ceil((date("t") + $numberDateWeek) / 7);
    $previousYear = $previousDate->format("Y");

}

$numberDateWeek = date('w', strtotime($currentDate)-1);
$startDayWeek=$maxpreviousDayMounth-$numberDateWeek;
$curentWeek = ceil((date("t") + $numberDateWeek) / 7);
if (empty($_GET['id'])) {
    $length=10;
    $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
    $numChars = strlen($chars);
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string .= substr($chars, rand(1, $numChars) - 1, 1);
    }
    header('Location: /?id='.$string);
}


if ($numberDateWeek>1) {
    $fullDate = ($startDayWeek + "1" ). "-" . $previousMonth . "-" . $previousYear;
}
else {
    $fullDate = "01" . "-" . $currentMonth . "-" . $currentYear;
}
$id= $_GET['id'];
$comMysql = new mysqli("localhost", "soso", "123qwe123", "soso");
$fullDate = date('Y-m-d', strtotime($fullDate));
$result = $comMysql->query("select * from date where control='$id' and date>='$fullDate'");
 while ($resultInf = $result->fetch_assoc()) {
     $intemCall[$resultInf['date']]=$resultInf;
 }
?>



    <input type="hidden" value="<?=$_GET['id']?>" data-hidden-id>
    <div class="block_calendar">
        <div class="month">Месяц :<?=MONTH[(int)$currentMonth]?></div>
        <div class="month" data-conteiner-cal>
            <select data-select-month>
            <?foreach (MONTH as $id => $itemMonth):?>
              <option value="<?=$id?>" <?if ($id==$currentMonth) echo "selected"; ?>><?=$itemMonth?></option>
            <?endforeach;?>
            </select>
            <select data-select-year>
            <?for ($yearItem=1;$yearItem<30;$yearItem++):?>
                <option <?if (($YEAR+1)==$currentYear) echo "selected"; ?>><?=$YEAR+=1;?></option>
            <?endfor;?>
            </select>
        </div>
        <ul class="cal" data-conteiner-data-val>
        <?for ($numberWeek=1;$numberWeek<=$curentWeek;$numberWeek++):?>
                <li class="week">
            <? for ($numberDay=1;$numberDay<=7;$numberDay++):?>
                <div class="day" data-day>
                    <div class="data" >
                    <? if ($numberWeek == 1) {
                        if ($numberDay<=$numberDateWeek) {//дата предьидущий месяц
                            echo $startDayWeek+$numberDay;
                            $fullDate=$previousYear."-".$previousMonth."-".($startDayWeek+$numberDay);
                        }
                        else {
                            echo $numberDay + ($numberWeek - 1) * 7-$numberDateWeek;
                            $fullDate = $currentYear . "-" . $currentMonth . "-" . ($numberDay + ($numberWeek - 1) * 7 - $numberDateWeek);
                        }
                    }
                    elseif  ((( $numberDay + ($numberWeek - 1) * 7)-$numberDateWeek)>$maxDayMounth) {//Следующий месяц
                            echo ($numberDay + ($numberWeek - 1) * 7)-$maxDayMounth-$numberDateWeek;
                            $fullDate=$currentYear."-".$currentMonth."-".($numberDay + ($numberWeek - 1) * 7)-$maxDayMounth-$numberDateWeek;
                    }
                    else {
                            echo $numberDay + ($numberWeek - 1) * 7-$numberDateWeek;
                            $fullDate=$currentYear."-".$currentMonth."-".($numberDay + ($numberWeek - 1) * 7-$numberDateWeek);
                    }
                    ?>
                    </div>
                    <div class="info" data-text-info data-value="<?=$fullDate?>"><?=$intemCall[$fullDate]['text']?>
                    </div>
                </div>
           <?php endfor?>
                </li>

        <?php endfor ?>
        </ul>
    </div>
<div class="modal_okno1" data-modal-okno>
    <div class="head_modal" data-head-modal>Текст</div>
    <textarea width="100" rows="20" data-text-area cols="40" data-area></textarea>
    <div><input type="button" value="OK" class="btn" data-btn></div>
</div>
</body>
</html>
