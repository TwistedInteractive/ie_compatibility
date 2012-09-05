<?php
	
	Class extension_ie_compatibility extends Extension
	{

		public function getSubscribedDelegates() {
			return array(
				array('page'		=>	'/backend/',
					  'delegate'	=>	'InitaliseAdminPageHead',
					  'callback'	=>	'insertScript'),
			);
		}

        public function insertScript() {
			Administration::instance()->Page->addScriptToHead(URL . '/extensions/ie_compatibility/assets/html5shiv.js', 40);
			// Administration::instance()->Page->addScriptToHead(URL . '/extensions/html5shiv/assets/selectivizr-min.js', 9000);
			Administration::instance()->Page->addScriptToHead(URL . '/extensions/ie_compatibility/assets/ie.js', 100);
        }
		
		
	}

