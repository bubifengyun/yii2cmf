<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/6/29
 * Time: 上午11:16
 */

namespace backend\components;


use yii\base\BootstrapInterface;

class Events extends \common\components\Events implements BootstrapInterface
{
    protected $listeners = [
        'yii\db\BaseActiveRecord.afterUpdate' => 'backend\listeners\AdminLog',
    ];
}