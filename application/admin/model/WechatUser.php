<?php

namespace app\admin\model;

use think\Model;

class WechatUser extends Model
{
    // 表名
    protected $name = 'wechat_user';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [
        'sex_text',
        'status_text'
    ];
    

    
    public function getSexList()
    {
        return ['1' => __('Sex 1')];
    }     

    public function getStatusList()
    {
        return ['2' => __('Status 2'),'1' => __('Status 1'),'0' => __('Status 0')];
    }     


    public function getSexTextAttr($value, $data)
    {        
        $value = $value ? $value : $data['sex'];
        $list = $this->getSexList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getStatusTextAttr($value, $data)
    {        
        $value = $value ? $value : $data['status'];
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}