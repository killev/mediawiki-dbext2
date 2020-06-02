<?php

declare( strict_types = 1 );

class DBExtInstaller extends MysqlInstaller {
	public static function inject() {
		InstallerDbSupport::instance()
			->registerDBTypes( "dbext", MysqlInstaller::class );
	}

	public function getReadableName() : string {
		return 'DBExt example similar to mysql';
	}

//	public function getConnectForm() : string {
//		return __CLASS__;
//	}
//
//	public function isCompiled() : bool {
//		return true;
//	}
}
