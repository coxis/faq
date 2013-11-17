<?php
namespace Coxis\Faq;

class Bundle extends \Coxis\Core\BundleLoader {
	public function run() {
		\Coxis\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'FAQ', 'link' => 'faq');
		\Coxis\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\URL::to('faq/icon.svg'), 'link'=>'faq', 'title' => __('FAQ'), 'description' => __('All the questions'));
		parent::run();
	}
}
return new Bundle;