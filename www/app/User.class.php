<?php
class User
{
	private $ID;
	private $navigateur;
	private $preferences_categories;
	private $preferences_site; 
	private $urls_vu;
	private $lang;

	public function __constrcut($key, $bdd)
	{
		$query = "SELECT ID, navigateur, preferences_categories, preferences_site, urls_vu, lang FROM users WHERE key = $key";
		$results = $bdd->query($query);
		$row = $results->fetchArray();
		$this->ID = $row['ID'];
		$this->navigateur = $row['navigateur'];
		$this->preferences_categories = $row['preferences_categories'];
		$this->preferences_site = $row['preferences_site'];
		$this->urls_vu = $row['urls_vu'];
		$this->lang = $row['lang'];
	}

	public get_ID()
	{
		return $this->ID;
	}
	public get_navigateur()
	{
		return $this->navigateur;
	}
	public get_preferences_categories()
	{
		return $this->preferences_categories;
	}
	public get_preferences_site()
	{
		return $this->preferences_site;
	}
	public get_urls_vu()
	{
		return $this->urls_vu;
	}
	public get_lang()
	{
		return $this->lang;
	}
	public set_navigateur($input, $bdd)
	{
		$query = "UPDATE users SET navigateur = " . $input . " WHERE ID = " . $this->ID;
		$results = $bdd->query($query);
		$this->navigateur = $input;
	}
	public set_preferences_categories($input, $bdd)
	{
		$query = "UPDATE users SET preferences_categories = " . $input . " WHERE ID = " . $this->ID;
		$results = $bdd->query($query);
		$this->preferences_categories = $input;
	}
	public set_preferences_site($input, $bdd)
	{
		$query = "UPDATE users SET preferences_site = " . $input . " WHERE ID = " . $this->ID;
		$results = $bdd->query($query);
		$this->preferences_site = $input;
	}
	public set_urls_vu($input, $bdd)
	{
		$query = "UPDATE users SET urls_vu = " . $input . " WHERE ID = " . $this->ID;
		$results = $bdd->query($query);
		$this->urls_vu = $input;
	}
	public set_lang($input, $bdd)
	{
		$query = "UPDATE users SET lang = " . $input . " WHERE ID = " . $this->ID;
		$results = $bdd->query($query);
		$this->lang = $input;
	}
}