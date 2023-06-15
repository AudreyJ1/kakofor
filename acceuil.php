<!DOCTYPE html>
<html>
    <head>
        <meta charset='UFT-8'>

    </head>
    <body>
        <?php
            namespace App\Controllers; 
            class Acceuil extends BaseController
            {
                public function index()
                {
                    return view('welcome_message');
                }

                public function view($page = 'home')
                {
                    if(! is_file(APPPATH . 'Views/' . $page . '.php'))
                    // Pas de page pour ce qui est demandé
                    throw new PageNotFoundException($page);
                    // Données transférées à la vue demandée
                    $data['title'] = ucfirst($page);// Première lettre capital

                    return view('templates/header' , $data)
                        . view($page)
                        . view('templates/footer');
                }
            }
            namespace App\Controllers;
            use CodeIgniter\Exceptions\PageNoteFoundException;
            class Acceuil extends BaseConntrollers
    </body>
</html>