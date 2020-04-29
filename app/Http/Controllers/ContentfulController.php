<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class ContentfulController extends Controller
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
        $entries = $this->CQUERY->getEntriesByContentType('blogPost');

        return view('oxygen.index', [
            'entries'       => $entries,
            'renderer'      => $this->renderer,
        ]);
    }

    public function blog()
    {
        $entries = $this->CQUERY->getEntriesByContentType('blogPost');

        return view('blog.blog', [
            'entries'       => $entries,
            'renderer'      => $this->renderer,
        ]);
    }

    public function post($slug)
    {
        $entry = $this->CQUERY->getEntry('blogPost', $slug);

        if ($entry === null) {
            abort(404);
        }

        return view('blog.post', [
            'entry'     => $entry,
            'renderer'  => new \Contentful\RichText\Renderer(),
        ]);
    }
    
    public function gallery()
    {
        $gallery = $this->CQUERY->getEntriesByContentType('gallery');

        return view('oxygen.gallery', [
            'gallery' => $gallery,
        ]);
    }
}