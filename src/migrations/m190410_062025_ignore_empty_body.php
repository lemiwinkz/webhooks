<?php

namespace craft\webhooks\migrations;

use Craft;
use craft\db\Migration;

/**
 * m190410_062025_ignore_empty_body migration.
 */
class m190410_062025_ignore_empty_body extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        if (!$this->db->columnExists('{{%webhooks}}', 'ignoreEmptyBody')) {
            $this->addColumn('{{%webhooks}}', 'ignoreEmptyBody', $this->boolean());
        }
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m190410_062025_ignore_empty_body cannot be reverted.\n";
        return false;
    }
}
