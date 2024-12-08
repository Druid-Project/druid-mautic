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

/* @bundles/CoreBundle/Twig/Extension/FormatterExtension.php */
class __TwigTemplate_9465daabab4d4b50b6c5f0e58d19911b extends Template
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

use Mautic\\CoreBundle\\Twig\\Helper\\FormatterHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;
use Twig\\TwigFunction;

class FormatterExtension extends AbstractExtension
{
    public function __construct(
        protected FormatterHelper \$formatterHelper
    ) {
    }

    public function getFilters()
    {
        return [
            new TwigFilter('formatter_simple_array_to_html', [\$this, 'simpleArrayToHtml'], ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('format', [\$this, '_'], ['is_safe' => ['all']]),
            new TwigFunction('normalizeStringValue', [\$this, 'normalizeStringValue']),
            new TwigFunction('formatter_simple_array_to_html', [\$this, 'simpleArrayToHtml'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * Format a string.
     *
     * @param mixed \$val
     */
    public function _(\$val, string \$type = 'html', bool \$textOnly = false, int \$round = 1): string
    {
        return (string) \$this->formatterHelper->_(\$val, \$type, \$textOnly, \$round);
    }

    /**
     * @see FormatterHelper::normalizeStringValue
     */
    public function normalizeStringValue(string \$string): string
    {
        return \$this->formatterHelper->normalizeStringValue(\$string);
    }

    /**
     * @param array<mixed> \$array
     */
    public function simpleArrayToHtml(array \$array, string \$delimeter = '<br />'): string
    {
        return \$this->formatterHelper->simpleArrayToHtml(\$array, \$delimeter);
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
        return "@bundles/CoreBundle/Twig/Extension/FormatterExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/FormatterExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/FormatterExtension.php");
    }
}
