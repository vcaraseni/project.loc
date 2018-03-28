<?php

namespace App\Http\Controllers;

use DeepCopy\f002\A;
use Illuminate\Http\Request;
use App\Announce;

class AnnouncesController extends Controller
{
    /**
     * @var Announce
     */
    private $announce;

    /**
     * AnnouncesController constructor.
     * @param Announce $announce
     */
    public function __construct(Announce $announce)
    {
        $this->announce = $announce;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAll()
    {
        $data = $this->announce->getAll();

        return view('pages.index', [
            'data' => $data
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createAnnounce(Request $request)
    {
        $announce = new Announce();

        // todo create variables for status

        $validatedData = $request->validate([
            'title' => 'required|min:10',
            'body' => 'required',
        ]);

        $announce->title = $request->title;
        $announce->body = $request->body;
        $announce->save();

        return view('pages.create');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAnnounceById($id)
    {
        $announce = new Announce();
        $data = $announce->getById($id);
        return view('pages.announce', ['data' => $data]);
    }

}
