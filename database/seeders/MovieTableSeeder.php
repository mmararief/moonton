<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=Al1GIxGeXbs',
                'thumbnail' => 'https://irs.www.warnerbros.com/gallery-jpeg/the_shawshank_redemption_posterlarge_0-675188670.jpg',
                'rating' => 5.0,
                'is_featured' => 1,
            ],

            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=UaVTIH8mujA',
                'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'rating' => 4.2,
                'is_featured' => 0,

            ],
            [
                'name' => 'The Godfather: Part II',
                'slug' => 'the-godfather-part-ii',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=9O1Iy9od7-A',
                'thumbnail' => 'https://amc-theatres-res.cloudinary.com/v1579097323/amc-cdn/production/2/movies/0/16/Poster/p_800x1200_TheGodfatherPartII_En_120717.jpg',
                'rating' => 5.0,
                'is_featured' => 0,
            ],
            [
                'name' => 'Seventeen Power of Love (2022)',
                'slug' => 'seventeen-power-of-love-2022',
                'category' => 'Documentary',
                'video_url' => 'https://stream.hownetwork.xyz/video.php?id=1e11e32bbb7b0106e58edf44f7fc68d7',
                'thumbnail' => 'https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-seventeen-power-of-love-2022-lk21-d21.jpg',
                'rating' => 5.0,
                'is_featured' => 0,
            ]
        ];

        Movie::insert($movies);
    }
}
