<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRm2raur\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRm2raur/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerRm2raur.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerRm2raur\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerRm2raur\appProdProjectContainer([
    'container.build_hash' => 'Rm2raur',
    'container.build_id' => 'b2b3aee1',
    'container.build_time' => 1608639560,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRm2raur');