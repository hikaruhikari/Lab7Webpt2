<?php 
namespace App\Controllers; 
class Page extends BaseController 
{ 
    public function about() 
    { 
        return view('about', [ 
            'title' => 'Halaman Abot', 
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.' 
        ]); 
    }  
    public function contact() 
    { 
        return view('contact', [ 
            'title' => 'Halaman Kontak', 
            'content' => 'Ini adalah halaman kontak yang menjelaskan tentang isi halaman ini.'
        ]); 
    } 
    public function faqs() 
    { 
        echo "Ini halaman FAQ"; 
    } 
    public function tos() 
    { 
        echo "ini halaman Term of Services"; 
    } 
    public function artikel() 
    { 
        return view('artikel', [ 
            'title' => 'Judul Artikel', 
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.' 
        ]); 
    }
} 