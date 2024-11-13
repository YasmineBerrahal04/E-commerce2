<?php
class produit{
   
    protected $id;

    protected $libelle;

    protected $prix;

    protected $qte;

    protected $des;

    protected $image;

    protected $promo;

    public function __construct($id, $libelle, $prix, $qte, $des, $image, $promo)
    {
        $this->$id = $id;
        
        $this->$libelle = $libelle;
        
        $this->$prix = $prix;
        
        $this->qte = $qte;
        
        $this->des = $des;
        
        $this->image = $image;
        $this->promo = $promo;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }
    public function getQte()
    {
        return $this->qte;
    }
    public function setQte($qte): self
    {
        $this->qte = $qte;

        return $this;
    }
    public function getDes()
    {
        return $this->des;
    }
    public function setDes($des): self
    {
        $this->des = $des;

        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }
    public function getPromo()
    {
        return $this->promo;
    }
    public function setPromo($promo): self
    {
        $this->promo = $promo;

        return $this;
    }
}
?>