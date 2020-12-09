<?php

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var int
     */
    private $idusuario;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $senha;

    /**
     * @var bool
     */
    private $status = '0';

    /**
     * @var \DateTime|null
     */
    private $dtnasc;

    /**
     * @var string|null
     */
    private $celular;

    /**
     * @var string|null
     */
    private $telfixo;

    /**
     * @var string|null
     */
    private $cpf;

    /**
     * @var string|null
     */
    private $cep;

    /**
     * @var string|null
     */
    private $cidade;

    /**
     * @var string|null
     */
    private $bairro;

    /**
     * @var string|null
     */
    private $uf;

    /**
     * @var string|null
     */
    private $avatar;

    /**
     * Get the value of idusuario
     *
     * @return  int
     */ 
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set the value of idusuario
     *
     * @param  int  $idusuario
     *
     * @return  self
     */ 
    public function setIdusuario(int $idusuario)
    {
        $this->idusuario = $idusuario;

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
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     *
     * @return  string
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @param  string  $senha
     *
     * @return  self
     */ 
    public function setSenha(string $senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  bool
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  bool  $status
     *
     * @return  self
     */ 
    public function setStatus(bool $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of dtnasc
     *
     * @return  \DateTime|null
     */ 
    public function getDtnasc()
    {
        return $this->dtnasc;
    }

    /**
     * Set the value of dtnasc
     *
     * @param  \DateTime|null  $dtnasc
     *
     * @return  self
     */ 
    public function setDtnasc($dtnasc)
    {
        $this->dtnasc = $dtnasc;

        return $this;
    }

    /**
     * Get the value of celular
     *
     * @return  string|null
     */ 
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of celular
     *
     * @param  string|null  $celular
     *
     * @return  self
     */ 
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get the value of telfixo
     *
     * @return  string|null
     */ 
    public function getTelfixo()
    {
        return $this->telfixo;
    }

    /**
     * Set the value of telfixo
     *
     * @param  string|null  $telfixo
     *
     * @return  self
     */ 
    public function setTelfixo($telfixo)
    {
        $this->telfixo = $telfixo;

        return $this;
    }

    /**
     * Get the value of cpf
     *
     * @return  string|null
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @param  string|null  $cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of cep
     *
     * @return  string|null
     */ 
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @param  string|null  $cep
     *
     * @return  self
     */ 
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of cidade
     *
     * @return  string|null
     */ 
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @param  string|null  $cidade
     *
     * @return  self
     */ 
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of bairro
     *
     * @return  string|null
     */ 
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @param  string|null  $bairro
     *
     * @return  self
     */ 
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get the value of uf
     *
     * @return  string|null
     */ 
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     *
     * @param  string|null  $uf
     *
     * @return  self
     */ 
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of avatar
     *
     * @return  string|null
     */ 
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set the value of avatar
     *
     * @param  string|null  $avatar
     *
     * @return  self
     */ 
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }
}
