# Contao Interfaces

This library helps you to always get the right parameters for all hooks and callbacks. This collection consists of interface classes only.

All hooks are suffixed with `Hook` and all Callbacks with `Callback`.

[Contao Hook reference](https://docs.contao.org/dev/reference/hooks/)

[Contao Callback reference](https://docs.contao.org/dev/reference/dca/callbacks/)

## Simple to use
```php
use Tastaturberuf\ContaoInterfaces\Hooks\LoadDataContainerHook;

class MyEventListener implements LoadDataContainerHook
{
    public function onLoadDataContainer(string $table) : void
    {        
        // Do something
    }
}
```

## Still use annotations

[How to use annotations in Contao](https://docs.contao.org/dev/framework/hooks/#using-annotations)

```php
use Contao\CoreBundle\ServiceAnnotation\Hook;
use Tastaturberuf\ContaoInterfaces\Hooks\LoadDataContainerHook;
use Terminal42\ServiceAnnotationBundle\ServiceAnnotationInterface;

class MyEventListener implements LoadDataContainerHook, ServiceAnnotationInterface
{
    /**
     * @Hook("loadDataContainer", priority=1337)
     */
    public function onLoadDataContainer(string $table) : void
    {        
        // Do something
    }
}
```

Feel free to contribute or make an issue if you have problems.
