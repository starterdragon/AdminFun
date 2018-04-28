<?php


namespace AdminFun\listeners;

use AdminFun\AdminFun;
use pocketmine\event\Listener;

abstract class BaseListeners implements Listener{

	private $plugin;

	public function __construct(AdminFun $plugin){
		$this->plugin = $plugin;
	}

	public final function getPlugin(){
		return $this->plugin;
	}

}
