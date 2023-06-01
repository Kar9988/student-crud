<?php

declare(strict_types=1);

namespace App\Contracts;

/**
 * Interface StudentInterface
 * @package App\Contracts
 */
interface StudentInterface
{
    /**
     * @return mixed
     */
    public function all();

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id);

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param int $id
     * @param $data
     * @return mixed
     */
    public function update(int $id, $data);

    /**
     * @param int $id
     * @return mixed
     */
    public function destroy(int $id);
}
