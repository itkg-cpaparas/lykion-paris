<?php

namespace Lykion\LykionBundle\Model;

abstract class Spectacle {
	protected $id;
	protected $title;
	protected $description;
	protected $nbr_danseurs;
	protected $date;
	protected $lieu;
	protected $photos;

	public function getId() {
		return $this->id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getNbrDanseurs() {
		return $this->nbrdanseurs;
	}

	public function getDate() {
		return $this->date;
	}

	public function getLieu() {
		return $this->lieu;
	}

	public function getPhotos() {
		return $this->photos;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function setNbrDanseurs($nbr_danseurs) {
		$this->nbr_danseurs = $nbr_danseurs;
	}

	public function setTDate($date) {
		$this->date = $date;
	}

	public function setLieu($lieu) {
		$this->lieu = $lieu;
	}

	public function setPhotos($photos) {
		$this->photos = $photos;
	}
}