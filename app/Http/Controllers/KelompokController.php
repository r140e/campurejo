<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class KelompokController extends Controller
{
    /**
     * @var CQuery
     */
    private $CQUERY;

    /**
     * @var Contentful\RichText\Renderer
     */
    private $renderer;

    public function __construct(CQuery $query)
    {
        $this->CQUERY = $query;
        $this->renderer = new \Contentful\RichText\Renderer();
    }
    public function index()
    {
        $entries = $this->CQUERY->getEntriesByContentType('kelompok');

        return view('kelompok.kelompok', [
            'entries'       => $entries,
            'renderer'      => $this->renderer,
        ]);
    }
    public function show($slug)
    {
        $entries = $this->CQUERY->getEntriesByContentType('kelompok');
        $entry = $this->CQUERY->getEntry('kelompok', $slug);

        if ($entry === null) {
            abort(404);
        }

        return view('kelompok.kelompokdetail', [
            'entries'   => $entries,
            'entry'     => $entry,
            'renderer'  => new \Contentful\RichText\Renderer(),
        ]);
    }
}