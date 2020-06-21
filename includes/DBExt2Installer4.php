<?php

declare( strict_types = 1 );

namespace DbExt2;

use DatabaseInstaller;
use Status;

class DBExt2Installer4 extends DatabaseInstaller {

	public function __construct( $parent ) {
		parent::__construct( $parent );
		$this->db = new class {
			public function selectDB() { }
			public function tableExists() { return false; }
		};
	}

	public function getConnectForm() : string {
		return __CLASS__;
	}

	public function isCompiled() : bool {
		return true;
	}

	public function getName() {
		return 'dbext2type4';
	}

	public function submitConnectForm() {
		return new Status();
	}
	public function openConnection() {
		return new Status();
	}
	public function setupDatabase() {}
	public function getLocalSettings() {}

}
