##目次
* HoneyChestとは
* ライセンス
* Config.yml
* コマンド
* パーミッションノート
* サポート/お問い合わせ

## HoneyChestとは
HoneyChestは、荒らし対策Pluginの一種です。  
プレイヤーがチェスト内からアイテムを盗むと、自動的に動作します。  
動作内容は、kick、BANはもちろん、MCPEbansから提供されるGlobalBANや、各種コマンドにも対応しています。  
※MCPEbansから提供されるGlobalBANは準備中です

## ライセンス
* 再　配　布　は　全　面　的　に　禁　止　で　す。
* 改変は認めますが、それを再配布するのは禁止です。
* 著作権表示を消す行為はライセンス違反とします。

## Config.yml
Plugin導入後、一度サーバーを起動させる必要があります。  
サーバーを起動させるとConfig.ymlが生成されるので、編集してください。

> Config version
>> 変更しないでください。

> BroadCaster
>> HoneyChestが動作した際に、表示するメッセージを記載してください。  
>> 何も表示させなく無い場合は「none」と記載してください。

> Action
>> 動作する際に、何を行うか記載してください。  
>> kick(プレイヤーをサーバーから強制切断します)  
>> ban(プレイヤーをサーバーから永久通報します)  
>> cmd(任意のコマンドを実行します。)

> Command
>> Action: cmd にした際に使用します。動作した際に行ってほしい、コマンドを入力してください。  
>> 例: Command: say HoneyChest Test Msg

> Do you agree with the license?
>> 日本語訳すると「ライセンスに同意しますか？」です。  
>> 同意する場合は、trueと入力してください。

## コマンド
* /hc info    --  Pluginの情報を表示します。
* /hc help    --  Pluginのコマンド一覧を表示します。
* /hc set     --  HoneyChestの登録に追加するチェストを選択します。(入力後、該当チェストをタップしてください。)
* /hc remove  --  HoneyChestの登録を解除するチェストを選択します。(入力後、該当チェストをタップしてください。)
* /hc reload  --  HoneyChest PluginのConfig.ymlを再読み込みします。

## パーミッションノート
* honeychest.*          --  HoneyChest Pluginで提供される全機能が使用可能になります。
* honeychest.info       --  /hc info が使用可能になります。
* honeychest.help       --  /hc help が使用可能になります。
* honeychest.set        --  /hc set が使用可能になります。
* honeychest.remove     --  /hc remove が使用可能になります。
* honeychest.reload     --  /hc reload が使用可能になります。
* honeychest.exception  --  この権限がある場合、チェスト内を操作しても動作しません。  
info, helpはデフォルトで誰でも利用可能になっております。  
その他の権限は、デフォルトでOP権限者に付与されています。

## サポート/お問い合わせ
古いバージョンのサポートは行っておりません。最新版のみサポートを行います。  
連絡は、[作者Twitter](http://twitter.com/rain318_1995)にて受け付けております。  
質問/要望/提案 がある場合、まずは[作者Twitter](http://twitter.com/rain318_1995)に連絡を頂けると幸いです。