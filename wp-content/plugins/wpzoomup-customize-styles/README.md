# WPZoomUp Customize Styles

子テーマの `functions.php` にカスタマイズコードを追加するように、このプラグインの `wpzoomup-customize-styles.php` に書くと、同じようにカスタマイズが反映されます。

## 定数

下記の定数が利用可能です。

### WPZOOMUP_CUSTOMIZE_STYLES_URL

WPZoomUP Customize Styles プラグインディレクトリへの URL

### WPZOOMUP_CUSTOMIZE_STYLES_PATH

WPZoomUP Customize Styles プラグインディレクトリへの ファイルパス

### SCSSのコンパイル方法

プラグインディレクトリーまで移動したあと、
- yarn でpackegeをインストール（ npm i と同じ意味のコマンド）
- yarn watchでSCSSファイルの修正を常時監視（SCSSを修正したら即時CSSにコンパイルしてくれる）
- yarn cssでCSSにコンパイル（コマンド走ったときだけCSSをコンパイル）

## 謝辞

このプラグインは キタジマタカシさん（[@inc2734]( https://twitter.com/inc2734 )）が作成されたMy Snow Monkey (v0.2.1)を使用して作成しました。
