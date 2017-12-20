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
1. \vendors\bin\cake.batを修正  
修正前: bash "%BIN_TARGET%" %*  
修正後: cmd /C "%BIN_TARGET%" %*  
1. アプリケーションの作成  
vendors\bin\cake bake project
C:\Users\bp-takano\Documents\GitHub\cakephp_repo\amane

php app/Console/cake.php bake  
⇒DB接続設定を実施  
php app/Console/cake.php bake      ※2回目 モデルの作成　以後コントローラとビューも実施  



ビルドインサーバ起動  
php -S localcakephphost:8000  


h4. httpd.conf でwebrootディレクトリをドキュメントルートに指定

<VirtualHost *:80>
    ServerName http://cakephp.local:80

    DocumentRoot C:\Users\bp-takano\Documents\GitHub\cakephp_repo\amane\webroot
    <Directory C:\Users\bp-takano\Documents\GitHub\cakephp_repo\amane\webroot>
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>

h4. hostsにドメインを追記

127.0.0.1 cakephp.local

http://cakephp.local/test.php

http://cakephp.local/phpinfo.php

http://cakephp.local/

http://cakephp.local/linklist/

phpunitのbootstrap指定はwebroot/index.phpが良い模様？

