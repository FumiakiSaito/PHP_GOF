
■機能
ファイルの内容を
・プレーンテキストで表示する
・ハイライト表示する


■通常
http://www.fffumi.com/dev/gof/Adapter/adapter_sample_client.php
これで問題なく両機能が使える

しかしDisplaySourceFile.class.phpインタフェースが宣言されていて使わなければいけない場合、
使えなくなる。メソッド名が違うから
インターフェースを使わなければいけないということはプレーンテキストで表示する機能を隠蔽したい意味もあるため
それも実現する必要がある。

そこで、アダプタパターンを使用しハイライト表示する機能のみを使用できるようにする



■継承を使ったバージョン
http://www.fffumi.com/dev/gof/Adapter/adapter_client.php
継承とインターフェースを使用し、親のコンストラクタとメソッドを使用する


■委譲を使ったバージョン
http://www.fffumi.com/dev/gof/Adapter/adapter_client2.php
継承は使わず、インターフェースのみを使用し使いたいクラスのインスタンスを生成し使用する