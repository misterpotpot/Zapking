<?php
class Url
{
	private $ID;
	private $href;
	private $categories;
	private $lectures; 
	private $qs;
	private $qs_0;
	private $site;
	private $lang;
	private $date_push;

	public function __constrcut($ID, $href, $categories, $lectures, $qs, $qs_0, $site, $lang, $date_push)
	{
		$this->ID = $ID;
		$this->href = $href;
		$this->categories = $categories;
		$this->lectures = $lectures;
		$this->qs = $qs;
		$this->qs_0 = $qs_0;
		$this->site = $site;
		$this->lang = $lang;
		$this->date_push = $date_push;
	}

	public get_ID()
	{
		return $this->ID;
	}
	public get_href()
	{
		return $this->href;
	}
	public get_categories()
	{
		return $this->categories;
	}
	public get_lectures()
	{
		return $this->lectures;
	}
	public get_qs()
	{
		return $this->qs;
	}
	public get_qs_0()
	{
		return $this->qs_0;
	}
	public get_site()
	{
		return $this->site;
	}
	public get_lang()
	{
		return $this->lang;
	}
	public get_date_push()
	{
		return $this->date_push;
	}
}