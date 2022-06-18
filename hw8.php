<?php

interface SaveProduct{
    public function save(Product $product);
}
interface UpdateProduct{
    public function update(Product $product);
}
interface DeleteProduct{
    public function delete(Product $product);
}
interface ShowProduct{
    public function show(Product $product);
}
interface PrintProduct{
    public function print(Product $product);
}

class Product {
    public function __construct(private string $name, private string $value)
    {
    }
    public function set($name, $value){
    }
    public function get($name){
        return $this->name;
    }
}
class ChangeProduct implements SaveProduct, UpdateProduct, DeleteProduct {

    public function save(Product $product)
    {
        // TODO: Implement save() method.
    }
    public function update(Product $product)
    {
        // TODO: Implement update() method.
    }
    public function delete(Product $product)
    {
        // TODO: Implement delete() method.
    }
}

class DemonstrationProduct implements ShowProduct, PrintProduct {

    public function show(Product $product)
    {
        // TODO: Implement show() method.
    }

    public function print(Product $product)
    {
        // TODO: Implement print() method.
    }
}


