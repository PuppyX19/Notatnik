<?php
require_once 'AppController.php';
require_once __DIR__ .'/../models/Notes.php';
require_once __DIR__ .'/../repository/NotesRepository.php';

class NotesController extends AppController
{

    private $notesRepository;

    public function __construct()
    {
        parent::__construct();
        $this->notesRepository = new NotesRepository();
    }
    public function notes()
    {
        session_start();
        $notes = $this->notesRepository->getNotes($_SESSION['userId']);
        $this->render('notes', ['notes' => $notes]);
    }

    public function addNote()
    {
        session_start();
        if(!$this->isPost()){
            return $this->render('addNote');
        }
        if(strlen(($_POST['title']) == 0 && strlen($_POST['text']) == 0) || (strlen($_POST['title']) > 40 || strlen($_POST['text']) > 300)) {
            return $this->render('addNote', ['messages' => ["Cannot create a note"]]);
        }

        if(!$_POST['title'] || !$_POST['text']){
            return $this->render('addNote', ['messages' => ["Provide an input"]]);
        }
        $title = $_POST['title'];
        $text = $_POST['text'];

        $note = new Notes($title, $text, $_SESSION['userId']);
        $this->notesRepository->addNote($note);

        $this->render('addNote', ['messages' => ["Note created"]]);

    }
}