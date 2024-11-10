<?php declare(strict_types = 1);
 
namespace Modules\AddTriggersToConfigurationMenu;
 
use APP;
use CController as CAction;
 
class Module extends \Core\CModule {
 
	public function init(): void {
		APP::Component()->get('menu.main')
			->findOrAdd(_('Configuration'))
				->getSubmenu()
					->insertAfter(_('Items'),((new \CMenuItem(_('Triggers')))
							->setUrl(new \CUrl('triggers.php?context=host'), 'triggers.php?context=host'))
					);
	}
	public function onBeforeAction(CAction $action): void {
	}

    public function onTerminate(CAction $action): void {
	}
}
