# menu-back
献立アプリのバックエンド

## 環境構築手順
 ### Laravelプロジェクト作成
 * https://qiita.com/phper_sugiyama/items/654f7a9171ae5ccf3e83
 * docker 起動
   * docker-compose up -d
 * phpコンテナ ログイン
   * docker-compose exec php bash
 * Laravel プロジェクト作成
   * laravel new menu
 * laravel プロジェクトのディレクトリに移動
   * cd menu
 * Lavave　確認
   * php artisan --version
 * コンテナ抜ける
   * exit
 * ブラウザでアクセス
   * http://localhost/
 ### DB設定
 * DBコンテナ ログイン
   * docker-compose exec db bash
 * mysql ログイン
   * mysql -u root -proot
 * データベース作成（docker-compose.yml の内容と合わせる）
   * CREATE DATABASE menu;
 * コンテナ抜ける
   * exit
### Laravelプロジェクト設定
 * .env修正
   ```
      DB_CONNECTION=mysql
      DB_HOST=db　# docker-compose.ymlに記載したDBのサービス名
      DB_PORT=3306
      DB_DATABASE=menu # 使用するDB名
      DB_USERNAME=root
      DB_PASSWORD=root
   ```
 * phpコンテナ ログイン
   * docker-compose exec php bash
 * ディレクトリ移動
   * cd menu
 * マイグレーション
   * php artisan migrate