# cakephp_repo
cakephp2コード構築手順


# 環境

1. composerをWindowsにインストール  
https://github.com/composer/windows-setup/releases/  
1. PHPがインストールされている  
※xammpとか適当に。phpへのpathが通っている事  
※確認用にビルドインサーバは欲しいので5.4以降が良い？  
1. MySQL  
※モデルの作成のためにDBが欲しい  


# コード生成  
1. 管理者権限でコマンドプロンプトを起動  
1. cd (プロジェクトのルート)  
1. composer install ←composer.jsonを右クリックからもできるみたい  
1. cake.batを修正  
修正前: bash "%BIN_TARGET%" %*  
修正後: cmd /C "%BIN_TARGET%" %*  
1. アプリケーションの作成  
vendors\bin\cake bake project
amane

php amane/Console/cake.php bake  
⇒DB接続設定を実施  
php amane/Console/cake.php bake      ※2回目 モデルの作成　以後コントローラとビューも実施  



ビルドインサーバ起動  
php -S localcakephphost:8000  