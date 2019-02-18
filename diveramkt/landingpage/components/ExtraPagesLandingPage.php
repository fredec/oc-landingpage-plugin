<?php namespace Diveramkt\LandingPage\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\LandingPage\Models\ExtraPage;

class ExtraPagesLandingPage extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'ExtraPages LandingPage',
			'description' => 'Plugin to create a Landing Page to extra pages'
		];
	}

	public function defineProperties(){
		return [
			'slug' => [
				'title' => 'Slug',
				'description' => 'Get the extra page using the slug',
				'type' => 'string',
				'default' => '{{ :slug }}'
			],
		];
	}

	public function onRun(){
		$this->extrapage = $this->page['extrapage'] = $this->getExtraPage();
	}

	protected function getExtraPage(){
		$slug = $this->property('slug');

        $extrapage = new ExtraPage;
        $extrapage = $extrapage->where('slug', $slug);
        $extrapage = $extrapage->first();

        return $extrapage;
	}

	public $extrapage;
}