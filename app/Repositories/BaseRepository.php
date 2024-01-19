<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function find($id, array $with = [])
    {
        $query = $this->model;

        if ( !empty( $with ) ) {
            $query = $query->with($with);
        }

        return $query->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->model->find($id);
        $record->update($data);
        return $record;
    }

    public function delete($id): void
    {
        $record = $this->model->find($id);
        $record->delete();
    }
}
