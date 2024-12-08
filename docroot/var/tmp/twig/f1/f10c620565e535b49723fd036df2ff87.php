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

/* @bundles/CoreBundle/Helper/ListParser/JsonListParser.php */
class __TwigTemplate_8e7f457a1032b9290d871a88982c41b6 extends Template
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

class JsonListParser implements ListParserInterface
{
    public function parse(\$list): array
    {
        if (!is_string(\$list)) {
            throw new FormatNotSupportedException();
        }

        \$parsedList = json_decode(\$list, true);
        if (!is_array(\$parsedList)) {
            throw new FormatNotSupportedException();
        }

        return \$parsedList;
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
        return "@bundles/CoreBundle/Helper/ListParser/JsonListParser.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ListParser/JsonListParser.php", "/app/docroot/app/bundles/CoreBundle/Helper/ListParser/JsonListParser.php");
    }
}
