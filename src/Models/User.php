<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cliente")
 */
class Client
{
  /**
   * @ORM\Id
   * @ORM\Column(name="id", type="integer")
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private int|null $id = null;

  /**
   * @ORM\Column(name="nombre", type="string", length=255)
   */
  private string $nombre;

  /**
   * @ORM\Column(name="apellido", type="string", length=255)
   */
  private string $apellido;

  /**
   * @ORM\Column(name="timpodocumento", type="string", length=255)
   */
  private string $tipodocumento;

  /**
   * @ORM\Column(name="numerodocumento", type="integer", length=255)
   */
  private string $numerodocumento;

  /**
   * @ORM\Column(name="email", type="email", length=255, unique=true)
   */
  private string $email;

    /**
   * @ORM\Column(name="nacimiento", type="date", length=255, unique=true)
   */
  private string $nacimiento;

    /**
   * @ORM\Column(name="telefono", type="integer", length=255, unique=true)
   */
  private string $telefono;
    /**
   * @ORM\Column(name="contraseña", type="password", length=255, unique=true)
   */
  private string $contraseña;
      /**
   * @ORM\Column(name="usuario", type="string", length=255, unique=true)
   */
  private string $usuario;







  public function getId(): int
  {
    return $this->id;
  }

  public function getNombre(): string
  {
    return $this->nombre;
  }

  public function getApellido(): string
  {
    return $this->apellido;
  }

  public function getTipoDocumento(): string
  {
    return $this->tipodocumento;
  }

  public function getNumeroDocumento(): string
  {
    return $this->numerodocumento;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function getNacimiento(): string
  {
    return $this->nacimiento;
  }

  public function getTelefono(): string
  {
    return $this->telefono;
  }
  public function getContraseña(): string
  {
    return $this->contraseña;
  }
  public function getUsuario(): string
  {
    return $this->usuario;
  }





  public function setNombre(string $nombre)
  {
    $this->nombre = $nombre;
  }

  public function setApellido(string $apellido)
  {
    $this->apellido = $apellido;
  }

  public function setTipoDocumento(string $tipodocumento)
  {
    $this->tipodocumento = $tipodocumento;
  }

  public function setNumeroDocumento(string $numerodocumento)
  {
    $this->numerodocumento = $numerodocumento;
  }

  public function setEmail(string $email)
  {
    $this->email = $email;
  }

  public function setNacimiento(string $nacimiento)
  {
    $this->nacimiento = $nacimiento; 
  }

  public function setTelefono(string $telefono)
  {
    $this->telefono = $telefono; 
  }

  public function setContraseña(string $contraseña)
  {
    $this->contraseña = $contraseña; 
  }
  public function setUsuario(string $usuario)
  {
    $this->usuario = $usuario; 
  }
}