<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    private $array = [
        'error' => '',
        'result' => []
    ];
    
    public function all() {
        $notes = Note::all();

        foreach($notes as $note) {
            $this->array['result'][] = [
                'id' => $note->id,
                'title' => $note->title
            ];
        }

        return $this->array;
    }

    public function one($id) {
        $note = Note::find($id);

        if($note) {
            $this->array['result'] = $note;
        } else {
            $this->array['error'] = 'ID not found';
        }

        return $this->array;
    }
}
