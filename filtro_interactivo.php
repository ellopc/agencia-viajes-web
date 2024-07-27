<?php
class FiltroInteractivo {
  private $nombreHotel;
  private $ciudad;
  private $pais;
  private $fechaViaje;
  private $duracionViaje;

  public function __construct($nombreHotel, $ciudad, $pais, $fechaViaje, $duracionViaje) {
    $this->nombreHotel = $nombreHotel;
    $this->ciudad = $ciudad;
    $this->pais = $pais;
    $this->fechaViaje = $fechaViaje;
    $this->duracionViaje = $duracionViaje;
  }

  public function getNombreHotel() {
    return $this->nombreHotel;
  }

  public function getCiudad() {
    return $this->ciudad;
  }

  public function getPais() {
    return $this->pais;
  }

  public function getFechaViaje() {
    return $this->fechaViaje;
  }

  public function getDuracionViaje() {
    return $this->duracionViaje;
  }

  public function buscarDestino() {
  }
}