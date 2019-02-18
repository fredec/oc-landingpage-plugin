<?php namespace Diveramkt\LandingPage\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\LandingPage\Models\Course;

class CoursesList extends ComponentBase
{

	public function componentDetails() {
		return [
			'name' => 'Courses List',
			'description' => 'A list of all active courses'
		];
	}

	public function defineProperties() {
		return [
			'total' => [
				'title' => 'Total',
				'description' => 'Total of courses to return',
				'default' => '4',
				'validationPattern' => '^[0-9]+$',
				'validationMessage' => 'Only numbers allowed',
			],
			'sortOrder' => [
				'title' => 'Sort Courses',
				'description' => 'Sort those courses',
				'type' => 'dropdown',
				'default' => 'created_at desc'
			],
		];
	}

	public function getSortOrderOptions() {
		return [
			'course_name asc' => 'Title (ascending)',
			'course_name desc' => 'Title (descending)',
			'created_at asc' => 'Created at (ascending)',
			'created_at desc' => 'Created at (descending)',
		];
	}

	public function onRun() {
		$this->courses = $this->getAllCourses();
	}

	protected function getAllCourses() {
		$query = Course::all();

		$query = $query->where('course_enabled', true);
		$query = $query->sortBy($this->property('sortOrder'));

		if ($this->property('total') > 0) {
			$query = $query->take($this->property('total'));
		}

		return $query;
	}

	public $courses;
}