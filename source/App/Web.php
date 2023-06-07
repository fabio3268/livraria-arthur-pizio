<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Faq;
use Source\Models\Book;

class Web
{
    private $view;

    public function __construct ()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
    }

    public function home()
    {
        //$name = "Fábio";
        echo $this->view->render("home",[
            "name" => "Fábio",
            "age" => 47
        ]);
    }

    public function about()
    {
        echo $this->view->render("about");
    }

    public function services()
    {
        echo $this->view->render("services");
    }

    public function portfolio()
    {
        echo $this->view->render("portfolio");
    }

    public function team()
    {
        echo $this->view->render("team");
    }

    public function location()
    {
        echo "Essa é a minha localização!";
    }

    public function blog ()
    {
        echo "esse é o meu blog bonitinho...";
    }

    public function contact ()
    {
        echo "Olá, esse é meu contatinho!";
    }

    public function profile ()
    {
        echo "Esse é o meu perfil legal!";
    }

    public function faq ()
    {
        $faqs = new Faq();
        //var_dump($faqs->selectAll);


        echo $this->view->render("faq",[
            "faqs" => $faqs->selectAll(),
            "name" => "Arthur"
        ]);
    }


    public function books ()
    {
        $books = new Book();
        //var_dump($books->selectAll);

        echo $this->view->render("books",[
            "books" => $books->selectAll(),
            "name" => "Arthur"
        ]);
    }


}
