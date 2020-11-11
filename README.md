# Laravel_sample_use_laravel_ui

## day1
1. .envの編集
2. databaseの作成
3. マイグレーション
4. laravel/uiのインストール
（~/.zshrcに`setopt nonomatch`を追記）
```$ compser require laravel/ui:2.*```
5. 認証機能のセットアップ
```$ php artisan ui vue --auth```
6. JSとCSSのビルド
```$ npm install && npm run dev```

## day2
1. ログインコントローラーの作成
```$ php artisan make:controller admin/AdminLoginController```
2. ログインコントローラーの編集
3. ログアウトコントローラーの作成
```$ php artisan make:controller admin/AdminLogoutController```
4. ログアウトコントローラーの編集
5. 管理トップコントローラーの作成
```$ php artisan make:controller admin/AdminTopController```
6. 管理トップコントローラーの編集
7. 
