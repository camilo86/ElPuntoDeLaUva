<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	protected $fillable = ["name", "description", "img", "price", "quantity", "tags", "notes"];
	protected $hidden = ["id", "notes"];

	public function getName()
	{
		return $this->name;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getImageName()
	{
		return $this->img;
	}

	public function getImage()
	{
		// TODO: return actual image
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getTags()
	{
		return $this->tags;
	}

	public function getNotes()
	{
		return $this->notes;
	}
}
