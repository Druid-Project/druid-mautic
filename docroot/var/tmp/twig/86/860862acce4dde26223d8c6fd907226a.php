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

/* @bundles/MessengerBundle/DependencyInjection/EnvProcessor/MessengerNullableEnvVarProcessor.php */
class __TwigTemplate_141a71e19f53a2040a83f94e9b0f88b7 extends Template
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

namespace Mautic\\MessengerBundle\\DependencyInjection\\EnvProcessor;

use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;

class MessengerNullableEnvVarProcessor implements EnvVarProcessorInterface
{
    public function getEnv(\$prefix, \$name, \\Closure \$getEnv)
    {
        return \$getEnv(\$name) ?: 'null://';
    }

    public static function getProvidedTypes()
    {
        return [
            'messenger-nullable' => 'string',
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
        return "@bundles/MessengerBundle/DependencyInjection/EnvProcessor/MessengerNullableEnvVarProcessor.php";
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
        return new Source("", "@bundles/MessengerBundle/DependencyInjection/EnvProcessor/MessengerNullableEnvVarProcessor.php", "/app/docroot/app/bundles/MessengerBundle/DependencyInjection/EnvProcessor/MessengerNullableEnvVarProcessor.php");
    }
}
