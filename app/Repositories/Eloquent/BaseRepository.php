<?php 
namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\IBase;
use Exception;

abstract class BaseRepository implements IBase
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModelClass();
    }

    public function all() {
        return $this->model->all();
    }

    public function find($id) {
        $result = $this->model->find($id);
        if (! $result) {
            return false;
        }
        return $result;
    }

    public function paginate($perPage = 10)
    {
        return $this->model->paginate($perPage);
    }

    public function create($request)
    {
        return $this->model->create($request);
    }

    public function update($id, array $data)
    {
        $record = $this->find($id);
        $record->update($data);
        return $record;
    }

    public function delete($id)
    {
        $record = $this->find($id);
        return $record->delete();
    }


    public function findWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function findWhereFirst($column, $value)
    {
        return $this->model->where($column, $value)->first();
    }

    public function searchByName($column, $name)
    {
        $response= $this->model->where($column, 'like', '%'.$name.'%')->get();
        return  $response;
    }

    public function orderBy($name) {
        return $this->model->orderBy($name);
    }

    public function get() {
        return $this->model->get();
    }

    public function isModel($request):bool {
       return $request ? true : response()->json([
           'status' => 'false',
           'message' => 'Kayıt bulunamadı!'],404); 
    }

    private function getModelClass() {
        if(! method_exists($this,'model')) {
            throw new Exception("Tanımlı model bulunamadı!");
        }
        return app()->make($this->model());
    }
}
