<?php namespace Diveramkt\LandingPage\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\LandingPage\Models\ExtraPage;

class ExtraPagesList extends ComponentBase
{

	public function componentDetails() {
		return [
			'name' => 'ExtraPages List',
			'description' => 'A list of all active extra pages'
		];
	}

	public function defineProperties() {
		return [
			'sortOrder' => [
				'title' => 'Sort Extra Pages',
				'description' => 'Sort those Extra Pages',
				'type' => 'dropdown',
				'default' => 'created_at desc'
			],
			'sidebar' => [
				'title' => 'Show in sidebar?',
				'description' => 'Get just Extra Pages checked with the Sidebar option',
				'type' => 'checkbox',
				'default' => false
			],
		];
	}

	public function getSortOrderOptions() {
		return [
			'category asc' => 'Page name (ascending)',
			'category desc' => 'Page name (descending)',
			'created_at asc' => 'Created at (ascending)',
			'created_at desc' => 'Created at (descending)',
		];
	}

	public function onRun() {
		$this->extrapages = $this->getAllExtraPages();
	}

	protected function getAllExtraPages() {
		$query = ExtraPage::all();

		$query = $query->where('enabled', true);
		$query = $query->sortBy($this->property('sortOrder'));

		if ($this->property('sidebar') == true) {
			$query = $query->where('at_sidebar', true);
		}

		return $query;
	}

	public $extrapages;
}