<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;
use QrCode;
use App\Pdf;
use App\Picture;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $index = 'active';
        //$shareFacebook = Share::page('https://macode09.com')->facebook();

        $share = Share::page('https://nmanationalhealthsummit.com/')
            ->facebook()
            ->twitter()
            ->linkedin('Plan to attend')
            ->whatsapp();

        return view('pages.index', compact('index', 'share'));
    }
    public function schedule()
    {
      $schedule = 'active';
      return view('pages.schedule', compact('schedule'));
    }
    public function speakers()
    {
      $speakers = 'active';
      return view('pages.speakers', compact('speakers'));
    }
    public function tickets()
    {
        $regTickets = 'active';
        return view('pages.tickets', compact('regTickets'));
    }
    public function contact()
    {
        $contact = 'active';
        return view('pages.contact', compact('contact'));
    }
    public function about_cpc()
    {
        $about_cpc = 'active';
        $about = 'active';

        return view('pages.about.cpc', compact('about_cpc', 'about'));
    }
    public function about_loc()
    {
        $about_loc = 'active';
        $about = 'active';

        return view('pages.about.loc', compact('about_loc', 'about'));
    }
    public function about_noc()
    {
        $about_noc = 'active';
        $about = 'active';

        return view('pages.about.noc', compact('about_noc', 'about'));
    }
    public function about_secretariat()
    {
        $about_secretariat = 'active';
        $about = 'active';

        return view('pages.about.secretariat', compact('about_secretariat', 'about'));
    }
    public function accomodation()
    {
        $share = Share::page('https://www.nationalnma.org')
            ->facebook()
            ->twitter()
            ->linkedin('Plan to attend')
            ->whatsapp();
        return view('pages.accomodation', compact('share'));
    }
    public function docs_gallery()
    {
      $gallery = 'active';
      $docs = 'active';
      $getPictures = Picture::orderBy('created_at', 'desc')->get();

      return view('pages.gallery', compact('gallery', 'docs', 'getPictures'));
    }
    public function docs_pdf()
    {
      $pdf = 'active';
      $docs = 'active';
      $getDocs = Pdf::orderBy('created_at', 'desc')->get();

      return view('pages.pdf_docs', compact('pdf', 'docs', 'getDocs'));
    }
}
