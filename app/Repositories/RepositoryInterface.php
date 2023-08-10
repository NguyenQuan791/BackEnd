<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * Get all
     * @return mixed
     */
    public function index();

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function show($id);

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function store($attributes = []);

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update($attributes = [],$id);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function destroy($id);
}