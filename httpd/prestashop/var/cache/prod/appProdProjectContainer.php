<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXvfud3r\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXvfud3r/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXvfud3r.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXvfud3r\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXvfud3r\appProdProjectContainer(array(
    'container.build_hash' => 'Xvfud3r',
    'container.build_id' => 'fa19b83f',
    'container.build_time' => 1541937712,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXvfud3r');
