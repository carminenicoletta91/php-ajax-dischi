<?php

  header('Content-type: application/json');
  $arralbum = [
    [
      'name' => 'New-Jersey',
      'author' => 'Bon Jovi',
      'year' => 1988,
      'poster_path' =>'https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg'
    ],
    [
      'name' => 'Live at Wembley 86',
      'author' => 'Queen',
      'year' => 1992,
      'poster_path' =>'https://images.pyramidshop.com/images/_popup/ACPPR48056.jpg'
    ],
    [
      'name' => "Ten's Summoner's Tales",
      'author' => 'Sting',
      'year' => 1993,
      'poster_path' =>'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg'
    ],
    [
      'name' => 'Steve Gadd Band',
      'author' => 'Steve Gadd Band',
      'year' => 2018,
      'poster_path' =>'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg'
    ],
    [
      'name' => 'Brave new World',
      'author' => 'Iron Maiden',
      'year' => 2000,
      'poster_path' =>'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg'
    ],
    [
      'name' => 'One more car, one more raider',
      'author' => 'Eric Clapton',
      'year' => 2002,
      'poster_path' =>'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg'
    ],
    [
      'name' => 'Made in Japan',
      'author' => 'Deep Purple',
      'year' => 1972,
      'poster_path' =>'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg'
    ],
    [
      'name' => 'And Justice for All',
      'author' => 'Metallica',
      'year' => 1988,
      'poster_path' =>'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg'
    ],
    [
      'name' => 'Hard Wired',
      'author' => 'Dave Weckl',
      'year' => 1994,
      'poster_path' =>'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg'
    ],
    [
      'name' => 'Bad',
      'author' => 'Michael Jacjson',
      'year' => 1987,
      'poster_path' =>'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg'
    ]
  ];

  echo json_encode($arralbum);
?>
