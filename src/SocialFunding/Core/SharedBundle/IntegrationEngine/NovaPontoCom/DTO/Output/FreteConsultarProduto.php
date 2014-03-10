<?php
/**
 * @author André Simões <sou@oand.re>
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output;

class FreteConsultarProduto {

    private $state;

    private $valueTown;

    private $valueCamp;

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $valueCamp
     */
    public function setValueCamp($valueCamp)
    {
        $this->valueCamp = $valueCamp;
    }

    /**
     * @return mixed
     */
    public function getValueCamp()
    {
        return $this->valueCamp;
    }

    /**
     * @param mixed $valueTown
     */
    public function setValueTown($valueTown)
    {
        $this->valueTown = $valueTown;
    }

    /**
     * @return mixed
     */
    public function getValueTown()
    {
        return $this->valueTown;
    }

}