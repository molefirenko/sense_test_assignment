<?php

use yii\db\Migration;

/**
 * Class m190516_082608_create_table_a
 */
class m190516_082608_create_table_a extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'table_a',
            [
                'id' => $this->primaryKey(),
                'value' => $this->string(),
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('table_a');
    }
}
