<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Test/Listeners/CleanupListener.php */
class __TwigTemplate_1f3f7d39585c17b1dc9d01bc0ea3d0a3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Test\\Listeners;

use PHPUnit\\Framework\\Test;
use PHPUnit\\Framework\\TestListener;
use PHPUnit\\Framework\\TestListenerDefaultImplementation;

/**
 * Prevents memory leaks by resetting all the test properties.
 */
class CleanupListener implements TestListener
{
    use TestListenerDefaultImplementation;

    public function endTest(Test \$test, float \$time): void
    {
        \$reflection = new \\ReflectionObject(\$test);

        foreach (\$reflection->getProperties() as \$property) {
            if (!\$property->isStatic() && !str_starts_with(\$property->getDeclaringClass()->getName(), 'PHPUnit\\\\')) {
                \$this->unsetProperty(\$test, \$property->getName());
            }
        }
    }

    private function unsetProperty(object \$object, string \$property): void
    {
        \$closure = function (object \$object) use (\$property): void {
            unset(\$object->\$property);
        };

        \\Closure::bind(\$closure, null, \$object)(\$object);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Test/Listeners/CleanupListener.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Test/Listeners/CleanupListener.php", "/app/docroot/app/bundles/CoreBundle/Test/Listeners/CleanupListener.php");
    }
}
