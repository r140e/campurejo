<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class KegiatanController extends Controller
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
        return view('kegiatan.index');
    }

    public function hidrografi()
    {
        $s1 = $this->CQUERY->getKegiatan('hidrografi');

        return view('kegiatan.hidrografi', [
            's1' => $s1,
            'renderer' => new \Contentful\RichText\Renderer(),
        ]);
    }
    public function fotogrametri()
    {
        $s1 = $this->CQUERY->getKegiatan('fotogrametri');

        return view('kegiatan.fotogrametri', [
            's1' => $s1,
            'renderer' => new \Contentful\RichText\Renderer(),
        ]);
    }
    public function gnss()
    {
        $s1 = $this->CQUERY->getKegiatan('gnss');

        return view('kegiatan.gnss', [
            's1' => $s1,
            'renderer' => new \Contentful\RichText\Renderer(),
        ]);
    }
    public function topografi()
    {
        $s1 = $this->CQUERY->getKegiatan('topografi');

        return view('kegiatan.topografi', [
            's1' => $s1,
            'renderer' => new \Contentful\RichText\Renderer(),
        ]);
    }
}