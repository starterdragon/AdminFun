<?php


namespace AdminFun\commands;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandExecutor;
use AdminFun\AdminFun;
use pocketmine\plugin\Plugin;

abstract class BaseCommand extends PluginBase implements CommandExecutor{

	public $plugin;

	public function __construct(AdminFun $plugin){
		$this->plugin = $plugin;
	}

	public final function getPlugin() : Plugin{
		return $this->plugin;
	}

}
