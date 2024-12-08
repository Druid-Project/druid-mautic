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

/* @bundles/LeadBundle/Twig/Extension/FormFieldExtension.php */
class __TwigTemplate_2945e4273b3781c54ff07628ed9fa6e3 extends Template
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

namespace Mautic\\LeadBundle\\Twig\\Extension;

use Mautic\\LeadBundle\\Helper\\FormFieldHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

final class FormFieldExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('leadFieldCountryChoices', [FormFieldHelper::class, 'getCountryChoices']),
            new TwigFunction('leadFieldRegionChoices', [FormFieldHelper::class, 'getRegionChoices']),
            new TwigFunction('leadFieldTimezonesChoices', [FormFieldHelper::class, 'getTimezonesChoices']),
            new TwigFunction('leadFieldLocaleChoices', [FormFieldHelper::class, 'getLocaleChoices']),
            new TwigFunction('leadFormFieldParseListForChoices', [FormFieldHelper::class, 'parseListForChoices']),
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
        return "@bundles/LeadBundle/Twig/Extension/FormFieldExtension.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Extension/FormFieldExtension.php", "/app/docroot/app/bundles/LeadBundle/Twig/Extension/FormFieldExtension.php");
    }
}
