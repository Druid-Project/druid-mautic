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

/* @bundles/LeadBundle/Field/LeadFieldSaver.php */
class __TwigTemplate_dbce0253828cfe930e05d6f723ae135a extends Template
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

namespace Mautic\\LeadBundle\\Field;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldSaveDispatcher;

class LeadFieldSaver
{
    public function __construct(
        private LeadFieldRepository \$leadFieldRepository,
        private FieldSaveDispatcher \$fieldSaveDispatcher
    ) {
    }

    public function saveLeadFieldEntity(LeadField \$leadField, bool \$isNew): void
    {
        try {
            \$this->fieldSaveDispatcher->dispatchPreSaveEvent(\$leadField, \$isNew);
        } catch (NoListenerException) {
        }

        \$this->leadFieldRepository->saveEntity(\$leadField);

        try {
            \$this->fieldSaveDispatcher->dispatchPostSaveEvent(\$leadField, \$isNew);
        } catch (NoListenerException) {
        }
    }

    public function saveLeadFieldEntityWithoutColumnCreated(LeadField \$leadField): void
    {
        \$leadField->setColumnIsNotCreated();

        \$this->saveLeadFieldEntity(\$leadField, true);
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
        return "@bundles/LeadBundle/Field/LeadFieldSaver.php";
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
        return new Source("", "@bundles/LeadBundle/Field/LeadFieldSaver.php", "/app/docroot/app/bundles/LeadBundle/Field/LeadFieldSaver.php");
    }
}
