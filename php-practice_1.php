<?php
// Q1 変数と文字列

$name = "竹浪";
echo "私の名前は「" . $name . "」です。";

// Q2 四則演算

$num = 4 * 5;
echo "$num \n";
echo ($num / 2);

// Q3 日付操作

echo "現在時刻は、" . date( "Y年m月d日 H時i分s秒" ) . "です。";

// Q4 条件分岐-1 if文

$device = "windows";

if ($device === "windows" || $device === "mac") {
    echo "使用OSは、" . $device . "です。";
} else {
    echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子

$age = 18;
$message = ($age >= 18) ? "成人です。" : "未成年です。";

echo $message;

// Q6 配列

$prefectures = [
  "東京都",
  "神奈川県",
  "栃木県",
  "千葉県",
  "埼玉県",
  "群馬県",
  "茨城県"
];

echo $prefectures[2] . "と" . $prefectures[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1

$prefectures = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($prefectures as $prefecture => $city) {
  echo $city . "\n";
}

// Q8 連想配列-2

$prefectures = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($prefectures as $prefecture => $city) {
  if ($prefecture === "埼玉県") {
      echo $prefecture . "の県庁所在地は、" . $city . "です。";
  }
}

// Q9 連想配列-3

$prefectures = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

$prefectures["愛知県"] = "名古屋市";
$prefectures["大阪府"] = "大阪市";

$prefectures_not_kantou = ["愛知県", "大阪府"];

foreach ($prefectures as $prefecture => $city) {
    if (in_array ($prefecture, $prefectures_not_kantou, true)) {
        echo $prefecture . "は関東地方ではありません。\n";
    } else {
        echo $prefecture . "の県庁所在地は、" . $city . "です。\n";
    }
}

// Q10 関数-1

function hello($name) {
  return $name . "さん、こんにちは。\n";
}

echo hello("金谷");
echo hello("安藤");

// Q11 関数-2

$price = 1000;

function calcTaxInPric($price) {
    return $price * 1.1;
}

$taxInPrice = calcTaxInPric($price);

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文

function distinguishNum($num) {
  if ($num % 2 == 0) {
      return $num . "は偶数です。\n";
  } else {
      return $num . "は奇数です。\n";
  }
}

echo distinguishNum("11");
echo distinguishNum("24");

// Q13 関数とswitch文

function evaluateGrade($judgement) {
  switch ($judgement) {
      case "A":
      case "B":
          return "合格です。\n";
          break;
      
      case "C":
          return "合格ですが追加課題があります。\n";
          break;
      
      case "D":
          return "不合格です。\n";
          break;
          
      default:
          return "判定不明です。講師に問い合わせてください。\n";
          break;
  }
}

echo evaluateGrade("A");
echo evaluateGrade("");

?>