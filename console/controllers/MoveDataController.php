<?php

namespace console\controllers;

use yii;
use yii\console\Controller;
use yii\helpers\Console;

class MoveDataController extends Controller
{
    /**
     * Run command: yii move-data
     * @return int
     * @throws yii\db\Exception
     */
    public function actionIndex()
    {
        $data_a = Yii::$app->db->createCommand('SELECT * FROM table_a')->queryAll();

        Yii::$app->db->createCommand()->batchInsert('table_b',['id','value'],$data_a)->execute();

        return 0;
    }
}