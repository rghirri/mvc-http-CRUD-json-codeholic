<?php
/**
 *
 * The __call magic method:
 * how to call inaccessible
 * methods in a class
 *
 * */

class Product
{
    public function __call($name, $arguments)
    {
        if ($name === 'modify') {
            $this->modify();
        } elseif ($name === 'publish') {
            echo 'publish';
            echo '<br>';
        }
    }
    public function save()
    {
        echo 'save';
        echo '<br>';
    }
    public function load()
    {
        echo 'load';
        echo '<br>';
    }
    private function modify()
    {
        echo 'modify';
        echo '<br>';
    }
}

$product = new Product();

$product->save();
$product->load();
$product->modify();
$product->publish();