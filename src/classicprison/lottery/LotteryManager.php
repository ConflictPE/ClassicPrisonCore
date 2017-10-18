<?php

/**
 * ClassicPrisonCore – LotteryManager.php
 *
 * Copyright (C) 2017 Jack Noordhuis
 *
 * This is private software, you cannot redistribute and/or modify it in any way
 * unless given explicit permission to do so. If you have not been given explicit
 * permission to view or modify this software you should take the appropriate actions
 * to remove this software from your device immediately.
 *
 * @author Jack Noordhuis
 *
 * Created on 23/9/17 at 10:17 PM
 *
 */

namespace classicprison\lottery;

use classicprison\Main;
use classicprison\util\traits\ClassicPrisonPluginReference;

class LotteryManager {

	use ClassicPrisonPluginReference;

	const LOTTERY_DATA_FILE_PATH = "data" . DIRECTORY_SEPARATOR . "lottery.json";

	public function __construct(Main $plugin) {
		$this->setClassicPrison($plugin);
	}

}