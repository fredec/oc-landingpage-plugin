<?php namespace Diveramkt\LandingPage\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\LandingPage\Models\Ebook;

class EbooksLandingPage extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'EbooksLandingPage',
			'description' => 'Plugin to create a Landing Page to download Ebooks'
		];
	}

	public function defineProperties(){
		return [
			'slug' => [
				'title' => 'Slug',
				'description' => 'Get the event using the slug',
				'type' => 'string',
				'default' => '{{ :slug }}'
			],
		];
	}

	public function onRun(){
		$this->ebook = $this->page['ebook'] = $this->getEbook();
	}

	protected function getEbook(){
		$slug = $this->property('slug');

        $ebook = new Ebook;
        $ebook = $ebook->where('slug', $slug);
        $ebook = $ebook->first();

        return $ebook;
	}

	public $ebook;
}