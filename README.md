# SENJI Demo

[senji-ooo.com](https://senji-ooo.com/) の WordPress サイトで使っている子テーマと、ローカル開発環境（Docker）をまとめたリポジトリです。

親テーマ [Storefront](https://wordpress.org/themes/storefront/) をもとに、子テーマ `Storefront-child` でデザインを調整しています。

## ディレクトリ構成

```
.
├── senji-ooo.com/wp-content/themes/Storefront-child/  # 子テーマ（本体）
│   ├── style.css            # テーマのスタイル
│   ├── functions.php        # スクリプトの読み込み、body クラスの追加
│   ├── header.php / footer.php
│   ├── js/custom.js         # ナビゲーションの初期表示
│   └── Zen_Kaku_Gothic_Antique/  # フォント（SIL OFL）
├── customize_add_css.txt        # 管理画面「追加CSS」に貼る CSS
├── visual_portfolio_custom_css.txt  # Visual Portfolio の Custom CSS に貼る CSS
├── memo.txt                     # 上記 CSS の貼り付け場所のメモ
├── docker-compose.yml           # ローカル環境（MySQL + WordPress）
├── __docker-compose.yml         # ローカル環境の別案（db/ の Dockerfile を使う）
├── db/                          # MySQL のイメージ設定（日本語ロケール、utf8mb4）
├── .env.example                 # 環境変数のひな形
├── header.php / footer.php / style.css / function.php  # 子テーマの旧版
└── icons_*.png / icons_*.svg    # SNS アイコン
```

WordPress 本体、プラグイン、アップロード画像、`wp-config.php` はリポジトリに含めていません（[.gitignore](.gitignore) を参照）。

## ローカル環境の立ち上げ

必要なもの：Docker、Docker Compose

1. 環境変数ファイルを作り、パスワードを書き換えます。

   ```sh
   cp .env.example .env
   ```

2. コンテナを起動します。

   ```sh
   docker compose up -d
   ```

3. ブラウザで http://localhost:8000 を開き、WordPress の初期設定を済ませます。

ポートは `127.0.0.1` に限定しているので、同じネットワークの他の PC からは接続できません。

## 子テーマの反映

1. 管理画面の「外観 > テーマ」から、親テーマ **Storefront** をインストールします。
2. 子テーマをコンテナにコピーします。

   ```sh
   docker compose cp senji-ooo.com/wp-content/themes/Storefront-child ap:/var/www/html/wp-content/themes/
   ```

3. 「外観 > テーマ」で **Storefront Child** を有効にします。

## 管理画面で設定する CSS

子テーマとは別に、管理画面から CSS を入れています。

| ファイル | 貼り付け場所 |
|---|---|
| [customize_add_css.txt](customize_add_css.txt) | ダッシュボード > 外観 > カスタマイズ > 追加CSS |
| [visual_portfolio_custom_css.txt](visual_portfolio_custom_css.txt) | 固定ページ > 各ページ > Visual Portfolio ブロック > Custom CSS |

## 本番サイトで使っている主なプラグイン

- Visual Portfolio（作品一覧）
- Contact Form 7、Invisible reCaptcha（問い合わせフォーム）
- SiteGuard WP Plugin（ログイン保護）
- Autoptimize、EWWW Image Optimizer（表示速度の改善）
- BackWPup（バックアップ）
- WP Multibyte Patch（日本語対応）

## ライセンス

このリポジトリは制作実績として公開しているもので、コードの再利用は許可していません。

同梱のフォント Zen Kaku Gothic Antique は SIL Open Font License で配布されています（[OFL.txt](senji-ooo.com/wp-content/themes/Storefront-child/Zen_Kaku_Gothic_Antique/OFL.txt)）。
