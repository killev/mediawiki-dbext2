<?php

declare( strict_types = 1 );

namespace DbExt2;

class DBExt2Installer1 extends MysqlInstaller {
	public function getReadableName() : string {
		return 'DBExt1 installer1 example similar to mysql';
	}

//	public function getConnectForm() : string {
//		return __CLASS__;
//	}
//
//	public function isCompiled() : bool {
//		return true;
//	}
}
