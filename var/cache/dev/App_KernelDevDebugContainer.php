<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerALgTlHz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerALgTlHz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerALgTlHz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerALgTlHz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerALgTlHz\App_KernelDevDebugContainer([
    'container.build_hash' => 'ALgTlHz',
    'container.build_id' => '602f0073',
    'container.build_time' => 1646761375,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerALgTlHz');