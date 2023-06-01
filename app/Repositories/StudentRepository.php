<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Student;
use App\Contracts\StudentInterface;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class StudentRepository
 * @package App\Repositories
 */
class StudentRepository implements StudentInterface
{
    /**
     * @var Student
     */
    protected $model;

    /**
     * @param Student $model
     */
    public function __construct(Student $model)
    {
        $this->model = $model;
    }

    /**
     * @return Collection|Student[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param int $id
     * @param $data
     * @return mixed
     */
    public function update(int $id, $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    /**
     * @param int $id
     * @return int
     */
    public function destroy(int $id): int
    {
        return $this->model->destroy($id);
    }
}
