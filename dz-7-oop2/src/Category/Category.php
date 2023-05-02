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
	
	public function getName():string {
		return $this->name;
	}
	
	/** Вводим названия продуктов  */
	public function setListProducts(array $listProducts): void
	{
		$this->listProducts = $listProducts;
	}
	
	public function getFilters():array
	{
		return $this->filters;
	}

	public function showFilters() {
            echo "</form>";
            echo "<form action='' method='post'>";
            echo "<input type='hidden' name='cat' value='$this->name'>";
		foreach ($this->filters as $item) {
            echo "<span class='filter__name'><b>$item</b></span>";
            $placeholder_list = [];
            foreach ($this->listProducts as $product) {
                foreach ($product as $key=>$value) {
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

    public function applyFilters($filters) {
        echo "<pre>";
        print_r($filters);
        echo "</pre>";
    }
}