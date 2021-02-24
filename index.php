<?php

echo "Suicaにチャージします。金額に該当する番号を入力して下さい。" . PHP_EOL;

$moneys = ["1" => 1000, "2" => 3000, "3" => 5000];

foreach ($moneys as $money_num => $select_money) {
    echo $money_num . ":" . $select_money . "円" . PHP_EOL;
}

echo "番号:";
$msg = fgets(STDIN);
$charge = "円チャージしました。" . PHP_EOL;

switch ($msg) {
    case 1:
        $price = $moneys["1"];
        echo $price . $charge;
        break;

    case 2:
        $price = $moneys["2"];
        echo $price . $charge;
        break;

    case 3:
        $price = $moneys["3"];
        echo $price . $charge;
        break;

    default:
        break;
}

if (isset($price)) {
    $flag = "true";
}

if ($flag !== "true") {
    echo "無効な番号です" . PHP_EOL . "処理を終了します。" . PHP_EOL . "買い物を終了します。" . PHP_EOL;
    exit;
}

do {
    echo "商品の価格を入力して下さい:";
    $goods = fgets(STDIN);

    if (isset($num)) {
        $num = $num - $goods;
    } else {
        $num = ($price - $goods);
    }

    if ($num < 0) {
        $flag = "false";
        break;
    }

    echo "残高は{$num}円です。" . PHP_EOL;
} while ($num >= 0);

if ($flag == "false") {
    echo "チャージ金額を上回るため購入できません。" . PHP_EOL . "買い物を終了します。" . PHP_EOL;
    exit;
}