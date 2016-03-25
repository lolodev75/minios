<?php

namespace AppBundle\Controller;

use Framework\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('Home/index.php');
    }

    public function wikiAction()
    {
        $nbrArticle = 25;
        $marques = ['apple', 'samsung', 'intel'];
        $produits = ['clef', 'lampe', 'stylo', 'gomme'];

        return $this->render('Home/wiki.php', [
            'nbrArticle' => $nbrArticle,
            'marques'    => $marques,
            'produits'   => $produits,
        ]);
    }

    public function articlesAction()
    {
        $pdo = $this->getPdo();
        $articles = $pdo->query('Select * From article')->fetchAll();

        return $this->render('Home/articles.php', [
            'articles' => $articles,
        ]);
    }
    
    public function contactAction()
    {
        $pdo = $this->getPdo();
        $articles = $pdo->query('Select * From article')->fetchAll();

        return $this->render('Home/contact.php', [
            'articles' => $articles,
        ]);
    }

    public function listAction()
    {
        $pdo = $this->getPdo();
        $articles = $pdo->query('Select * From article')->fetchAll();

        return $this->render('Home/list.php', [
            'articles' => $articles,
        ]);
    }

    public function updateAction()
    {
        $pdo = $this->getPdo();
        $request = $this->getRequest();

        $pdo->query('UPDATE article SET nom = \'ecran' . rand(1, 20) . '\' WHERE id = ' . $request->get('id'))->fetchAll();

        return $this->render('Home/update.php', [
            'id' => $request->get('id'),
        ]);
    }

    public function deleteAction()
    {
        $pdo = $this->getPdo();
        $request = $this->getRequest();

        $r = $pdo->prepare('DELETE FROM article WHERE id = :id');
        $r->bindParam(':id', $request->get('id'));
        $r->execute();

        return $this->render('Home/delete.php', [
            'id' => $request->get('id'),
        ]);
    }
    public function contactSubmitAction()
    {
  
        $request = $this->getRequest();

        $headers = 'From: loic.seguin.selectra@gmail.com' . "\r\n" .
        'Reply-To: loic.seguin.selectra@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        if (mail($request->get('nom'),$request->get('email'),$request->get('objet'),$request->get('message'),$headers)){
            echo "Le message a bien été envoyé !";
            
        } else {
            echo "Le message n'a pas pu être envoyé !";
        }
    }

//    public function contactAction()
//    {
//        $request = $this->getRequest();
//
//        $pdo = $this->getPdo();
//
//        $salle = $this->getRepository('Salle')->find(3);
//
//        return $this->render('contact.php', [
//            'page'  => $request->get('page'),
//            'salle' => $salle,
//        ]);
//    }
//
//    public function produitsAction()
//    {
//        return $this->render('produits.php', []);
//    }
}
