<?php

namespace AppBundle\Entity;

/**
 * Transaction
 */
class Transaction
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $idTransaction;

    /**
     * @var string
     */
    private $typeTransaction;

    /**
     * @var string
     */
    public $account;

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param string $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    private $amountTransaction;

    /**
     * @var account
     *
     */
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTransaction
     *
     * @param string $idTransaction
     *
     * @return Transaction
     */
    public function setIdTransaction($idTransaction)
    {
        $this->idTransaction = $idTransaction;

        return $this;
    }

    /**
     * Get idTransaction
     *
     * @return string
     */
    public function getIdTransaction()
    {
        return $this->idTransaction;
    }

    /**
     * Set typeTransaction
     *
     * @param string $typeTransaction
     *
     * @return Transaction
     */
    public function setTypeTransaction($typeTransaction)
    {
        $this->typeTransaction = $typeTransaction;

        return $this;
    }

    /**
     * Get typeTransaction
     *
     * @return string
     */
    public function getTypeTransaction()
    {
        return $this->typeTransaction;
    }

    /**
     * Set amountTransaction
     *
     * @param string $amountTransaction
     *
     * @return Transaction
     */
    public function setAmountTransaction($amountTransaction)
    {
        $this->amountTransaction = $amountTransaction;

        return $this;
    }

    /**
     * Get amountTransaction
     *
     * @return string
     */
    public function getAmountTransaction()
    {
        return $this->amountTransaction;
    }
}

