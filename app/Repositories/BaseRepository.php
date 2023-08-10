<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    //model muốn tương tác
    protected $model;

   //khởi tạo
    public function __construct()
    {
        $this->setModel();
    }

    //lấy model tương ứng
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function index()
    {
        return $this->model->all();
    }

    public function show($id)
    {
        $result = $this->model->find($id);

        return $result;
    }

    public function store($attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function update( $attributes = [], $id)
    {
        $result = $this->show($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }

        return false;
    }

    public function destroy($id)
    {
        $result = $this->show($id);
        if ($result) {
            $result->delete();
            return true;
        }

        return false;
    }
}