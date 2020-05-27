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
        $kegiatan = $this->CQUERY->getKegiatan('hidrografi');
        $hasil = $this->CQUERY->getHasil('hidrografi');

        return view('kegiatan.hidrografi', [
            'kegiatan' => $kegiatan,
            'hasil' => $hasil,
            'renderer' => new \Contentful\RichText\Renderer(),
        ]);
    }
    public function fotogrametri()
    {
        $kegiatan = $this->CQUERY->getKegiatan('fotogrametri');
        $hasil = $this->CQUERY->getHasil('fotogrametri');

        return view('kegiatan.fotogrametri', [
            'kegiatan' => $kegiatan,
            'hasil' => $hasil,
            'renderer' => new \Contentful\RichText\Renderer(),
        ]);
    }
    public function gnss()
    {
        $kegiatan = $this->CQUERY->getKegiatan('gnss');
        $hasil = $this->CQUERY->getHasil('gnss');

        return view('kegiatan.gnss', [
            'kegiatan' => $kegiatan,
            'hasil' => $hasil,
            'renderer' => new \Contentful\RichText\Renderer(),
        ]);
    }
    public function topografi()
    {
        $kegiatan = $this->CQUERY->getKegiatan('topografi');
        $hasil = $this->CQUERY->getHasil('topografi');

        return view('kegiatan.topografi', [
            'kegiatan' => $kegiatan,
            'hasil' => $hasil,
            'renderer' => new \Contentful\RichText\Renderer(),
        ]);
    }
}