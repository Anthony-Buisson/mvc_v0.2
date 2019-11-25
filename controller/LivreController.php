<?php

class LivreController extends Controller{

    public function liste(){
        $livres = [
            1=>['id'=>1, 'nom'=>'Nom du livre'],
            2=>['id'=>2, 'nom'=>'Nom du livre 2'],
            3=>['id'=>3, 'nom'=>'Nom du livre 3'],
        ];

        $this->set(['livres'=>$livres]);
        $this->render('liste');
    }

    public function detail(){
        $id = (int)$_GET['id'];
        $livre = new Livre($id);
        $this->set(['livre'=>$livre]);
        $this->render('detail');
    }

    public function ajouter_modifier(){
        $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
        $livre = new Livre($id);
        $this->set(['livre'=> $livre]);
        $this->render('update');
    }
    public function post(){
        $livre = new Livre();
        $livre->nom = $_POST['nom'];
        $livre->auteur = $_POST['auteur'];
        $livre->resume = $_POST['resume'];
        $livre->isbn = $_POST['isbn'];
        $livre->prix = ($_POST['prix']);
        $livre->id = isset($_POST['id']) ? $_POST['id'] : null;
        var_dump($livre);
        $livre->save();
        header('Location: '. ROOT.'livre/liste');
    }
}