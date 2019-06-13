<?php

namespace AppBundle\Entity;

/**
 * account
 */
class account
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $numberAccount;

    /**
     * @var string
     */
    private $balance;

    /**
     * @var user
     */
    private $user;


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
     * Set numberAccount
     *
     * @param integer $numberAccount
     *
     * @return account
     */
    public function setNumberAccount($numberAccount)
    {
        $this->numberAccount = $numberAccount;

        return $this;
    }

    /**
     * Get numberAccount
     *
     * @return int
     */
    public function getNumberAccount()
    {
        return $this->numberAccount;
    }

    /**
     * Set balance
     *
     * @param string $balance
     *
     * @return account
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @return user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param user $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


}

