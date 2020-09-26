<?php

namespace App\Console\Commands\AutoLeech\Leechs\Bilutv;

use Illuminate\Console\Command;
use App\Models\Leech\LeechLink;
use App\Traits\UseLeech;

class AutoLeechLink extends Command
{
    use UseLeech;
    
    protected $signature = 'leech:bilutv-link';
    
    protected $description = 'Command description';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function handle()
    {
        $url = 'https://bilutvz.org/danh-sach/phim-le';
        $html = $this->getContent($url);
        $movies = $this->find($html, '.film-item a');
    
        foreach ($movies as $movie) {
            if (LeechLink::where('link', trim($movie->href))->exists()) {
                continue;
            }
        
            $name = $this->plaintext($movie->innertext(), '.real-name');
            $name = $this->getMovieName($name);
        
            $newmovie = LeechLink::create([
                'name' => $name,
                'link' => trim($movie->href),
                'server' => 'Bilutv',
            ]);
        
            if ($newmovie) {
                echo 'Leeched ' . $name . "\n";
            }
        }
    }
}
