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

/* @bundles/CoreBundle/DependencyInjection/EnvProcessor/IntNullableProcessor.php */
class __TwigTemplate_fb83ed713542cb11f9d159c800ee121f extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\EnvProcessor;

use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;

class IntNullableProcessor implements EnvVarProcessorInterface
{
    public function getEnv(\$prefix, \$name, \\Closure \$getEnv)
    {
        \$env = \$getEnv(\$name);

        return null === \$env ? null : (int) \$env;
    }

    public static function getProvidedTypes()
    {
        return [
            'intNullable' => 'string|int',
        ];
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
        return "@bundles/CoreBundle/DependencyInjection/EnvProcessor/IntNullableProcessor.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/EnvProcessor/IntNullableProcessor.php", "/app/docroot/app/bundles/CoreBundle/DependencyInjection/EnvProcessor/IntNullableProcessor.php");
    }
}
