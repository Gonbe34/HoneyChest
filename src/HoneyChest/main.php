<?php

namespace HoneyChest;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\utils\TextFormat;	# 色文字
use pocketmine\utils\Config;		# Config.yml
use pocketmine\Permission;		# Permission
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerInteractEvent;

class HoneyChest extends PluginBase{

	public function onCommand(CommandSender $sender, Command $cmd, $args){
    	$fcmd = strtolower($cmd->getName());
	switch($fcmd){
		case "honeychest":
			if(isset($args[0])){
				$args[0] = strtolower($args[0]);
    				if($args[0]=="help"){
    					if($sender->hasPermission("honeychest.*","honeychest.commands.help")){
    						$sender->sendMessage(TextFormat::GREEN."/hc info    >>>  Pluginの情報を表示します。");
    						$sender->sendMessage(TextFormat::GREEN."/hc help    >>>  Pluginのコマンド一覧を表示します。");
    						$sender->sendMessage(TextFormat::GREEN."/hc set     >>>  HoneyChestの登録に追加するチェストを選択します。");
    						$sender->sendMessage(TextFormat::GREEN."/hc remove  >>>  HoneyChestの登録を解除するチェストを選択します。");
    						$sender->sendMessage(TextFormat::GREEN."/hc reload  >>>  HoneyChest PluginのConfig.ymlを再読み込みします。");
    						break;
    					}else{
    						$sender->sendMessage(TextFormat::RED."このコマンドを使用する権限がありません。");
    						break;
    					}
    				}elseif($args[0]=="info"){
    					if($sender->hasPermission("honeychest.*","honeychest.commands.info")){
    						$sender->sendMessage(TextFormat::AQUA."Plugin Developer : rain318");
						$sender->sendMessage(TextFormat::AQUA."Plugin Version   : 0.0.0");
					break;
    					}else{
    						$sender->sendMessage(TextFormat::RED."このコマンドを使用する権限がありません。");
    						break;
    					}
    				}else{
    					if($sender->hasPermission("honeychest.*","honeychest.info","honeychest.help","honeychest.set","honeychest.remove","honeychest.reload","honeychest.exception")){
    						$sender->sendMessage(TextFormat::YELLOW."コマンドが見つかりません。/hc help でコマンドの一覧を表示してください。");
						break;
    					}else{
    						$sender->sendMessage(TextFormat::RED."このコマンドを使用する権限がありません。");
    						break;
    					}
    				}
			}
		}
	}
}