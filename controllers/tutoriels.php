<?php
class tutoriels extends Controller{

    var $models = array('Tutoriel');

    function index(){
        $d['tutos'] = $this->Tutoriel->getLast();
        $this->set($d);
        $this->render('index');
    }

    function view($id){
        $d['tuto'] = $this->Tutoriel->find(array(
            'conditions' => 'id='.$id
        ));
        $d['tuto'] = $d['tuto'][0];
        $this->set($d);
        $this->render('view'); 
    }

}
?>