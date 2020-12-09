<?php

/**
 * Amigosaude
 */
class Amigosaude
{
    /**
     * @var \Animal
     */
    private $amigoIdamigo;

    /**
     * @var \Problemasaude
     */
    private $problemasaudeIdproblema;

    /**
     * Get the value of amigoIdamigo
     *
     * @return  \Animal
     */ 
    public function getAmigoIdamigo()
    {
        return $this->amigoIdamigo;
    }

    /**
     * Set the value of amigoIdamigo
     *
     * @param  \Animal  $amigoIdamigo
     *
     * @return  self
     */ 
    public function setAmigoIdamigo(\Animal $amigoIdamigo)
    {
        $this->amigoIdamigo = $amigoIdamigo;

        return $this;
    }

    /**
     * Get the value of problemasaudeIdproblema
     *
     * @return  \Problemasaude
     */ 
    public function getProblemasaudeIdproblema()
    {
        return $this->problemasaudeIdproblema;
    }

    /**
     * Set the value of problemasaudeIdproblema
     *
     * @param  \Problemasaude  $problemasaudeIdproblema
     *
     * @return  self
     */ 
    public function setProblemasaudeIdproblema(\Problemasaude $problemasaudeIdproblema)
    {
        $this->problemasaudeIdproblema = $problemasaudeIdproblema;

        return $this;
    }
}
