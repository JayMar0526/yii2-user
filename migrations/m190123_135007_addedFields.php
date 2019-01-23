<?php

use yii\db\Migration;

/**
 * Class m190123_135007_addedFields
 */
class m190123_135007_addedFields extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'lastname', 'varchar(255) not null');
        $this->addColumn('{{%user}}', 'firstname', 'varchar(255) not null');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190123_135007_addedFields cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_135007_addedFields cannot be reverted.\n";

        return false;
    }
    */
}
