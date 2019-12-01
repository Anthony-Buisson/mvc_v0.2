<?php

class AuteurController extends Controller{

    public function liste(){
        $auteurs = new Auteur();
        $auteurs = $auteurs->getAll();

        $this->set(['auteurs'=>$auteurs]);
        $this->render('liste');
    }

    public function detail(){
        if(isset($_GET['id'])) $id = (int) $_GET['id'];
        else{
            header('Location: '. ROOT.'auteur/liste');
            return;
        }
        $auteur = new Auteur($id);
//        var_dump($auteur);
//        die();
        $this->set(['auteur'=>$auteur]);
        $this->render('detail');
    }

    public function ajouter_modifier(){
        $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
        $auteur = new Auteur($id);
        $this->set(['auteur'=> $auteur]);
        $this->render('update');
    }
    public function post(){
        $auteur = new Auteur();
        $auteur->nom = $_POST['nom'];
        $auteur->prenom = $_POST['prenom'];
        $auteur->date_naissance = ($_POST['date_naissance']);
        $auteur->id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        $auteur->save();
        isset($_POST['id']) ? header('Location: '. ROOT.'auteur/detail?id='.$auteur->id) : header('Location: '. ROOT.'auteur/liste');
    }

    public function livres(){
        if(isset($_GET['id'])) $id = (int) $_GET['id'];
        else{
            header('Location: '. ROOT.'auteur/liste');
            return;
        }
        $auteur = new Auteur($id);
        $livres = $auteur->getLivres();
        $this->set(['livres'=>$livres, 'auteur'=>$auteur]);
        $this->render('livres');
    }

    public function supprimer(){
        if(isset($_GET['id'])){
            $id = (int) $_GET['id'];
            $auteur = new Auteur($id);
            $auteur->delete();
        }
        header('Location: '. ROOT.'auteur/liste');
    }
}