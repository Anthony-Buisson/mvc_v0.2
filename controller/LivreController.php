<?php

class LivreController extends Controller{

    public function liste(){
        $livres = new Livre();
        $livres = $livres->getAll();

        $this->set(['livres'=>$livres]);
        $this->render('liste');
    }

    public function detail(){
        if(isset($_GET['id'])){
            $id = (int) $_GET['id'];
        }
        else{
            header('Location: '. ROOT.'livre/liste');
            return;
        }
        $livre = new Livre($id);
//        var_dump($livre);
//        die();
        $this->set(['livre'=>$livre]);
        $this->render('detail');
    }

    public function ajouter_modifier(){
        $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
        $livre = new Livre($id);
        $auteurs = new Auteur();
        $this->set(['livre'=> $livre, 'auteurs'=>$auteurs->getAll()]);
        $this->render('update');
    }

    public function post(){
        $livre = new Livre();
        $livre->nom = $_POST['nom'];
        $livre->id_auteur = $_POST['id_auteur'];
        $livre->resume = $_POST['resume'];
        $livre->isbn = $_POST['isbn'];
        $livre->prix = ($_POST['prix']);
        $livre->id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        $livre->save();
        isset($_POST['id']) ? header('Location: '. ROOT.'livre/detail?id='.$livre->id) : header('Location: '. ROOT.'livre/liste');
    }

    public function supprimer(){
        if(isset($_GET['id'])){
            $id = (int) $_GET['id'];
            $livre = new Livre($id);
            $livre->delete();
        }
        header('Location: '. ROOT.'livre/liste');
    }
}