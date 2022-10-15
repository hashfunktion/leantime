<?php
namespace leantime\domain\repositories {

    class menu
    {
		public const DEFAULT_MENU = 'generic';

		// Menu structures
		private array $menuStructures = [
	        'generic' => [ 1  => [ 'type' => 'section', 'title' => 'menu.generic.observing', 'action' => '', 'visual' => 'always' ],
						   2  => [ 'type' => 'item', 'module' => 'riskscanvas', 'title' => 'menu.riskscanvas', 'action' => '/riskscanvas/showCanvas' ],
						   3  => [ 'type' => 'item', 'module' => 'swotcanvas',  'title' => 'menu.swotcanvas',  'action' => '/swotcanvas/showCanvas' ],
						   4  => [ 'type' => 'item', 'module' => 'emcanvas',    'title' => 'menu.emcanvas',    'action' => '/emcanvas/showCanvas' ],
						   5  => [ 'type' => 'item', 'module' => 'eacanvas',    'title' => 'menu.eacanvas',    'action' => '/eqcanvas/showCanvas' ],
						   6  => [ 'type' => 'section', 'title' => 'menu.generic.designing', 'action' => '', 'visual' => 'always' ],
						   7  => [ 'type' => 'item', 'module' => 'ideas',       'title' => 'menu.ideas',       'action' => '/ideas/showBoards' ],
						   8  => [ 'type' => 'item', 'module' => 'leancanvas',  'title' => 'menu.leancanvas',   'action' => '/leancanvas/showCanvas' ],
						   9  => [ 'type' => 'item', 'module' => 'lbmcanvas',   'title' => 'menu.lbmcanvas',   'action' => '/lbmcanvas/showCanvas' ],
						   10 => [ 'type' => 'item', 'module' => 'obmcanvas',   'title' => 'menu.obmcanvas',   'action' => '/obmcanvas/showCanvas' ],
						   11 => [ 'type' => 'item', 'module' => 'dbmcanvas',   'title' => 'menu.dbmcanvas',   'action' => '/dbmcanvas/showCanvas' ],
						   12 => [ 'type' => 'item', 'module' => 'cpcanvas',    'title' => 'menu.cpcanvas',    'action' => '/cpcanvas/showCanvas' ],
						   13 => [ 'type' => 'section','title' => 'menu.generic.validating', 'action' => '', 'visual' => 'always' ],
						   14 => [ 'type' => 'item', 'module' => 'sqcanvas',    'title' => 'menu.sqcanvas',    'action' => '/sqcanvas/showCanvas' ],
						   15 => [ 'type' => 'section', 'title' => 'menu.generic.various', 'action' => '', 'visual' => 'always' ] ],
	        'dts' => [ 1  => [ 'type' => 'section', 'title' => 'menu.dts.process', 'action' => '', 'visual' => 'always' ],
					   2  => [ 'type' => 'item',    'module' => 'insightscanvas', 'title' => 'menu.insightscanvas', 'action' => '/insightscanvas/showCanvas' ],
					   3  => [ 'type' => 'item',    'module' => 'ideas',          'title' => 'menu.ideation',       'action' => '/ideas/showBoards' ],
					   4  => [ 'type' => 'section', 'title' => 'menu.dts.frameworks', 'action' =>'' , 'visual' => 'always' ],
					   5  => [ 'type' => 'item',    'module' => 'sbcanvas',    'title' => 'menu.sbcanvas',    'action' => '/sbcanvas/showCanvas' ],
					   6  => [ 'type' => 'item',    'module' => 'riskscanvas', 'title' => 'menu.riskscanvas', 'action' => '/riskscanvas/showCanvas' ],
					   7  => [ 'type' => 'item',    'module' => 'eacanvas',    'title' => 'menu.eacanvas',    'action' => '/eqcanvas/showCanvas' ],
					   8  => [ 'type' => 'item',    'module' => 'lbmcanvas',   'title' => 'menu.lbmcanvas',   'action' => '/lbmcanvas/showCanvas' ],
					   9  => [ 'type' => 'item',    'module' => 'dbmcanvas',   'title' => 'menu.dbmcanvas',   'action' => '/dbmcanvas/showCanvas' ],
					   10 => [ 'type' => 'item',    'module' => 'sqcanvas',    'title' => 'menu.sqcanvas',    'action' => '/sqcanvas/showCanvas' ],
					   11 => [ 'type' => 'item',    'module' => 'cpcanvas',    'title' => 'menu.cpcanvas',    'action' => '/cpcanvas/showCanvas' ],
					   12 => [ 'type' => 'item',    'module' => 'smcanvas',    'title' => 'menu.smcanvas',     'action' => '/smcanvas/showCanvas' ],
					   13 => [ 'type' => 'section', 'title' => 'menu.dts.admin', 'action' => '', 'visual' => 'always' ] ],
	        'lean' => [ 1 => [ 'type' => 'item', 'module' => 'ideas',     'title' => 'menu.ideas',    'action' => '/ideas/showBoards' ],
						2 => [ 'type' => 'item', 'module' => 'leancanvas','title' => 'menu.research', 'action' => '/leancanvas/showCanvas' ] ]
 	   ];

		/**
		 * getMenuTypes - Return an array of a currently supported menu types
		 *
		 * @access public
		 * @return array  Array of supported menu types
		 */
		public function getMenuTypes(): array
		{

			$language = new core\language();
			$menuTypes = [];
			foreach($this->menuStructures as $key => $menu) {
				$menuTypes[$key] = $language->__("label.menu_type.$key");
			}
			return $menuTypes;
			
		}

		/**
		 * getMenu - Return a specific menu structure
		 *
		 * @access public
		 * @return array  Array of menu structrue
		 */
		public function getMenu(string $menuType): array
		{
			
			if(!isset($this->menuStructures[$menuType])) {
				$menuType = self::DEFAULT_MENU;
			}

			return $this->menuStructures[$menuType];
			
		}

    }
}
