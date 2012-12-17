CompanyNameGenerator™: A Company Name Generator
===============================================

Generate names for English tech companies with class.

Why Should I Use CompanyNameGenerator™?
---------------------------------------

This library will help you if:

 * You are founding a tech company but you don't know how to name it
 * You want to check if a company name is original of if its creators had no imagination and let the computer craft it

How Does It Work?
-----------------

This generator contains dictionaries of culinary terms and tech terms. By mixing them together, it manages to create plausible company names. Awesomesauce!

Installation
------------

Add the CompanyNameGenerator™ library to your `composer.json` file:

    {
      "require": {
        "fzaninotto/company-name-generator": "dev-master"
      }
    }

Then use [composer](http://getcomposer.org/doc/00-intro.md) to complete the installation process.

Usage
-----

Use the new `CompanyNameGenerator\FakerProvider` class in combination with [Faker](https://github.com/fzaninotto/Faker) to produce an infinite number of tech company names.

    <?php

    require __DIR__ .'/vendor/autoload.php';

    $faker = Faker\Factory::create();
    $faker->addProvider(new CompanyNameGenerator\FakerProvider($faker));
    for ($i=0; $i < 20; $i++) {
        echo $faker->companyName, "\n";
    }

This snippet generates 20 awesome company names. Here is an example output from CompanyNameGenerator™:

    ExceptionRosemary
    DevelopmentPing
    ToolMango
    CoderScalable
    ConstantCircuit
    DeprecatedCooker
    PingPesto
    ITMega
    ScalablePie
    BinaryComputing
    MashupMill
    StuffMashup
    ExportRouter
    OverTaste
    ClusterRender
    StreamingThread
    LemonMeta
    ChocolateHacker
    CyberBug
    RaisinSmart
