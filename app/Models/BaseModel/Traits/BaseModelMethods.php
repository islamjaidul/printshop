<?php

namespace App\Models\BaseModel\Traits;


trait BaseModelMethods
{
    /**
     * store method is using to create / update
     *
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        $id = isset($data['id']) ? $data['id'] : null;

        if ($model = $this->findOrNew($id)) {
            $model->fill($data)->save();
            return $model;
        }

        throw new \Exception('Woops!! It seems some problem');
    }
}