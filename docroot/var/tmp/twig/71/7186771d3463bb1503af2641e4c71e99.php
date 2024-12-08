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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/NullableProcessorTest.php */
class __TwigTemplate_6a3d70dc7e2742aa34eb6d6d2fdc3704 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\EnvProcessor\\NullableProcessor;
use PHPUnit\\Framework\\TestCase;

class NullableProcessorTest extends TestCase
{
    public function testNullReturnedIfEmptyString(): void
    {
        \$getEnv = fn (string \$name) => '';

        \$processor = new NullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertNull(\$value);
    }

    public function testValueReturnedIfNotEmptyString(): void
    {
        \$getEnv = fn (string \$name) => 'foobar';

        \$processor = new NullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertEquals('foobar', \$value);
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
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/NullableProcessorTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/NullableProcessorTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/NullableProcessorTest.php");
    }
}
