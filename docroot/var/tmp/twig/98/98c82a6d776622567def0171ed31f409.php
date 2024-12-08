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

/* @bundles/CoreBundle/Twig/Extension/AppExtension.php */
class __TwigTemplate_5dc80b42337d7ec5f78ccb6c991ae913 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;
use Twig\\TwigTest;

class AppExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('ini_get', fn (\$value) => ini_get(\$value)),
            new TwigFunction('is_class', fn (string \$value) => class_exists(\$value)),
            new TwigFunction('is_file', fn (string \$value) => file_exists(\$value)),
            new TwigFunction('is_function', fn (string \$value) => function_exists(\$value)),
            new TwigFunction('is_extension_loaded', fn (string \$value) => extension_loaded(\$value)),
        ];
    }

    /**
     * @return TwigTest[]
     */
    public function getTests(): array
    {
        return [
            new TwigTest('string', fn (\$value) => is_string(\$value)),
            new TwigTest('class', fn (string \$value) => class_exists(\$value)),
            new TwigTest('file', fn (string \$value) => file_exists(\$value)),
            new TwigTest('function', fn (string \$value) => function_exists(\$value)),
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
        return "@bundles/CoreBundle/Twig/Extension/AppExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/AppExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/AppExtension.php");
    }
}
