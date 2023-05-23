<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat070}}`.
 */
class m230523_081447_create_obat070_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat070}}', [
            'id' => $this->primaryKey(),
            'kode_obat' => $this->string()->notNull(),
            'harga' => $this->decimal(10, 2)->notNull(),
            'stok_obat' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat070}}');
    }
}
