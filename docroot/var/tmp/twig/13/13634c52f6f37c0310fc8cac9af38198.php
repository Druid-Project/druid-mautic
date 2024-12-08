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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/IntNullableProcessorTest.php */
class __TwigTemplate_de34f3ffd9a7e997d2d75dbcec9814d8 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\DependencyInjection\\EnvProcessor;

use Mautic\\CoreBundle\\DependencyInjection\\EnvProcessor\\IntNullableProcessor;
use PHPUnit\\Framework\\TestCase;

class IntNullableProcessorTest extends TestCase
{
    public function testNullReturnedIfNullValue(): void
    {
        \$getEnv = fn (string \$name) => null;

        \$processor = new IntNullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertNull(\$value);
    }

    public function testIntReturnedIfNotNull(): void
    {
        \$getEnv = fn (string \$name) => '0';

        \$processor = new IntNullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertSame(0, \$value);
    }

    public function testIntReturnedIfEmptyString(): void
    {
        \$getEnv = fn (string \$name) => '';

        \$processor = new IntNullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertSame(0, \$value);
    }

    public function testIntReturnedIfInt(): void
    {
        \$getEnv = fn (string \$name) => 12;

        \$processor = new IntNullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertSame(12, \$value);
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
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/IntNullableProcessorTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/IntNullableProcessorTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/IntNullableProcessorTest.php");
    }
}
