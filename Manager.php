<?php
	namespace OpenClassrooms\LeBlog\Model;

	class Manager {
		protected function dbConnect() {
			$db = new \PDO('mysql:host=julienhaic163.mysql.db;dbname=julienhaic163;charset=utf8', 'julienhaic163', 'GUaTF0cAA6yeKOY0klsf');
			return $db;
		}
	}