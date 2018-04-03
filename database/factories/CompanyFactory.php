<?php

use Faker\Generator as Faker;

$factory->define(\App\ParentCompany::class, function (Faker $faker) {
    return [
        'ar_name' => 'اسم الشركة',
        'en_name' => 'Company Name',
        'ar_about' => 'عن الشركة',
        'en_about' => 'About Company',
        'ar_address' => 'عنوان الشركة',
        'en_address' => 'Company Address',
        'email' => 'Company E-mail',
        'tel' => 'Company phone',
        'gmap' => 'Company Coordinates',
    ];
});
