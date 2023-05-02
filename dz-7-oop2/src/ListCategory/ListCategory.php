<?php
/** Список категорий */
class ListCategory
{
	/** @var array Массив с категориями */
	public array $categoryList;
	
	/**
	 * Самодобавление категории товара в список
	 * категорий при создании объекта класса Category
	 * @param object $category
	 */
	public function selfAddition(object $category): void
	{
		$this->categoryList[] = $category;
	}
	
	public function showList(): void
	{
		echo "<pre>";
		print_r($this->categoryList);
		echo "<pre/>";
	}
	/**
	 * Вывод на экран списка категорий
	 */
	public function showCategories():void {
		echo "<ul>";
		foreach ($this->categoryList as $object) {
			$category = $object->getName();
			echo "<li class='category' id='$category'>$category</li>";
		}
		echo "</ul>";
	}
	/** Действие при нажатии на категорию */
	public function showData($categoryName):void {
		
		echo "$categoryName";
	}
}

