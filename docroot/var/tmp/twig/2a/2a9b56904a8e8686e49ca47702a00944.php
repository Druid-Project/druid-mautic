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

/* @bundles/FormBundle/Collector/AlreadyMappedFieldCollectorInterface.php */
class __TwigTemplate_0e6bddbfb4eeceba3b588883b4a2860a extends Template
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

namespace Mautic\\FormBundle\\Collector;

interface AlreadyMappedFieldCollectorInterface
{
    /**
     * @param string \$formId can be a string hash for new forms
     *
     * @return mixed[]
     */
    public function getFields(string \$formId, string \$object): array;

    public function addField(string \$formId, string \$object, string \$fieldKey): void;

    public function removeField(string \$formId, string \$object, string \$fieldKey): void;

    /**
     * Removes all mapped fields for the specified form.
     */
    public function removeAllForForm(string \$formId): void;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/Collector/AlreadyMappedFieldCollectorInterface.php";
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
        return new Source("", "@bundles/FormBundle/Collector/AlreadyMappedFieldCollectorInterface.php", "/app/docroot/app/bundles/FormBundle/Collector/AlreadyMappedFieldCollectorInterface.php");
    }
}
