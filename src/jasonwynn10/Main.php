<?php
namespace jasonwynn10\Main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\block\Chest;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{
  public $OnOff;
  public function onEnable() {
    $this->OnOff = true;
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->notice(TF::BOLD.TF::GREEN."Enabled!");
  }
  
  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
    if(strtolower($command->getName()) === "dchest") {
      if(strtolower($args[0]) === "enable") {
        $this->OnOff = true;
        $sender->sendMessage(TF::GREEN."Double Chests Enabled!");
      }elseif(strtolower($args[0]) === "disable") {
        $this->OnOff = true;
        $sender->sendMessage(TF::GREEN."Double Chests Disabled!");
      }
    }
    return false;
  }
  
  public function onChestPlace(BlockPlaceEvent $event) {
    $player = $event->getPlayer();
    $playerName = $player->getName();
    $block = $event->getBlock();
    if($block instanceof Chest) {
      if($block->getLevel() = ) {
        //
      }
    }
  }
  
  public function onDisable() {
    $this->getLogger()->notice(TF::BOLD.TF::GREEN."Disabled!");
  }
}
