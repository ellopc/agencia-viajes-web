<?php
session_start();

function mostrarNotificacion($mensaje) {
  $_SESSION['notificacion'] = $mensaje;
}

mostrarNotificacion('¡Oferta especial! Obtenga un 20% de descuento en todos los paquetes turísticos esta semana!');