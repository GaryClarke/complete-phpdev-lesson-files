<?php

require './vendor/autoload.php';

$city = [
    'name'       => 'Frankfurt',
    'country'    => 'Germany',
    'population' => 785000,
    'latitude'   => 50.110924,
    'longitude'  => 8.682127
];

// array_keys
$keys = array_keys($city);
// array_values
$values = array_values($city);
// in_array
$in = in_array('Frankfurt', $city);
// array_key_exists
$exists = array_key_exists('longitude', $city);
// array_search
$key = array_search('Germany', $city);


// array_count_values
$numbers = [10, 10, 20, 20, 30, 30, 40];
$valueCount = array_count_values([10, 10, 20, 20, 30, 30, 40]);


// array_unique
$unique = array_unique($numbers);
// array_column
$cities = [
    [
        'name'       => 'Frankfurt',
        'country'    => 'Germany',
        'population' => 785000,
        'latitude'   => 50.110924,
        'longitude'  => 8.682127
    ],
    [
        'name'       => 'Mumbai',
        'country'    => 'India',
        'population' => 785000,
        'latitude'   => 19.076090,
        'longitude'  => 72.877426
    ]
];

$country = array_column($cities, 'country');

class City
{

    public function __construct(
        public string $name,
        public string $country,
        public int $population,
        public float $latitude,
        public float $longitude,
    )
    {
    }
}


$cities = [
    new City('Mumbai', 'India', 20667656, 19.076090, 72.877426),
    new City('Frankfurt', 'Germany', 785000, 50.110924, 8.682127)
];

$column = array_column($cities, 'country');
//dd($column);


// array_unshift
array_unshift($column, 200, 30000, 56789);
// array_pop
$poppedItem = array_pop($column);
// array_shift
$shiftedItem = array_shift($column);
// array_push
array_push($column, 123, 456);
// array_diff
$arrayOne = [1, 2, 3, 4];
$arrayTwo = [1, 2, 3, 4, 5];
$diff = array_diff($arrayTwo, $arrayOne); // Items in array one which don't appear in other arrays
// array_intersect
$intersection = array_intersect($arrayTwo, $arrayOne);
// array_slice
$slice = array_slice($arrayTwo, 2, 2);
// range
$arrayThree = range(0, 23);
// array_map
$squared = array_map(function ($item) {

    return $item ** 2;

}, $arrayTwo);
// array_filter ARRAY_FILTER_USE_KEY | ARRAY_FILTER_USE_BOTH
$squaredFiltered = array_filter($squared, function ($item) {

    return $item > 8;
});

$cityFiltered = array_filter($city, function ($item) {

    return in_array($item, ['city', 'town', 'country']);

}, ARRAY_FILTER_USE_KEY);

// array_combine
$keys = ['name', 'country', 'population', 'latitude', 'longitude'];
$citiesArray = [
    ['Frankfurt', 'Germany', 785000, 50.110924, 8.682127],
    ['Mumbai', 'India', 20667656, 19.076090, 72.877426]
];
$keyValueCities = [];
foreach ($citiesArray as $city) {

    $keyValueCities[] = array_combine($keys, $city);
}

// array_merge
$mergedCities = array_merge($citiesArray, [
    ['Valencia', 'Spain', 834920, 39.466667, - 0.375000]
]);

// array_replace
$globalConfig = ['env' => 'prod', 'debug' => false, 'db_name' => 'prod_db'];

$devConfig = ['env' => 'dev', 'debug' => true, 'db_name' => 'dev_db'];

$localConfig = ['db_name' => 'my_local_db'];

$myConfig = array_replace($globalConfig, $devConfig, $localConfig);

// array_sum
$sum = array_sum([1, 2, 3, 45.6, 7]);

// array_product
$product = array_product([1, 2, 3, 45.6, 7]);

// list
$values = [23, 45, 67];
list($a, $b, $c) = $values;

// explode
$csvString = 'PHP,JavaScript,Python,C';
$languagesArray = explode(',', $csvString);

// implode
$languagesString = implode(', ', $languagesArray);

// compact
$name = 'Frankfurt';
$country = 'Germany';
$population = 785000;
$latitude = 50.110924;
$longitude = 8.682127;

$location = compact('name', 'country', 'population', 'latitude', 'longitude');