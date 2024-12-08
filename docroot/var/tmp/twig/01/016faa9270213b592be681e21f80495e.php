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

/* @bundles/PluginBundle/Model/IntegrationEntityModel.php */
class __TwigTemplate_6d9471eb199b21aa5afbfbeee19f4e89 extends Template
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

namespace Mautic\\PluginBundle\\Model;

use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\PluginBundle\\Entity\\IntegrationEntity;
use Mautic\\PluginBundle\\Integration\\IntegrationObject;

/**
 * @extends FormModel<IntegrationEntity>
 */
class IntegrationEntityModel extends FormModel
{
    public function getIntegrationEntityRepository()
    {
        return \$this->em->getRepository(IntegrationEntity::class);
    }

    public function logDataSync(IntegrationObject \$integrationObject): void
    {
    }

    public function getSyncedRecords(IntegrationObject \$integrationObject, \$integrationName, \$recordList, \$internalEntityId = null)
    {
        if (!\$formattedRecords = \$this->formatListOfContacts(\$recordList)) {
            return [];
        }

        \$integrationEntityRepo = \$this->getIntegrationEntityRepository();

        return \$integrationEntityRepo->getIntegrationsEntityId(
            \$integrationName,
            \$integrationObject->getType(),
            \$integrationObject->getInternalType(),
            \$internalEntityId,
            null,
            null,
            false,
            0,
            0,
            \$formattedRecords
        );
    }

    /**
     * @return array<mixed, array<'id', mixed>>
     */
    public function getRecordList(\$integrationObject): array
    {
        \$recordList = [];

        foreach (\$integrationObject->getRecords() as \$record) {
            \$recordList[\$record['Id']] = [
                'id' => \$record['Id'],
            ];
        }

        return \$recordList;
    }

    public function formatListOfContacts(\$recordList): ?string
    {
        if (empty(\$recordList)) {
            return null;
        }

        \$csList = is_array(\$recordList) ? implode('\", \"', array_keys(\$recordList)) : \$recordList;

        return '\"'.\$csList.'\"';
    }

    public function getMauticContactsById(\$mauticContactIds, \$integrationName, \$internalObject)
    {
        if (!\$formattedRecords = \$this->formatListOfContacts(\$mauticContactIds)) {
            return [];
        }
        \$integrationEntityRepo = \$this->getIntegrationEntityRepository();

        return \$integrationEntityRepo->getIntegrationsEntityId(
            \$integrationName,
            null,
            \$internalObject,
            null,
            null,
            null,
            false,
            0,
            0,
            \$formattedRecords
        );
    }

    /**
     * @param int \$id
     *
     * @return IntegrationEntity|null
     */
    public function getEntityByIdAndSetSyncDate(\$id, \\DateTime \$dateTime)
    {
        \$entity = \$this->getIntegrationEntityRepository()->find(\$id);
        if (\$entity) {
            \$entity->setLastSyncDate(\$dateTime);
        }

        return \$entity;
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
        return "@bundles/PluginBundle/Model/IntegrationEntityModel.php";
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
        return new Source("", "@bundles/PluginBundle/Model/IntegrationEntityModel.php", "/app/docroot/app/bundles/PluginBundle/Model/IntegrationEntityModel.php");
    }
}
