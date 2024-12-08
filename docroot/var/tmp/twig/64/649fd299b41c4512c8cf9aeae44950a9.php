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

/* @bundles/FormBundle/Twig/Extension/FormFieldExtension.php */
class __TwigTemplate_d3a1ca5798fdc17c24acfdddc07ef7e1 extends Template
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

namespace Mautic\\FormBundle\\Twig\\Extension;

use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

final class FormFieldExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('formFieldParseBooleanList', [FormFieldHelper::class, 'parseBooleanList']),
            new TwigFunction('formFieldParseList', [FormFieldHelper::class, 'parseList']),
            new TwigFunction('formFieldParseListForChoices', [FormFieldHelper::class, 'parseListForChoices']),
            new TwigFunction('formFieldCleanInputAttributes', [\$this, 'cleanInputAttributes']),
        ];
    }

    /**
     * Clean input evil attributes to prevent XSS
     * Remove any attribute starting with \"on\" or xmlns or javascript:. Used in href, src, value, data, etc.
     */
    public function cleanInputAttributes(string \$value): string
    {
        // Remove any HTML tags
        \$value = htmlspecialchars(\$value, ENT_SUBSTITUTE, 'UTF-8', false);
        // Remove any attribute starting with \"on\" or javascript used in href, src, value, data, etc.
        preg_match('/(on[A-Za-z]*\\s*=|javascript:)/i', \$value, \$result);
        if (!empty(\$result)) {
            return '';
        }

        return \$value;
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
        return "@bundles/FormBundle/Twig/Extension/FormFieldExtension.php";
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
        return new Source("", "@bundles/FormBundle/Twig/Extension/FormFieldExtension.php", "/app/docroot/app/bundles/FormBundle/Twig/Extension/FormFieldExtension.php");
    }
}
