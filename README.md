# 会計freee PHP SDK

会計freee API を PHP で利用するための SDK です。

会計freee API の詳細については、[会計API 概要 | freee Developers Community](https://developer.freee.co.jp/docs/accounting) をご参照ください。

## ステータス: WIP

本SDKは主要な機能が含まれていますが、制限およびバグがある可能性があります。また、このステータスの記載が更新されるまでは、APIは変更される可能性がありますので、ご利用の際はご留意ください。

## 目次

- [チュートリアル](#チュートリアル)
  - [前提条件](#前提条件)
  - [実行環境](#実行環境)
  - [freeeアプリストアへのアプリケーション登録](#freeeアプリストアへのアプリケーション登録)
  - [サンプルの実行方法](#サンプルの実行方法)
  - [SDKの導入方法](#SDKの導入方法)
- [コントリビューションについて](#コントリビューションについて)
- [ライセンス](#ライセンス)

## チュートリアル

会計freee PHP SDK を利用する手順について記載します。

### 前提条件

本SDKを利用する前に下記をご確認ください。

- freee 本体のアカウントがあること
- PHP の基礎について理解があること

freee 本体のアカウントは、後述する [freeeアプリストアへのアプリケーション登録](#freeeアプリストアへのアプリケーション登録) で必要になります。

freee API に関しては、[チュートリアルガイド](https://app.secure.freee.co.jp/developers/tutorials/1-freee%20API%E3%82%92%E5%A7%8B%E3%82%81%E3%82%8B#freee%20API%E3%82%92%E5%A7%8B%E3%82%81%E3%82%8B) をご参照ください。

PHP の基礎については、 [PHP: PHP マニュアル - Manual ](https://www.php.net/manual/ja/) をご参照ください。

### 実行環境

このリポジトリは以下の環境を想定しています。

- PHP 7.1 以上
- composer

このリポジトリは、 PHP 7.1 以上を対象としています。PHP の実行環境をお持ちでない方は、 [PHP: インストールと設定 - Manual](https://www.php.net/manual/ja/install.php) を参考に環境を準備してください。また、 [composer](https://getcomposer.org/) はこちらからインストールしてください。

### freeeアプリストアへのアプリケーション登録

本 SDK で利用する `client_id` および `client_secret` を取得するため、freeeアプリストアの開発者ページでアプリケーションを登録します。

こちらの [チュートリアル | freee アプリストア](https://app.secure.freee.co.jp/developers/tutorials/2-%E3%82%A2%E3%83%97%E3%83%AA%E3%82%B1%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%82%92%E4%BD%9C%E6%88%90%E3%81%99%E3%82%8B) を参考に、アプリケーションを登録して下さい。

本 SDK と接続するには、コールバックURLに、`http://localhost:8000/auth-callback` を設定します。

### サンプルの実行方法

#### WebApp のサンプル

##### WebApp のサンプルの実行環境

サンプルは [Laravel](https://laravel.com/) をベースに作成しています。サンプルを実行する際は、前述の実行環境に加え、下記も併せてご準備ください。

- PHP 7.2 以上
  - BCMath PHP Extension
  - Ctype PHP Extension
  - JSON PHP Extension
  - Mbstring PHP Extension
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension
- Node.js (UI生成時に `npm` を使用するため)

##### WebApp のサンプルの実行環境 (Docker)

また、Docker を利用可能な方向けに、上記実行環境を含む Dockerfile および docker-compose.yaml を同梱しています。利用する際は、下記をご参考にご利用ください。

```bash
cd <本リポジトリのクローン先ディレクトリ>
cd samples
docker-compose build
docker-compose up -d
docker exec -it samples_webapp_1 /bin/bash
```

上記の操作後、dockerコンテナの `/usr/src/app` にログインできます。このディレクトリは、本リポジトリの `samples/BasicWebApp` をマウントしたものです。下記の手順を適宜読み替えて、ご利用ください。

##### WebApp のサンプルの実行手順

本リポジトリをクローンしたのち、PowerShell や bash などのターミナルでディレクトリに移動します。

```bash
cd <本リポジトリのクローン先ディレクトリ>
cd samples/BasicWebApp
cp .env.example .env
```

コピーした `.env` を開き、下記の部分を設定してください。 `<client_id>`, `<client_secret>` は、それぞれ [freeeアプリストアへのアプリケーション登録](#freeeアプリストアへのアプリケーション登録) で取得した値を設定します。

```env
FREEE_ACCOUNTING_CLIENT_ID=<client_id>
FREEE_ACCOUNTING_CLIENT_SECRET=<client_secret>
```

ターミナルで、下記を実行します。

```bash
# パッケージをインストールする
composer install

# Application encryption key を発行する
php artisan key:generate

# Laravel の内蔵サーバーを実行する
php artisan serve

# ※ Docker で動かしている場合は、下記のように host を指定する
php artisan serve --host 0.0.0.0
```

`http://localhost:8000` を開き、ページが開けば正常に起動できています。

右上の「LOGIN」をクリックすると、freeeアプリストアのアプリケーションに対して認証が行われます。初回は「アプリ連携の開始」という画面が表示されますので、内容を確認し「許可する」ボタンをクリックしてください。

正常に認証されれば、 `http://localhost:8000/home` にリダイレクトされます。上部のバーに freee のユーザー名が表示されていれば成功です。また、ユーザー名を選択し、そのプルダウンから「Me」を選択すると、ユーザー情報や取引情報が表示されれば、情報を正しく取得できていることが確認できます。

### SDKの導入方法

_TBD_

## コントリビューションについて

このプロジェクトへのコントリビューションを歓迎いたします。詳細については[コントリビューションガイド](./CONTRIBUTION_GUIDE.md)をご覧ください。

- [機能リクエスト](./CONTRIBUTION_GUIDE.md#機能リクエスト)
- [不具合報告](./CONTRIBUTION_GUIDE.md#不具合報告)
- [プルリクエストの作成について](./CONTRIBUTION_GUIDE.md#プルリクエストの作成について)

## ライセンス

ライセンスについては下記をご参照ください。

[MIT License](./LICENSE)