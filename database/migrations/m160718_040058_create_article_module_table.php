<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%article_module}}`.
 */
class m160718_040058_create_article_module_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%article_module}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'title' => $this->string(50),
            'model' => $this->string(128)
        ]);
        $this->addColumn('{{%article}}', 'is_hot', $this->smallInteger()->notNull()->defaultValue(0)->comment('是否热门'));
        $this->addColumn('{{%article}}', 'is_best', $this->smallInteger()->notNull()->defaultValue(0)->comment('是否精华'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%article_module}}');
        $this->dropColumn('{{%article}}', 'is_hot');
        $this->dropColumn('{{%article}}', 'is_best');
    }
}
