<?php declare(strict_types = 1);
 
namespace Modules\AddItemsToConfigurationMenu;
 
use APP;
use CController as CAction;
 
class Module extends \Core\CModule {
 
	public function init(): void {
		APP::Component()->get('menu.main')
			->findOrAdd(_('Configuration'))
				->getSubmenu()
					->insertAfter(_('Hosts'),((new \CMenuItem(_('Items')))
					->setUrl(new \CUrl('items.php?context=host'), 'items.php?context=host'))
					);
	}
 
	public function onBeforeAction(CAction $action): void {
	}
 
	public function onTerminate(CAction $action): void {
	}
}
