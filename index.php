<?php

echo "Suicaにチャージします。金額に該当する番号を入力して下さい。" . PHP_EOL;

$moneys = ["1" => 1000, "2" => 3000, "3" => 5000];

foreach ($moneys as $money_num => $select_money) {
    echo $money_num . ":" . $select_money . "円" . PHP_EOL;
}

echo "番号:";
$msg = trim(fgets(STDIN));
$charge = "円チャージしました。" . PHP_EOL;

switch ($msg) {
    case 1:
    case 2:
    case 3:
        $price = $moneys[$msg];
        echo $price . $charge;
        break;

    default:
        echo "無効な番号です" . PHP_EOL . "処理を終了します。" . PHP_EOL . "買い物を終了します。";
        exit;
}

$flag = true;

do {
    echo "商品の価格を入力して下さい:";

    $goods = trim(fgets(STDIN));

    if ($price >= $goods) {

        $price = $price - $goods;

        echo "残高は{$price}円です。" . PHP_EOL;
    } else {
        $flag = $flase;

        echo "チャージ金額を上回るため購入できません。";
    }
} while ($flag == true);

echo "買い物を終了します。";
