<?php namespace Diveramkt\LandingPage\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\LandingPage\Models\Event;

class EventsLandingPage extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'EventsLandingPage',
			'description' => 'Plugin to create a Landing Page to events'
		];
	}

	public function defineProperties(){
		return [
			'slug' => [
				'title' => 'Slug',
				'description' => 'Get the ebook using the slug',
				'type' => 'string',
				'default' => '{{ :slug }}'
			],
		];
	}

	public function onRun(){
		$this->event = $this->page['event'] = $this->getEvent();
	}

	protected function getEvent(){
		$slug = $this->property('slug');

        $event = new Event;
        $event = $event->where('slug', $slug);
        $event = $event->first();

        return $event;
	}

	public $event;
}