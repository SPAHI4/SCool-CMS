<?php
/* Мой первый класс, говном не кидать */
class Paginator {
	protected $pagesCount;
	//Страниц всего
	protected $page = 1;
	//Текущая страница
	protected $pagesResult;
	protected $itemsPerPage;

	
	function __construct($count)
	{
		$config=Registry::get("config");
		$this->itemsPerPage=$config['settings']['itemsPerPage'];
		if (isset ($_GET['page']))
			$this->page = (int) $_GET['page'];
		$this->pagesCount = ceil($count / $this->itemsPerPage);
		if (@$_GET['page'] === 'last')
			$this->page = $this->pagesCount;
		$this->itemsStart = $this->itemsPerPage * ($this->page - 1);
	}
	
	function getLimit()
	{
		return $this->itemsStart.','.$this->itemsPerPage;
	}
	
	
	
	
	function display($get = "?")
	{
		$page = $this->page;
		$pagesCount = $this->pagesCount;
		
		//Проверяем, есть ли в текущем дизаине своя пагинация
		//Если нет, то выводим код ниже
		if(!@include_once ROOT."designs/$view/php/pagination.php"){
			
			$limit = 7;
			for($i = $page-7; $i<$page; $i++)
			{
				if($i<1)continue; $pages[]="<a href='{$get}page=$i'>$i</a>";
			}
			$pages[]=" <b>$page</b>";
			for($i = $page+1; $i<$page+7; $i++)
			{
				if($i>$pagesCount)continue; $pages[]="<a href='{$get}page=$i'>$i</a>";
			}
			return " Страницы: ".($page-7>1?"... ":null).implode(", ",$pages).($page+7<$pagesCount?"...":null);
		}
	}
}