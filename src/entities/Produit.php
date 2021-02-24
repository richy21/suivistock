<?php


class Produit
{
    private $ref;
    private $nom;
    private $qteStock;
    private $idUser;

    /**
     * Produit constructor.
     */
    public function __construct()
    {
    }

    /**
     * Produit.
     * @param $ref
     * @param $nom
     * @param $qteStock
     * @param $idUser
     */
    public function construire($ref, $nom, $qteStock, $idUser)
    {
        $this->ref = $ref;
        $this->nom = $nom;
        $this->qteStock = $qteStock;
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getQteStock()
    {
        return $this->qteStock;
    }

    /**
     * @param mixed $qteStock
     */
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }



}