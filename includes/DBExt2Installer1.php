<?php

declare( strict_types = 1 );

namespace DbExt2;

use MysqlInstaller;

class DBExt2Installer1 extends MysqlInstaller {
	public function getReadableName() : string {
		return 'DbExt2 installer1 example similar to Mysql';
	}

//	public function getConnectForm() : string {
//		return __CLASS__;
//	}
//
//	public function isCompiled() : bool {
//		return true;
//	}
}
