<?php namespace App\Repositories\Criteria\User;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;

class UsersByUsernamesAscending extends Criteria
{

    /**
     * @param $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->orderBy('username', 'ASC');
        return $model;
    }

}
