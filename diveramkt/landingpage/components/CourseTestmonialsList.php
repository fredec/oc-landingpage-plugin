<?php namespace Diveramkt\LandingPage\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\LandingPage\Models\Course;
use Diveramkt\LandingPage\Models\CourseTestmonial;

class CourseTestmonialsList extends ComponentBase
{

	public function componentDetails() {
		return [
			'name' => 'List of Testmonials of Courses',
			'description' => 'A list of all testmonials of courses'
		];
	}

	public function defineProperties() {
		return [
			/*
			'course' => [
				'title' => 'Course',
				'description' => 'Get Testmonials of which Course',
				'type' => 'dropdown',
				'placeholder' => 'Select a Course'
			],
			*/
			'slug' => [
				'title' => 'Course Slug',
				'description' => 'Get the course from the slug',
				'type' => 'string',
				'default' => '{{ :slug }}'
			],
			'sortOrder' => [
				'title' => 'Sort Testmonials',
				'description' => 'Sort those testmonials',
				'type' => 'dropdown',
				'default' => 'created_at desc'
			],
		];
	}

	public function getSortOrderOptions() {
		return [
			'created_at asc' => 'Created at (ascending)',
			'created_at desc' => 'Created at (descending)',
		];
	}
/*
	public function getCourseOptions() {
		return Course::all()->lists('course_name', 'id');
	}
*/

	protected function getCourse(){
		$slug = $this->property('slug');

        $course = new Course;
        $course = $course->where('slug', $slug);
        $course = $course->first();

        return $course;
	}

	public function onRun() {
		$this->course = $this->getCourse();
		$this->testmonials = $this->getAllTestmonialsByCourse();
	}

	protected function getAllTestmonialsByCourse() {
		$query = CourseTestmonial::all();
		$query = $query->sortBy($this->property('sortOrder'));
		$query = $query->where('course_id', $this->course->id);
/*
		echo "<pre>";
		var_dump($query);
		echo "<pre>";
*/
		return $query;
	}

	public $testmonials;
	public $course;
}