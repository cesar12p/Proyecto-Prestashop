<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVhtc3xa\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVhtc3xa/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerVhtc3xa.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerVhtc3xa\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerVhtc3xa\appProdProjectContainer([
    'container.build_hash' => 'Vhtc3xa',
    'container.build_id' => 'a26224e7',
    'container.build_time' => 1608640222,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVhtc3xa');
