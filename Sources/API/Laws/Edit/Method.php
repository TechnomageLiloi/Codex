<?php

namespace Liloi\Codex\API\Laws\Edit;

use Liloi\Codex\API\Method as SuperMethod;
use Liloi\Codex\Domains\Laws\Manager as DiaryManager;

class Method extends SuperMethod
{
    /**
     * @inheritDoc
     */
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_day']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}