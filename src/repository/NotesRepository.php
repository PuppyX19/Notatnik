<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/Notes.php';

class NotesRepository extends Repository
{

    public function getNote(int $user_id): ?Notes
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.notes WHERE user_id = :user_id
        ');
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        $note = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($note == false) {
            return null;
        }

        return new Notes(
            $note['title'],
            $note['text'],
            $note['user_id'],
            $note['note_id']
        );
    }

    public function getNotes(int $user_id): array
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.notes WHERE user_id = :user_id
        ');
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

        $stmt->execute();

        $notes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($notes) {
            foreach ($notes as $note) {

                $result[] = new Notes(
                    $note['title'],
                    $note['text'],
                    $note['user_id'],
                    $note['note_id']
                );
            }
        }else{
            $result[] = new Notes(
                "Hello ".$_SESSION['login'],
                "Create your first note by clicking add note button",
                null,
                null
            );
        }
        return $result;
    }

    public function addNote(Notes $note)
    {
        session_start();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO notes (title, text, user_id)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $note->getTitle(),
            $note->getText(),
            $note->getUserId()
        ]);
    }
}