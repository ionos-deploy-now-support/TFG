<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4EMRxx1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4EMRxx1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4EMRxx1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4EMRxx1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4EMRxx1\App_KernelDevDebugContainer([
    'container.build_hash' => '4EMRxx1',
    'container.build_id' => 'ae40fc1f',
    'container.build_time' => 1714637203,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container4EMRxx1');
