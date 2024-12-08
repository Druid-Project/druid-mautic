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

/* @bundles/LeadBundle/Field/BackgroundService.php */
class __TwigTemplate_e6891b62b1b8db6b1d9fefcd45369590 extends Template
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

use Doctrine\\DBAL\\Exception\\DriverException;
use Doctrine\\DBAL\\Schema\\SchemaException;
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldColumnBackgroundJobDispatcher;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnUpdateException;
use Mautic\\LeadBundle\\Field\\Exception\\ColumnAlreadyCreatedException;
use Mautic\\LeadBundle\\Field\\Exception\\CustomFieldLimitException;
use Mautic\\LeadBundle\\Field\\Exception\\LeadFieldWasNotFoundException;
use Mautic\\LeadBundle\\Field\\Notification\\CustomFieldNotification;
use Mautic\\LeadBundle\\Model\\FieldModel;

class BackgroundService
{
    public function __construct(
        private FieldModel \$fieldModel,
        private CustomFieldColumn \$customFieldColumn,
        private LeadFieldSaver \$leadFieldSaver,
        private FieldColumnBackgroundJobDispatcher \$fieldColumnBackgroundJobDispatcher,
        private CustomFieldNotification \$customFieldNotification
    ) {
    }

    /**
     * @throws AbortColumnCreateException
     * @throws ColumnAlreadyCreatedException
     * @throws CustomFieldLimitException
     * @throws LeadFieldWasNotFoundException
     * @throws \\Doctrine\\DBAL\\Exception
     * @throws DriverException
     * @throws SchemaException
     * @throws \\Mautic\\CoreBundle\\Exception\\SchemaException
     */
    public function addColumn(int \$leadFieldId, ?int \$userId): void
    {
        \$leadField = \$this->fieldModel->getEntity(\$leadFieldId);
        if (null === \$leadField) {
            throw new LeadFieldWasNotFoundException('LeadField entity was not found');
        }

        if (!\$leadField->getColumnIsNotCreated()) {
            \$this->customFieldNotification->customFieldWasCreated(\$leadField, \$userId);
            throw new ColumnAlreadyCreatedException('Column was already created');
        }

        try {
            \$this->fieldColumnBackgroundJobDispatcher->dispatchPreAddColumnEvent(\$leadField);
        } catch (NoListenerException \$e) {
        }

        try {
            \$this->customFieldColumn->processCreateLeadColumn(\$leadField, false);
        } catch (DriverException|SchemaException|\\Mautic\\CoreBundle\\Exception\\SchemaException \$e) {
            \$this->customFieldNotification->customFieldCannotBeCreated(\$leadField, \$userId);
            throw \$e;
        } catch (CustomFieldLimitException \$e) {
            \$this->customFieldNotification->customFieldLimitWasHit(\$leadField, \$userId);
            throw \$e;
        }

        \$leadField->setColumnWasCreated();
        \$this->leadFieldSaver->saveLeadFieldEntity(\$leadField, false);

        \$this->customFieldNotification->customFieldWasCreated(\$leadField, \$userId);
    }

    /**
     * @throws AbortColumnUpdateException
     * @throws DriverException
     * @throws LeadFieldWasNotFoundException
     * @throws SchemaException
     * @throws \\Mautic\\CoreBundle\\Exception\\SchemaException
     */
    public function updateColumn(int \$leadFieldId, int \$userId): void
    {
        \$leadField = \$this->fieldModel->getEntity(\$leadFieldId);
        if (null === \$leadField) {
            throw new LeadFieldWasNotFoundException('LeadField entity was not found');
        }

        try {
            \$this->fieldColumnBackgroundJobDispatcher->dispatchPreUpdateColumnEvent(\$leadField);
        } catch (NoListenerException) {
        }

        \$this->customFieldColumn->processUpdateLeadColumn(\$leadField);
        \$this->customFieldNotification->customFieldWasUpdated(\$leadField, \$userId);
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
        return "@bundles/LeadBundle/Field/BackgroundService.php";
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
        return new Source("", "@bundles/LeadBundle/Field/BackgroundService.php", "/app/docroot/app/bundles/LeadBundle/Field/BackgroundService.php");
    }
}
