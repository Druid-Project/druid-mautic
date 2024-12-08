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

/* @bundles/LeadBundle/Field/DTO/CustomFieldObject.php */
class __TwigTemplate_4605a51cce02de95d54577a9d30102bd extends Template
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

namespace Mautic\\LeadBundle\\Field\\DTO;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Exception\\InvalidObjectTypeException;

class CustomFieldObject
{
    private array \$objects = [
        'lead'    => 'leads',
        'company' => 'companies',
    ];

    private LeadField \$leadField;

    /**
     * @throws InvalidObjectTypeException
     */
    public function __construct(LeadField \$leadField)
    {
        \$leadFieldObject = \$leadField->getObject();
        if (!isset(\$this->objects[\$leadFieldObject])) {
            throw new InvalidObjectTypeException(\$leadFieldObject.' has no associated object.');
        }

        \$this->leadField = \$leadField;
    }

    public function getObject(): string
    {
        return \$this->objects[\$this->leadField->getObject()];
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
        return "@bundles/LeadBundle/Field/DTO/CustomFieldObject.php";
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
        return new Source("", "@bundles/LeadBundle/Field/DTO/CustomFieldObject.php", "/app/docroot/app/bundles/LeadBundle/Field/DTO/CustomFieldObject.php");
    }
}
