<?php

class Livre extends Model {
    public $id;
    public $nom;
    public $isbn;
    public $resume;
    public $id_auteur;
    public $prix;

    public function __construct($id=null){
        parent::__construct();
        if(!is_null($id)){
            $req = $this->bdd->prepare('SELECT * FROM livre WHERE id=:id');
            $req->bindValue(':id', $id);
            $req->execute();
            $data = $req->fetch(PDO::FETCH_ASSOC);
            $this->id = $data['id'];
            $this->nom = $data['nom'];
            $this->isbn = $data['isbn'];
            $this->resume = $data['resume'];
            $this->id_auteur = $data['id_auteur'];
            $this->prix = $data['prix'];
        }
    }

    public function save(){
        $this->id != null ? $this->update() : $this->create();
    }

    public function getAll(){
        $req = $this->bdd->prepare('SELECT * FROM livre;');
        $req->execute();
        return $req->fetchAll();
    }

    public function getAuteur(){
        $req = $this->bdd->prepare('SELECT * FROM auteur WHERE id=:id_auteur;');
        $req->bindValue(':id_auteur', $this->id_auteur);
        $req->execute();
        return $req->fetch();
    }

    public function create(){
        $req = $this->bdd->prepare('INSERT INTO livre (nom, isbn, resume, id_auteur, prix) VALUE (:nom, :isbn, :resume, :id_auteur, :prix)');
        $req->bindValue(':nom', $this->nom);
        $req->bindValue(':isbn', $this->isbn);
        $req->bindValue(':resume', $this->resume);
        $req->bindValue(':id_auteur', $this->id_auteur);
        $req->bindValue(':prix', $this->prix);
        $req->execute();
        $this->id = $this->bdd->lastInsertId();
    }

    public function update(){
        $req = $this->bdd->prepare('UPDATE `livre` SET `nom`=:nom,`isbn`=:isbn,`resume`=:resume,`id_auteur`=:id_auteur,`prix`=:prix WHERE `id`=:id');
        $req->bindValue(':nom', $this->nom);
        $req->bindValue(':isbn', $this->isbn);
        $req->bindValue(':resume', $this->resume);
        $req->bindValue(':id_auteur', $this->id_auteur);
        $req->bindValue(':prix', $this->prix);
        $req->bindValue(':id', $this->id);
        $req->execute();
    }

    public function delete(){
        $req = $this->bdd->prepare('DELETE FROM `livre` WHERE `id`=:id');
        $req->bindValue(':id', $this->id);
        $req->execute();
    }
}