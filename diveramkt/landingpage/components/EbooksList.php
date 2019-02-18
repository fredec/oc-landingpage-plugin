<?php namespace Diveramkt\LandingPage\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\LandingPage\Models\Ebook;

class EbooksList extends ComponentBase
{

	public function componentDetails() {
		return [
			'name' => 'Ebooks List',
			'description' => 'A list of all active ebooks'
		];
	}

	public function defineProperties() {
		return [
			'total' => [
				'title' => 'Total',
				'description' => 'Total of ebooks to return',
				'default' => '4',
				'validationPattern' => '^[0-9]+$',
				'validationMessage' => 'Only numbers allowed',
			],
			'sortOrder' => [
				'title' => 'Sort Ebooks',
				'description' => 'Sort those ebooks',
				'type' => 'dropdown',
				'default' => 'name asc'
			],
		];
	}

	public function getSortOrderOptions() {
		return [
			'title asc' => 'Title (ascending)',
			'title desc' => 'Title (descending)',
			'created_at asc' => 'Created at (ascending)',
			'created_at desc' => 'Created at (descending)',
		];
	}

	public function onRun() {
		$this->ebooks = $this->getAllEbooks();
	}

	protected function getAllEbooks() {
		$query = Ebook::all();

		$query = $query->where('ebook_enabled', true);
		$query = $query->sortBy($this->property('sortOrder'));

		if ($this->property('total') > 0) {
			$query = $query->take($this->property('total'));
		}

		return $query;
	}

	public $ebooks;
}