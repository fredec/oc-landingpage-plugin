<?php namespace Diveramkt\LandingPage\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\LandingPage\Models\ExtraPagesContent;

class ExtraPagesLPContent extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'ExtraPages Content',
			'description' => 'Plugin to create a Landing Page to an extra pages content'
		];
	}

	public function defineProperties(){
		return [
			'slug' => [
				'title' => 'Slug',
				'description' => 'Get the extra page content using the slug',
				'type' => 'string',
				'default' => '{{ :slug }}'
			],
		];
	}

	public function onRun(){
		$this->pagecontent = $this->page['pagecontent'] = $this->getContent();
	}

	protected function getContent(){
		$slug = $this->property('slug');

        $pagecontent = new ExtraPagesContent;
        $pagecontent = $pagecontent->where('slug', $slug);
        $pagecontent = $pagecontent->first();

        return $pagecontent;
	}

	public $pagecontent;
}