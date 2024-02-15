<?php

// Iteration 1

// 1.1 

// Show Name and Price
$array1 = ["Name" => "Mercedez", "Price" => "15000 €"]; // Here I tricked it, lets do it right in Line 22:
$array = ["Name" => "Mercedez", "Price" => 15000];

function formatProduct($product)
{
    return $product['Name'] . ' - ' . $product['Price'];
}

print_r(formatProduct($array) . ' €' . "\n \n");


// 1.2

// Uppercase in all first letters
$arr = ["Name" => "edward", "Last Name" => "scissorhands", "Year" => 1990];

function formatProductBrand($movie)
{
    return $movie['Name'] . ' ' . $movie['Last Name'] . ' - ' . $movie['Year'];
}

print_r(ucwords(formatProductBrand($arr)) . "\n \n");


// 1.3
// Uppercase in all first letters + show Name adn Char
$arrB = ["brand" => 'burger king', "product" => 'triple whopper xl', "price" => 6]; // "Burger King Triple Whopper Xxl - 6€"

function fullProductBrand2($arr2)
{
    return $arr2["brand"] . ' ' . $arr2["product"] . ' - ' . $arr2["price"] . ' €';
}
print_r(ucwords(fullProductBrand2($arrB)) . "\n \n");


// Iteration 2
$shop = [
    [
        "username" => "David",
        "products" => [
            [
                "name" => "Laptop",
                "qty" => 1
            ],
            [
                "name" => "Phone",
                "qty" => 2
            ]
        ]
    ],
    [
        "username" => "Laura",
        "products" => [
            [
                "name" => "Headphones",
                "qty" => 4
            ],
            [
                "name" => "Phone",
                "qty" => 3
            ],
            [
                "name" => "Laptop",
                "qty" => 1
            ]
        ]
    ]
];

foreach ($shop as $arr2) {
    if (array_key_exists('products', $arr2)) {
        echo "PRODUCTS: \n";
        foreach ($arr2['products'] as $product) {
            echo '- ' . $product['name'] . ' - qty: ' . $product['qty'] . "\n";
        } 
    };
    echo "\n";
} echo "\n";
    
    
// 2.1 
//Show Only Products and Quantities sold alphabetically. I had to get help for the "usort" function.

$shop2 = [["name" => "Laptop", "price" => 800, "qty" => 2], ["name" => "Phone", "price" => 600, "qty" => 2], ["name" => "Headphones", "price" => 40, "qty" => 8]];

usort($shop2, function ($a, $b) {
    return strcmp($a['name'], $b['name']);
});

    foreach ($shop2 as $price) {
    if (array_key_exists('price', $price)) {
        }
        echo $price['name'] . ": - " . "total amount => " . $price['price'] * $price['qty'] . "\n";
} echo "\n";


//2.2 

foreach ($shop2 as $shopping) {
    if (array_key_exists('products', $shopping)) {
        echo "Products: \n";
        foreach ($shopping('products') as $product) {
            echo $product['name'] . ' - Total: ' . $product['price'] * $product['qty'] . "\n";
        }
        echo "\n";
    }
}

// Iteration 3

$users = [
    [
        "Name" => "Yeray",
        "id" => 123,
        "Email" => "yerayarmas@gmail.com",
        "Password" => "202020",
        "Role" => "Admin",
        "Status" => "Active"

    ],
    [
        "Name" => "The Second",
        "id" => 567,
        "Email" => "secondy@gmail.com",
        "Password" => "404040",
        "Role" => "Guest",
        "Status" => "Inactive"
    ],
    [
        "Name" => "The Third",
        "id" => 789,
        "Email" => "thirdy@gmail.com",
        "Password" => "606060",
        "Role" => "Guest",
        "Status" => "Active"
    ]
];

// 3.1
// Show only users Email + Status
foreach ($users as $try) {
    if ($try['Email']) {
        echo 'Email: ' . $try['Email'] . "\n";
    }
    if ($try['Status']) {
        echo 'Status: ' . $try['Status'] . "\n";
    }
    echo "\n";
};


// 3.2
// Change an specific ID number in the array
foreach ($users as $key => $user) {
    if ($user['id'] == 567) {
        $users[$key]['id'] = 3;
    }
}
print_r($users);


// 3.3
// Delete Key in the array if it shows 'Inactive'
foreach ($users as &$rem) {
    if ($rem['Status'] == 'Inactive') {
        unset($rem['Status']);
    }
}
print_r($users);
