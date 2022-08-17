<?php 

namespace App\Repositories\Contracts;

interface IBase {
    public function all();
    public function find($id);
    public function findWhere($column, $value);
    public function findWhereFirst($column, $value);
    public function paginate($perPage = 10);
    public function create($request);
    public function update($id, array $data);
    public function delete($id);
    public function searchByName($column, $name); 
    public function orderBy($name);
    public function get();
}
