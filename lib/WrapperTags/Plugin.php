<?php

namespace WrapperTags;

use Pimcore\API\Plugin as PluginLib;

class Plugin extends PluginLib\AbstractPlugin implements PluginLib\PluginInterface {
    public static function install(){
		return "Are you sure Plugin successfully installed.";
	}
	
	public static function uninstall(){
		return "Are you sure Plugin successfully uninstalled.";
	}

	public static function isInstalled(){
		return true;
	}
}

