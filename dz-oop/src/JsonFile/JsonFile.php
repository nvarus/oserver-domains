<?php

	class JsonFile
	{
		protected static string $_products_json = "./src/products.json";
		
		private function __construct() {
		}
		
		public static function saveInFile($object, $array = []):void {
			// получаем данные из файла
			$json_write = file_get_contents(self::$_products_json);
			// декодируем из json
			$array = json_decode($json_write);
			// сериализуем объект
			$serialize_object = serialize($object);
			// добавляем в массив
			$array[] = $serialize_object;
			$json_save = json_encode($array, JSON_UNESCAPED_UNICODE);
			file_put_contents(self::$_products_json, $json_save);
		}
		public static function readInFile($array = []):void {
			$json_write = file_get_contents(self::$_products_json);
			$unserial_array[] = json_decode($json_write);
			foreach ($unserial_array as $item) {
				foreach ($item as $value) {
					$array[] = unserialize($value);
				}
			}
			echo "<pre>";
			print_r($array);
			echo "</pre>";
		}
	}
