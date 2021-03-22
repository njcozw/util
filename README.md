# NJCOZW Utility Module

Basic PHP package with utility functions like die and dump, generate password and logging to txt file

### Usage

1. Die Dump

   ```
   $data = [
       'test' => 'Test Data'
   ];

   Util::dd($random_data);

   // Output

   Array
   (
       [test] => Test Data
   )
   ```

   ### same as:

   ```
   die(var_dump($random_data))
   ```

2. Random String Generator

   ```
   Util::generator($length_of_string); // e.g. 5 string chars plus current datetime

   //Output
   N5IN70322210903
   ```

3. Log

   #### **NOTE:** Create a folder where txt logs will be stored _e.g. logs in your project directory_

   ```
   Util::log($string_data, $location);  // requires string data only
   ```

### Getting Started

```
# Installation

composer require njcozw/util:dev-master

# In your src file

<?php
use App\Njcozw\Util;

require_once __DIR__ . '/vendor/autoload.php';

Util::log($string, $location);

?>

```
