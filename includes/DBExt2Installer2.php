<?php

declare( strict_types = 1 );

namespace DbExt2;

class DBExt2Installer2 extends MysqlInstaller {
	public function getReadableName() : string {
		return 'DBExt2 installer2 example similar to mysql';
	}

//	public function getConnectForm() : string {
//		return __CLASS__;
//	}
//
//	public function isCompiled() : bool {
//		return true;
//	}
}
