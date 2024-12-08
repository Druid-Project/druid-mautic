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

/* @bundles/LeadBundle/Provider/FormAdjustmentsProviderInterface.php */
class __TwigTemplate_723bccbc28b27f05adf11f6f5b05bcac extends Template
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

namespace Mautic\\LeadBundle\\Provider;

use Symfony\\Component\\Form\\FormInterface;

interface FormAdjustmentsProviderInterface
{
    /**
     * Allows subscribers to adjust a form so new fields can be added, deleted or modified.
     *
     * @param FormInterface<FormInterface<mixed>> \$form
     * @param mixed[]                             \$fieldDetails
     *
     * @return FormInterface<FormInterface<mixed>>
     */
    public function adjustForm(FormInterface \$form, string \$fieldAlias, string \$fieldObject, string \$operator, array \$fieldDetails): FormInterface;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Provider/FormAdjustmentsProviderInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/FormAdjustmentsProviderInterface.php", "/app/docroot/app/bundles/LeadBundle/Provider/FormAdjustmentsProviderInterface.php");
    }
}
