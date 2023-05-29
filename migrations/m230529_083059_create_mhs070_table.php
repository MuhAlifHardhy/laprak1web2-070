<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mhs070}}`.
 */
class m230529_083059_create_mhs070_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs070}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this->string()->notNull(),
            'nama_mahasiswa' => $this->string()->notNull(),
            'kelas' => $this->string()->notNull(),
            'status' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs070}}');
    }
}
