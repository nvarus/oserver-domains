<?php

	class JsonFile
	{
		protected static string $_products_json = "./src/products.json";
		
		private function __construct() {
		}
		/** Запись в файл products.json объектов Product */
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
		/** Получение из файла products.json сохраненных данных */
		public static function readInFile($array = []):array {
			$json_write = file_get_contents(self::$_products_json);
			$unserial_array[] = json_decode($json_write);
			foreach ($unserial_array as $item) {
				foreach ($item as $value) {
					$array[] = unserialize($value);
				}
			}
			return $array;
		}
	}
