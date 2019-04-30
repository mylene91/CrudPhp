<?php

namespace Mumu\Blog\Model;
require_once('tools/Config.php');


class Manager
{
	protected function connexionBdd()
	{
	    $bdd = new \PDO('mysql:host='.\Config::$HOST.';dbname='.\Config::$DBNAME.';charset=utf8',  \Config::$USER, \Config::$PASSWORD);
	    return $bdd;	        
	}
}
