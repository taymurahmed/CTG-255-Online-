<?php
/*
$devs = [
    'name' => 'Taymur Ahmed',
    'age' => '18',
    'skill' => 'laravel developer',
    'location' => 'Dhaka'
];

$fruits = ['apple','orange', 'mango', 'banana', 'guava'];

var_dump($devs);

echo "<br>";
//echo 'Name:' . $devs['name'] . ' Skill: ' . $devs['skill'];
echo "<br>";

for($i = 0; $i<count($fruits); $i++){
    echo "{$fruits[$i]}<br>";
}
echo "</br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
*/



$devs = [
    [
        'name' => 'Taymur Ahmed',
        'age' => '26',
        'skill' => 'Python Developer',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rerum rem officia,
                    veniam dignissimos fuga blanditiis maiores architecto voluptatum libero?',
        'photo' => 'http://www.media-accountants.com/wp-content/uploads/2015/01/team-member-04.jpg'
    ],
    [
        'name' => 'Sohel Ahmed',
        'age' => '29',
        'skill' => 'PHP Developer',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rerum rem officia,
                    veniam dignissimos fuga blanditiis maiores architecto voluptatum libero?',
        'photo' => 'http://prokritipolli.com/wp-content/uploads/2017/04/team1.jpg'
    ],
    [
        'name' => 'Asraf Ahmed',
        'age' => '36',
        'skill' => 'Django Developer',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rerum rem officia,
                    veniam dignissimos fuga blanditiis maiores architecto voluptatum libero?',
        'photo' => 'https://rnbtheme.com/shortcodes/wp-content/uploads/2016/01/First_m-500x622.png'
    ],
    [
        'name' => 'Mahmud Hasan',
        'age' => '21',
        'skill' => 'Laravel Developer',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rerum rem officia,
                    veniam dignissimos fuga blanditiis maiores architecto voluptatum libero?',
        'photo' => 'https://cdn.powerpackelements.com/wp-content/uploads/2017/11/Team-memeber-8-1.png'
    ]
  

];

/*
foreach($devs as $dev){
    echo "<img style=\" width:200px; height:200px \" src=\"".$dev['photo']."\">";
    echo $dev['name'];
    echo "<hr>";
}*/