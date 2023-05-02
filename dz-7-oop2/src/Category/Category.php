<?php
	
	class Category
	{
		private string $name;
		public array $listProducts;
		protected array $filters;
		
		function __construct(string $_name, $_price = "Price")
		{
			$this->name = $_name;
			$this->filters[] = $_price;
		}
		
		public function getName(): string
		{
			return $this->name;
		}
		
		/** Вводим названия продуктов  */
		public function setListProducts(array $listProducts): void
		{
			$this->listProducts = $listProducts;
		}
		
		/** Получить массив с фильтрами */
		public function getFilters(): array
		{
			return $this->filters;
		}
		
		/** Выводим на экран фильтры */
		public function showFilters()
		{
			echo "</form>";
			echo "<form action='' method='post'>";
			echo "<input type='hidden' name='cat' value='$this->name'>";
			foreach ($this->filters as $item) {
				echo "<span class='filter__name'><b>$item</b></span>";
				$placeholder_list = [];
				foreach ($this->listProducts as $product) {
					foreach ($product as $key => $value) {
						if ($item == $key) {
							$placeholder_list[] = $value;
						}
					}
				}
				sort($placeholder_list);
				$first_value = $placeholder_list[0];
				$last_value = $placeholder_list[array_key_last($placeholder_list)];
				echo "<input class='filter__input' type='text' name='$item' placeholder='min: $first_value, max: $last_value'>";
				
			}
			echo "<button type='submit' class='apply-btn'>Применить</button>";
			echo "</form>";
			
		}
		
		/** Отображаем отфильтрованный список товаров */
		public function applyFilters($filters)
		{
			// перебираем список товаров
			foreach ($this->listProducts as $product) {
				// перебираем список фильтров
				$flag = true;
				foreach ($filters as $filter_key => $filter_value) {
					// если находим несовпадающий фильтр, $flag = false
					if ($filter_value != '' and $filter_value != $product[$filter_key]) {
						$flag = false;
						break;
					}
				}
				// выводим товар на экран, только если $flag == true
				if ($flag) {
					echo "<div class='products'>";
					foreach ($product as $key => $value) {
						echo " $key: $value ";
					}
					echo "</div>";
				}
			}
		}
	}