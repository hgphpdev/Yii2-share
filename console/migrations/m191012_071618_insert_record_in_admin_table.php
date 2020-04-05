<?php

use yii\db\Migration;

/**
 * Class m191012_071618_insert_record_in_admin_table
 */
class m191012_071618_insert_record_in_admin_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->insert('{{%admin}}', [
            'username' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('123456'),
            'email' => 'devlop@hgphpdev.com',
            'status' => common\models\Admin::STATUS_ACTIVE,
            'created_at' => time(),
            'updated_at' => time()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        echo "m191012_071618_insert_record_in_admin_table cannot be reverted.\n";

        return false;
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m191012_071618_insert_record_in_admin_table cannot be reverted.\n";

      return false;
      }
     */
}
