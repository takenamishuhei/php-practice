<?php
// Q1 tic-tac問題

echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++) {
    $count = $i;
    if(($count % 4) === 0 && ($count % 5) === 0) {
        echo 'tic-tac';
        echo PHP_EOL;
    } elseif (($count % 4) === 0) {
        echo 'tic';
        echo PHP_EOL;
    } elseif (($count % 5) === 0) {
        echo 'tac';
        echo PHP_EOL;
    } else {
        echo $count;
        echo PHP_EOL;
    }
}

// Q2 多次元連想配列

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// Q1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// Q2
foreach ($personalInfos as $user => $info) {
    echo $user +1 . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . 'です。';
    echo PHP_EOL;
}

// Q3
$ageList = [25, 30, 18];

foreach ($ageList as $age => $years_old) {
    $personalInfos[$age] ['age'] = $years_old;
}

// Q3 オブジェクト-1

$yamada = new Student(120, '山田');

echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo $this->studentName . 'はPHPの授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス

// Q1
$time = new DateTime();
echo $time->sub(new DateInterval('P1M'))->format('Y-m-d');

// Q2
$time1 = new DateTime();
$time2 = new DateTime('1992-04-25');
echo $time2->diff($time1)->format('あの日から%a日経過しました。');

?>