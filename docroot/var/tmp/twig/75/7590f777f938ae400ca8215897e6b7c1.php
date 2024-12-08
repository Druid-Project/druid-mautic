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

/* @bundles/LeadBundle/Form/Type/FilterPropertiesType.php */
class __TwigTemplate_fc188793f4663671c368724667142cb8 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * This form is filled with the LeadEvents::ADJUST_FILTER_FORM_TYPE_FOR_FIELD subscribers.
 *
 * @extends AbstractType<mixed>
 */
class FilterPropertiesType extends AbstractType
{
    public function configureOptions(OptionsResolver \$resolver): void
    {
        // This form is loaded via AJAX as part of another form.
        // Disable CSRF protection to avoid validation errors with unexpected fileds.
        \$resolver->setDefaults(['csrf_protection' => false]);
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
        return "@bundles/LeadBundle/Form/Type/FilterPropertiesType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/FilterPropertiesType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/FilterPropertiesType.php");
    }
}
