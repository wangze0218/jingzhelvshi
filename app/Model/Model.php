<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    /**
     * 指定时间字符
     *
     * @param  DateTime|int  $value
     * @return string
     */
    public function fromDateTime($value)
    {
        return strtotime(parent::fromDateTime($value));
    }

    /**
     * 组织查询条件
     * @param $where
     * @param $record
     * @return mixed
     */
    public static function orginationQuery($where,$record){
        if(empty($where)) return $record;
        foreach ($where as $field=>$value){
            $where_like = [];
            if(!is_array($value)){
                $record->where($field, $value);
                continue;
            }
            $operate = array_keys($value)[0];//得到操作数
            $operate_value = $value[$operate];
            switch (strtolower($operate)){
                case "like":
                    $where_like[$field] = $operate_value;
                    break;
                case "between":
                    $record->whereBetween($field,$operate_value);
                    break;
                case "whereNotIn":
                    $record->whereNotIn($field, $operate_value);
                    break;
                case "or":
                    $record->where(function ($query) use ($field,$operate_value){
                            foreach ($operate_value as $k=>$v){
                                $query->orWhere($field,$v);
                            }
                        }) ;
                    break;
                default:
                    $record->where($field, $operate, $operate_value);
            }
        }
        if(!empty($where_like)) {
            $record->where(function ($query) use ($where_like) {
                foreach ($where_like as $k => $v) {
                    $query->orWhere($k, 'like', "%$v%");
                }
            });
        }
        return $record;
    }

    /**
     * 编辑(适用于表中没有created_at字段)
     * @param $record_id
     * @param $attributes
     * @return boolean
     */
    public static function updateRecordDB($record_id = -1,$attributes = []){
        if(empty($attributes)){
            return false;
        }
        return self::findOrFail($record_id)->update($attributes);
    }

    /**
     * 编辑(适用于表中使用created_at字段)
     * @param $record_id
     * @param $attributes
     * @return boolean
     */
    public static function updateRecordORM($record_id = -1,$attributes = []){
        if(empty($attributes)){
            return false;
        }

        $record_data = self::findOrFail($record_id);
        foreach ($attributes as $key => $value){
            $record_data->$key = $value;
        }
        return $record_data->save();
    }

    /**
     * 编辑-批量
     * @param array $attributes
     * @param array $where
     * @return bool
     */
    public static function updateRecordMass($attributes = [],$where = []){
        if(empty($attributes)){
            return false;
        }

        $record = self::query();

        $record = self::orginationQuery($where,$record);

        return $record->update($attributes);
    }

    /**
     * 永久删除(适用于表中没有deleted_at字段)
     * @param $record_id
     */
    public static function forceDeleteRecordDB($record_id){
        return self::findOrFail($record_id)->delete();
    }

    /**
     * 软删除(适用于表中使用deleted_at)
     * @param $record_id
     */
    public static function deleteRecordORM($record_id){
        return self::findOrFail($record_id)->delete();
    }

    /**
     * 删除-批量(慎用)
     * @param array $attributes
     * @param array $where
     * @return bool
     */
    public static function deleteRecordMass($where = []){
        $record = self::query();

        $record = self::orginationQuery($where,$record);

        return $record->delete();
    }

    /**
     * 恢复软删除(适用于表中使用deleted_at)
     * @param $record_id
     */
    public static function restoreRecordORM($record_id){
        return self::withTrashed()->findOrFail($record_id)->restore();
    }

    /**
     * 永久删除(适用于表中使用deleted_at)
     * @param $record_id
     */
    public static function forceDeleteRecordORM($record_id){
        return self::withTrashed()->findOrFail($record_id)->forceDelete();
    }

    /**
     * 根据多条件得到一条记录
     * @param $where
     * @return mixed|bool
     */
    public static function findRecordOneCondition($where = [], $columns = ['*'], $order_by = [])
    {
        if (empty($where)) return false;

        $record = self::query();

        $record = self::orginationQuery($where,$record);

        if(!empty($order_by)){
            foreach ($order_by as $key=>$value){
                $record->orderBy($key, $value);
            }
        }

        return $record->select($columns)->first();
    }

    /**
     * 根据多条件得到一条记录(包括软删除)
     * @param $where
     * @return array|bool
     */
    public static function findRecordOneWithTrashed($where = [], $columns = ['*'])
    {
        if (empty($where)) return false;

        $record = self::query()->withTrashed();

        $record = self::orginationQuery($where,$record);

        return $record->select($columns)->first();
    }

    /**
     * 根据多条件得到一条记录(加锁)
     * @param $where
     * @return array|bool
     */
    public static function findRecordOneLock($where = [], $columns = ['*'])
    {
        if (empty($where)) return false;

        $record = self::query();

        $record = self::orginationQuery($where,$record);

        return $record->select($columns)->lockForUpdate()->first();
    }

    /**
     * 根据条件得到记录数
     * @param $where
     * @return boolean|number
     */
    public static function getRecordCountCondition($where = []){
//        if(empty($where)){
//            return false;
//        }

        $record = self::query();

        $record = self::orginationQuery($where,$record);

        return $record->count();
    }

    /**
     * 根据条件得到记录数(包括软删除)
     * @param $where
     * @return boolean|number
     */
    public static function getRecordCountWithTrashed($where = []){
        if(empty($where)){
            return false;
        }

        $record = self::query()->withTrashed();

        $record = self::orginationQuery($where,$record);

        return $record->count();
    }

    /**
     * 根据条件得到记录数(去重)
     * @param $where
     * @return boolean|number
     */
    public static function getRecordCountDistinct($where = []){
//        if(empty($where)){
//            return false;
//        }

        $record = static::query();

        $record = static::orginationQuery($where,$record);

        return $record->distinct()->count();
    }

    /**
     * 根据条件得到记录列表
     * @param array $where
     * @param array $columns
     * @param array $order_by
     * @param int $page
     * @param int $pageSize
     * @return bool|\Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getRecordListCondition($where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0){
//        if(empty($where)){
//            return false;
//        }

        $record = self::query();

        $record = self::orginationQuery($where,$record);

        if($page > 0 && $pageSize > 0){
            $record->forPage($page, $pageSize);
        }

        if(!empty($order_by)){
            foreach ($order_by as $key=>$value){
                $record->orderBy($key, $value);
            }
        }

        return $record->get($columns);
    }
    /**
     * lists为lists而生
     * @param array $where
     * @param array $columns
     * @param array $order_by
     * @param int $page
     * @param int $pageSize
     * @return bool|\Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getRecordLists($where = [],$columns = '*',$order_by = [],$page = 0,$pageSize = 0){
        if(empty($where)){
            return false;
        }

        $record = self::query();

        $record = self::orginationQuery($where,$record);

        if($page > 0 && $pageSize > 0){
            $record->forPage($page, $pageSize);
        }

        if(!empty($order_by)){
            foreach ($order_by as $key=>$value){
                $record->orderBy($key, $value);
            }
        }

        return $record->lists($columns);
    }
    /**
     * 根据条件得到记录列表(包括软删除)
     * @param array $where
     * @param array $columns
     * @param array $order_by
     * @param int $page
     * @param int $pageSize
     * @return bool
     */
    public static function getRecordListWithTrashed($where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0){
        if(empty($where)){
            return false;
        }

        $record = self::query()->withTrashed();

        $record = self::orginationQuery($where,$record);

        if($page > 0 && $pageSize > 0){
            $record->forPage($page, $pageSize);
        }

        if(!empty($order_by)){
            foreach ($order_by as $key=>$value){
                $record->orderBy($key, $value);
            }
        }

        return $record->get($columns);
    }

    /**
     * 根据条件得到记录列表(去重)
     * @param array $where
     * @param array $columns
     * @param array $order_by
     * @param int $page
     * @param int $pageSize
     * @return bool
     */
    public static function getRecordListDistinct($where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0){
        if(empty($where)){
            return false;
        }

        $record = self::query();

        $record = self::orginationQuery($where,$record);

        if($page > 0 && $pageSize > 0){
            $record->forPage($page, $pageSize);
        }

        if(!empty($order_by)){
            foreach ($order_by as $key=>$value){
                $record->orderBy($key, $value);
            }
        }

        return $record->distinct()->get($columns);
    }

    /**
     * 根据条件,增加指定字段
     * @param array $where
     * @param string $key_field
     * @param int $amount
     * @return bool
     */
    public static function incrementField($where = [],$key_field = '',$amount = 0){
        if(empty($where)){
            return false;
        }

        if(empty($key_field)){
            return false;
        }

        if(empty($amount)){
            return false;
        }

        $record = self::query();

        $record = self::orginationQuery($where,$record);

        return $record->increment($key_field,$amount);
    }

    /**
     * 根据条件,减少指定字段
     * @param array $where
     * @param string $key_field
     * @param int $amount
     * @return bool
     */
    public static function decrementField($where = [],$key_field = '',$amount = 0){
        if(empty($where)){
            return false;
        }

        if(empty($key_field)){
            return false;
        }

        if(empty($amount)){
            return false;
        }

        $record = self::query();

        $record = self::orginationQuery($where,$record);

        return $record->decrement($key_field,$amount);
    }

    /**
     * 根据条件得到记录列表-通过in数组
     * @param string $field
     * @param array $in_arr
     * @return bool
     */
    public static function getRecordListWhereIn($field = '',$in_arr = [],$where = []){
        if(empty($field)){
            return false;
        }

        if(empty($in_arr)){
            return false;
        }

        return self::whereIn($field,$in_arr)->where($where)->get();
    }

    /**
     * 根据条件,对指定字段进行聚合函数
     * @param string $key_field
     * @param string $fun
     * @param array $where
     * @return bool
     */
    public static function getFunField($key_field = '',$fun = '',$where = [])
    {
        if (empty($key_field)) {
            return false;
        }

        if (empty($fun)) {
            return false;
        }

        if (empty($where)) {
            return false;
        }

        $record = self::query();

        $record = self::orginationQuery($where, $record);

        return $record->$fun($key_field);
    }

    static public function getDictByIds( array $primaryKeys ){
        if( empty($primaryKeys) ){
            return array();
        }

        $instance = new static();
        $primaryKey = $instance->primaryKey;
        $collection = static::whereIn($primaryKey, $primaryKeys)->get();
        $dict = array();

        foreach($collection as $model){
            $dict[$model->{$primaryKey}] = $model;
        }

        return $dict;
    }

    /**
     * 添加
     * @param $attributes
     * @return boolean
     */
    public static function addRecord($attributes = [])
    {
        if(empty($attributes)){
            return false;
        }

        return self::insert($attributes);
    }
}
