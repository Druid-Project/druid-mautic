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

/* @bundles/CoreBundle/Test/Hooks/SlowTestExtension.php */
class __TwigTemplate_f566d20f8110c63b393cbe5e92c8f4bb extends Template
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

namespace Mautic\\CoreBundle\\Test\\Hooks;

use PHPUnit\\Runner\\AfterLastTestHook;
use PHPUnit\\Runner\\AfterTestHook;

/**
 * This extension outputs a list of slow test classes to the STDOUT.
 * Enable this extension by setting the following environmental variable `MAUTIC_TEST_LOG_SLOW_TESTS=1`.
 * You can set an optional threshold in seconds (e.g. `MAUTIC_TEST_SLOW_TESTS_THRESHOLD=1.5`).
 */
class SlowTestExtension implements AfterTestHook, AfterLastTestHook
{
    /**
     * @var bool
     */
    private \$enabled;

    /**
     * Threshold in seconds.
     *
     * @var float
     */
    private \$threshold;

    /**
     * @var array<string, float>
     */
    private \$classes = [];

    /**
     * @var float
     */
    private \$started;

    public function __construct()
    {
        \$this->enabled   = (bool) getenv('MAUTIC_TEST_LOG_SLOW_TESTS');
        \$this->threshold = (float) (getenv('MAUTIC_TEST_SLOW_TESTS_THRESHOLD') ?: 2);
        \$this->started   = microtime(true);
    }

    public function executeAfterTest(string \$test, float \$time): void
    {
        if (!\$this->enabled) {
            return;
        }

        \$time            = microtime(true) - \$this->started;
        \$this->started   = microtime(true);

        if (\$time <= \$this->threshold) {
            return;
        }

        \$class = substr(\$test, 0, strpos(\$test, '::'));

        if (!isset(\$this->classes[\$class])) {
            \$this->classes[\$class] = 0;
        }

        \$this->classes[\$class] += \$time;
    }

    public function executeAfterLastTest(): void
    {
        if (!\$this->classes) {
            return;
        }

        arsort(\$this->classes);

        fwrite(STDOUT, PHP_EOL.'Slow test classes:'.PHP_EOL.var_export(\$this->classes, true));
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
        return "@bundles/CoreBundle/Test/Hooks/SlowTestExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Hooks/SlowTestExtension.php", "/app/docroot/app/bundles/CoreBundle/Test/Hooks/SlowTestExtension.php");
    }
}
