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

/* @bundles/CoreBundle/Helper/ListParser/ArrayListParser.php */
class __TwigTemplate_ca8b71bf95f8654a72ca23c891e453f9 extends Template
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

class ArrayListParser implements ListParserInterface
{
    public function parse(\$list): array
    {
        if (!is_array(\$list)) {
            throw new FormatNotSupportedException();
        }

        if (
            array_key_exists(0, \$list)
            && !is_array(\$list[0])
            && array_keys(\$list) === range(0, count(\$list) - 1)
        ) {
            \$choices = [];

            // Numerical array so set labels as values and return as choices
            foreach (\$list as \$value) {
                if ('' === \$value || null === \$value) {
                    continue;
                }

                \$choices[trim(html_entity_decode(\$value, ENT_QUOTES))] = trim(html_entity_decode(\$value, ENT_QUOTES));
            }

            return \$choices;
        }

        return \$list;
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
        return "@bundles/CoreBundle/Helper/ListParser/ArrayListParser.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ListParser/ArrayListParser.php", "/app/docroot/app/bundles/CoreBundle/Helper/ListParser/ArrayListParser.php");
    }
}
