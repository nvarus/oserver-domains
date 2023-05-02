<?php
/** Список категорий */
class ListCategory
{
	/** @var array Массив с категориями */
	public array $categoryList;
	
	public function __construct(array $category)
	{  foreach ($category as $item) {
		$this->categoryList[] = $item;
	}
	}
	
	public function showList(): void
	{
		echo "<pre>";
		print_r($this->categoryList);
		echo "<pre/>";
	}

	/** Действие при нажатии на категорию */
	public function showData($categoryName):void {
		echo "$categoryName";
	}
}
