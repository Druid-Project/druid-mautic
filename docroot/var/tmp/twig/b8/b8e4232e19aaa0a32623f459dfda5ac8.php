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

/* @bundles/CoreBundle/Twig/Extension/NumericExtension.php */
class __TwigTemplate_698f2ac35c17ef7d508fced0b869cd2f extends Template
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
use Twig\\TwigFilter;
use Twig\\TwigTest;

class NumericExtension extends AbstractExtension
{
    public function getTests()
    {
        return [
            new TwigTest('numeric', fn (\$value) => !is_array(\$value) && is_numeric(\$value)),
        ];
    }

    public function getFilters()
    {
        return [
            new TwigFilter('int', fn (\$value): int => (int) \$value),
            new TwigFilter('array', fn (\$value) => (array) \$value),
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
        return "@bundles/CoreBundle/Twig/Extension/NumericExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/NumericExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/NumericExtension.php");
    }
}
