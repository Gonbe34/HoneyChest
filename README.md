## 目次
* HoneyChestとは
* ライセンス
* Config.yml
* コマンド
* パーミッションノート
* サポート/お問い合わせ
* バージョンについて

## HoneyChestとは
HoneyChestは、荒らし対策Pluginの一種です。  
プレイヤーがチェスト内からアイテムを盗むと、自動的に動作します。  
kick、BANはもちろん、MCPEbansから提供されるGBANや、各種コマンドにも対応しています。  

※MCPEbansから提供されるGlobalBANは準備中です

## ライセンス
* 再　配　布　は　全　面　的　に　禁　止　で　す。
* 改変は認めますが、それを再配布するのは禁止です。
* 著作権表示を消す行為はライセンス違反とします。

## Config.yml
Plugin導入後、一度サーバーを起動させる必要があります。  
サーバーを起動させるとConfig.ymlが生成されるので、編集をしてください。
|config|説明|
|-----|-----|
|Config version|変更しないでください。|
|||
|BroadCaster|HoneyChestが動作した際に、表示するメッセージを記載してください。|
||何も表示させなく無い場合は「none」と記載してください。|
|||
|Action|動作する際に、何を行うか記載してください。|
||kick(プレイヤーをサーバーから強制切断します)|
||ban(プレイヤーをサーバーから永久通報します)|
||cmd(任意のコマンドを実行します。)|
|||
|Command|Action: cmd にした際に使用します。|
||動作した際に行ってほしい、コマンドを入力してください。|
||例: Command: say HoneyChest Test Msg|
|||
|Do you agree with the license?|日本語訳すると「ライセンスに同意しますか？」です。|
||同意する場合は、trueと入力してください。|

## コマンド
|コマンド|説明|
|-----|-----|
|/hc info|Pluginの情報を表示します。|
|/hc help|Pluginのコマンド一覧を表示します。|
|/hc set|HoneyChestの登録に追加するチェストを選択します。|
|/hc remove|HoneyChestの登録を解除するチェストを選択します。|
|/hc reload|HoneyChest PluginのConfig.ymlを再読み込みします。|

「/hc set」「/hc remove」を入力した後に、該当チェストをタップする必要があります。

## パーミッションノート
|コマンド|説明|
|-----|-----|
|honeychest.*|HoneyChest Pluginで提供される全機能が使用可能になります。|
|honeychest.info|/hc info が使用可能になります。|
|honeychest.help|/hc help が使用可能になります。|
|honeychest.set|/hc set が使用可能になります。|
|honeychest.remove|/hc remove が使用可能になります。|
|honeychest.reload|/hc reload が使用可能になります。|
|honeychest.exception|この権限がある場合、チェスト内を操作しても動作しません。|

info, helpはデフォルトで誰でも利用可能になっております。  
その他の権限は、デフォルトでOP権限者に付与されています。

## サポート/お問い合わせ
古いバージョンのサポートは行っておりません。最新版のみサポートを行います。  
※「最新版」に、Build Versionは含みません。バージョンは、「x.y.z」の事を指します。  
連絡は、[作者Twitter](http://twitter.com/rain318_1995)にて受け付けております。  
質問/要望/提案 がある場合、まずは[作者Twitter](http://twitter.com/rain318_1995)に連絡を頂けると幸いです。

## バージョンについて
バージョンは、基本的に「X.Y.Z」で構成されております。
|値|説明|
|:-----:|-----|
|X|インターフェースの変更によって下位互換性が失われる大きな変更|
|Y|新しい機能の追加（ただし既存インターフェースの下位互換は保証）|
|Z|インターフェースに影響を与えない内部的な変更(バグ修正等々)|

また、開発途中のプログラムの場合は、「X.Y.Z [Build #]」となり、  
プラグイン開発が完了した際に、Build番号は取り除かれます。  
例: 「0.0.0 [Build 3]」  >>>  「0.0.0」