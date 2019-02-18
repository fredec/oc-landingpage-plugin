<?php namespace Diveramkt\LandingPage\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\LandingPage\Models\Course;

class CoursesLandingPage extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'CoursesLandingPage',
			'description' => 'Plugin to create a Landing Page to spread the course'
		];
	}

	public function defineProperties(){
		return [
			'slug' => [
				'title' => 'Slug',
				'description' => 'Get the course using the slug',
				'type' => 'string',
				'default' => '{{ :slug }}'
			],
		];
	}

	public function onRun(){
		$this->course = $this->page['course'] = $this->getCourse();
	}

	protected function getCourse(){
		$slug = $this->property('slug');

        $course = new Course;
        $course = $course->where('slug', $slug);
        $course = $course->first();

        return $course;
	}

	public $course;
}