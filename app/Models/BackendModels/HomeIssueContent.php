<?php

namespace App\Models\BackendModels;

use Illuminate\Database\Eloquent\Model;

class HomeIssueContent extends Model
{
      /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'home_issue_content';
     /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * 模型日期列的存储格式
     *
     * @var string
     */
    protected $dateFormat = 'U';


}

