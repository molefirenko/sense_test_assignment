<?php

use yii\db\Migration;

/**
 * Class m190516_090632_create_table_b
 */
class m190516_090632_create_table_b extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'table_b',
            [
                'id' => $this->primaryKey(),
                'value' => $this->string(),
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('table_b');
    }
}
