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

/* @bundles/CoreBundle/Helper/ListParser/BarListParser.php */
class __TwigTemplate_9fd8b1dedcdb05683260ff16e9f889a4 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\ListParser;

use Mautic\\CoreBundle\\Helper\\ListParser\\Exception\\FormatNotSupportedException;

class BarListParser implements ListParserInterface
{
    public function parse(\$list): array
    {
        if (!is_string(\$list)) {
            throw new FormatNotSupportedException();
        }

        if (!str_contains(\$list, '|')) {
            throw new FormatNotSupportedException();
        }

        // label/value pairs
        \$parts = explode('||', \$list);
        if (count(\$parts) > 1) {
            \$labels = explode('|', \$parts[0]);
            \$values = explode('|', \$parts[1]);

            return array_combine(\$values, \$labels);
        }

        // label and values are the same
        \$labels = explode('|', \$list);
        \$values = \$labels;

        return array_combine(\$values, \$labels);
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
        return "@bundles/CoreBundle/Helper/ListParser/BarListParser.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ListParser/BarListParser.php", "/app/docroot/app/bundles/CoreBundle/Helper/ListParser/BarListParser.php");
    }
}
