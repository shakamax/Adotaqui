<?php

/**
 * Animal
 */
class Animal
{
    /**
     * @var int
     */
    private $idanimal;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var bool
     */
    private $adotado = '0';

    /**
     * @var bool
     */
    private $cancelado = '0';

    /**
     * @var string|null
     */
    private $porte;

    /**
     * @var string|null
     */
    private $sexo;

    /**
     * @var string|null
     */
    private $tipo;

    /**
     * @var string|null
     */
    private $sobre;

    /**
     * @var \Usuario
     */
    private $usuarioIdusuario;



    /**
     * Get the value of idanimal
     *
     * @return  int
     */ 
    public function getIdanimal()
    {
        return $this->idanimal;
    }

    /**
     * Set the value of idanimal
     *
     * @param  int  $idanimal
     *
     * @return  self
     */ 
    public function setIdanimal(int $idanimal)
    {
        $this->idanimal = $idanimal;

        return $this;
    }

    /**
     * Get the value of nome
     *
     * @return  string
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param  string  $nome
     *
     * @return  self
     */ 
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of adotado
     *
     * @return  bool
     */ 
    public function getAdotado()
    {
        return $this->adotado;
    }

    /**
     * Set the value of adotado
     *
     * @param  bool  $adotado
     *
     * @return  self
     */ 
    public function setAdotado(bool $adotado)
    {
        $this->adotado = $adotado;

        return $this;
    }

    /**
     * Get the value of cancelado
     *
     * @return  bool
     */ 
    public function getCancelado()
    {
        return $this->cancelado;
    }

    /**
     * Set the value of cancelado
     *
     * @param  bool  $cancelado
     *
     * @return  self
     */ 
    public function setCancelado(bool $cancelado)
    {
        $this->cancelado = $cancelado;

        return $this;
    }

    /**
     * Get the value of porte
     *
     * @return  string|null
     */ 
    public function getPorte()
    {
        return $this->porte;
    }

    /**
     * Set the value of porte
     *
     * @param  string|null  $porte
     *
     * @return  self
     */ 
    public function setPorte($porte)
    {
        $this->porte = $porte;

        return $this;
    }

    /**
     * Get the value of sexo
     *
     * @return  string|null
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @param  string|null  $sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of tipo
     *
     * @return  string|null
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @param  string|null  $tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of sobre
     *
     * @return  string|null
     */ 
    public function getSobre()
    {
        return $this->sobre;
    }

    /**
     * Set the value of sobre
     *
     * @param  string|null  $sobre
     *
     * @return  self
     */ 
    public function setSobre($sobre)
    {
        $this->sobre = $sobre;

        return $this;
    }

    /**
     * Get the value of usuarioIdusuario
     *
     * @return  \Usuario
     */ 
    public function getUsuarioIdusuario()
    {
        return $this->usuarioIdusuario;
    }

    /**
     * Set the value of usuarioIdusuario
     *
     * @param  \Usuario  $usuarioIdusuario
     *
     * @return  self
     */ 
    public function setUsuarioIdusuario(\Usuario $usuarioIdusuario)
    {
        $this->usuarioIdusuario = $usuarioIdusuario;

        return $this;
    }
}
