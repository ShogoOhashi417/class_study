<?php

require_once "Class/Customer.php";
require_once "func_customer/Customer.php";

// -------------①privateメソッド--------------

// クラスの場合
$customer = new Customer('大橋省吾', "sohashi@kairosmarketing.net");

echo $customer->getProfile(); // 大橋省吾(sohashi@kairosmarketing.net)


// 関数の場合
echo getProfile("大橋省吾", "sohashi@kairosmarketing.net"); // 大橋省吾(sohashi@kairosmarketing.net)

// 関数だとprivateにできないので、意図しないケースで呼び出される恐れがある
echo formatProfile("大橋省吾", "28歳"); // // 大橋省吾(28歳)

// クラスの場合、privateメソッドなので外部から呼び出しができない
echo $customer->formatProfile("大橋省吾", "28歳");



// ある日の出来事...
// プロフィールの表記を [名前]（mail:[メールアドレス]）に変更になったとする(例.大橋省吾(mail:sohashi@kairosmarketing.net))

// クラスの場合
echo $customer->getProfile(); // 大橋省吾(mail:sohashi@kairosmarketing.net)
// formatProfileはprivateメソッドなので、Customerクラスでしか使われていないことが保証される
// 影響箇所もCustomerクラスの使用箇所だけにとどまる（Customerクラスの仕様変更なので、修正不要）


// 関数の場合
echo getProfile("大橋省吾", "sohashi@kairosmarketing.net"); // 大橋省吾(mail:sohashi@kairosmarketing.net)

// 直接呼び出しているので、意図しない使われ方をしていた時に修正する必要が出てきてしまう
echo formatProfile("大橋省吾", "28歳"); // // 大橋省吾(mail:28歳)

// formatProfileがgetProfile()以外で使われている可能性があるので、影響範囲が読めない
// 意図しない使われ方をしていると、↑のバグが発生する
// 外部から呼び出せるということは、修正箇所が無限に出てくる可能性がある




// -------------③状態管理--------------

// クラスで管理する場合
$customer = new Customer('大橋省吾', "sohashi@kairosmarketing.net");

echo $customer->getName(); // 大橋省吾

// setterがない限り、一度生成した$customerの名前は不変
// どこで$customer->getName()を呼び出しても、"大橋省吾"が出力されることが保証されている


// 関数で管理する場合
$customer = customer('大橋省吾', "sohashi@kairosmarketing.net");

echo $customer['name']; // 大橋省吾

// 名前を変えることができてしまう
$customer['name'] = '小橋省吾';

echo $customer['name']; // 小橋省吾

// 関数だと配列で持つしかできないので、状態管理できない
// 配列だと値を書き換えることができる（「するしない」ではなく「できてしまう」）
// $customer['name']が大橋省吾であることを保証できない