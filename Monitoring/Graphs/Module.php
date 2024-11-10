<?php declare(strict_types = 1);

namespace Modules\AddGraphsToMonitoringMenu;

use APP;
use CController as CAction;

class Module extends \Core\CModule {
 
	public function init(): void {
		APP::Component()->get('menu.main')
			->findOrAdd(_('Monitoring'))
				->getSubmenu()
					->insertAfter(_('Latest data'),((new \CMenuItem(_('Graphs')))
						->setAction('charts.view'))
					);
	}

    public function onBeforeAction(CAction $action): void {
	}

    public function onTerminate(CAction $action): void {
	}
}
