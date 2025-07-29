<?php

namespace Liloi\Codex\API\Laws\Create;

use Liloi\Codex\API\Method as SuperMethod;
use Liloi\Codex\Domains\Laws\Manager as DiaryManager;

class Method extends SuperMethod
{
    /**
     * @inheritDoc
     */
    public function execute(): array
    {
        DiaryManager::create(
            DiaryManager::URLtoUID($_SERVER['REQUEST_URI'])
        );

        return [];
    }
}