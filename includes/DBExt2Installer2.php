<?php

declare( strict_types = 1 );

namespace DbExt2;

use SqliteInstaller;

class DBExt2Installer2 extends SqliteInstaller {
	public function getReadableName() : string {
		return 'DbExt2 installer2 example similar to Sqlite';
	}

//	public function getConnectForm() : string {
//		return __CLASS__;
//	}
//
//	public function isCompiled() : bool {
//		return true;
//	}
}
