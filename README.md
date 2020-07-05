![Email-form](https://user-images.githubusercontent.com/58777805/86525580-e4845780-bec3-11ea-87f0-1443c35ee0a4.png)





# PHPお問い合わせフォーム
PHPで作るとてもシンプルなお問い合わせ画面です。



# 構成　
*1.入力画面* → *2.確認画面* →　*3.送信完了画面*

それぞれ　contact.php,confirm.php,thanks.phpの三段階の構成です。


# 必要環境
PHPが動作環境
XAMMP (<https://www.apachefriends.org/jp/index.html>)  
MAMP (<https://www.mamp.info/>)  
Visual　Studio　Code (<https://azure.microsoft.com/ja-jp/products/visual-studio-code/>)  
PHP公式 (<https://www.php.net/manual/ja/intro-whatis.php>)  

#### 参考
Visual Studio Code でPHPを開始するまでの手順 (<https://qiita.com/tfukumori/items/97a8f1ac6532612b004f>)   
PHP Server拡張機能 (<https://www.atmarkit.co.jp/ait/articles/1809/25/news027.html>) ←これ参考にしました  

# 警告

PHPの仕様変更により、ヒアドキュメント（EOT）のエラーがローカルでも問題なく動作してしまうので注意が必要。。これで7時間ぐらいハマった。。。


>"非常に重要なことですが、終端 ID がある行には、セミコロン (;) 以外の他の文字が含まれていてはならないことに注意しましょう。 これは、特に ID はインデントしてはならないということ、 セミコロンの前に空白やタブを付けてはいけないことを意味します。 終端 ID の前の最初の文字は、使用するオペレーティングシステムで定義された 改行である必要があることにも注意を要します。 これは、UNIX システムでは macOS を含め \n となります。 最後の区切り文字の後にもまた、改行を入れる必要があります。この規則が破られて終端 ID が "clean" でない場合、 終端 ID と認識されず、PHP はさらに終端 ID を探し続けます。 適当な終了 ID がみつからない場合、 スクリプトの最終行でパースエラーが発生します。  引用元<https://www.php.net/manual/ja/language.types.string.php#language.types.string.syntax.heredoc>"


*終端ID　EOTの行にはセミコロン(；)以外は文字も空白もを入れてはいけません*



実際にいかのような警告文が出ました。

`Parse error: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) in /url-foo.jp/confirm.php on line 21`

悪い例）
`<?php
$str = <<<EOT
Example of string
spanning multiple lines
using heredoc syntax.
 EOT; 　$foo = 1;
 /* EODの前に空白があるし、EOT;以外の文字が入っている*/

`


良い例）
`<?php
$str = <<<EOT
Example of string
spanning multiple lines
using heredoc syntax.
EOT;
/* EODの前に空白がないし、EOT；以外の文字がない。*/
`


## 実際にメールを受け取る場合は

サーバーをレンタルするのが簡単でした。
XFREE　（<https://www.xfree.ne.jp) なら無料でFTPで簡単にアップロードできます。





