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

/* @bundles/IntegrationsBundle/Controller/FieldPaginationController.php */
class __TwigTemplate_1a0037acc54941e496ac45d8c8444a2b extends Template
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

namespace Mautic\\IntegrationsBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationSyncSettingsObjectFieldMappingType;
use Mautic\\IntegrationsBundle\\Helper\\ConfigIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Helper\\FieldFilterHelper;
use Mautic\\IntegrationsBundle\\Helper\\FieldMergerHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class FieldPaginationController extends CommonController
{
    /**
     * @return Response
     */
    public function paginateAction(
        Request \$request,
        FormFactoryInterface \$formFactory,
        ConfigIntegrationsHelper \$integrationsHelper,
        string \$integration,
        string \$object,
        int \$page
    ) {
        // Check ACL
        if (!\$this->security->isGranted('plugin:plugins:manage')) {
            return \$this->accessDenied();
        }

        // Find the integration
        try {
            /** @var ConfigFormSyncInterface \$integrationObject */
            \$integrationObject        = \$integrationsHelper->getIntegration(\$integration);
            \$integrationConfiguration = \$integrationObject->getIntegrationConfiguration();
        } catch (IntegrationNotFoundException) {
            return \$this->notFound();
        }

        \$keyword         = \$request->get('keyword');
        \$featureSettings = \$integrationConfiguration->getFeatureSettings();
        \$currentFields   = \$this->getFields(\$request, \$integrationObject, \$featureSettings, \$object);

        \$fieldFilterHelper = new FieldFilterHelper(\$integrationObject);
        if (\$keyword) {
            \$fieldFilterHelper->filterFieldsByKeyword(\$object, \$keyword, \$page);
        } else {
            \$fieldFilterHelper->filterFieldsByPage(\$object, \$page);
        }

        // Create the form
        \$form = \$formFactory->create(
            IntegrationSyncSettingsObjectFieldMappingType::class,
            \$currentFields,
            [
                'integrationFields' => \$fieldFilterHelper->getFilteredFields(),
                'page'              => \$page,
                'keyword'           => \$keyword,
                'totalFieldCount'   => \$fieldFilterHelper->getTotalFieldCount(),
                'object'            => \$object,
                'integrationObject' => \$integrationObject,
                'csrf_protection'   => false,
            ]
        );

        \$html = \$this->render(
            '@Integrations/Config/field_mapping.html.twig',
            [
                'form'        => \$form->createView(),
                'integration' => \$integration,
                'object'      => \$object,
                'page'        => \$page,
            ]
        )->getContent();

        \$prefix   = \"integration_config[featureSettings][sync][fieldMappings][\$object]\";
        \$idPrefix = str_replace(['][', '[', ']'], '_', \$prefix);
        if (str_ends_with(\$idPrefix, '_')) {
            \$idPrefix = substr(\$idPrefix, 0, -1);
        }

        \$formType = 'integration_sync_settings_object_field_mapping';
        \$html     = preg_replace('/'.\$formType.'\\[(.*?)\\]/', \$prefix.'[\$1]', \$html);
        \$html     = str_replace(\$formType, \$idPrefix, \$html);

        return new JsonResponse(
            [
                'success' => 1,
                'html'    => \$html,
            ]
        );
    }

    private function getFields(Request \$request, ConfigFormSyncInterface \$integrationObject, array \$featureSettings, string \$object): array
    {
        \$fields = \$featureSettings['sync']['fieldMappings'] ?? [];

        if (!isset(\$fields[\$object])) {
            \$fields[\$object] = [];
        }

        // Pull those changed from session
        \$session       = \$request->getSession();
        \$sessionFields = \$session->get(sprintf('%s-fields', \$integrationObject->getName()), []);

        if (!isset(\$sessionFields[\$object])) {
            return \$fields[\$object];
        }

        \$fieldMerger = new FieldMergerHelper(\$integrationObject, \$fields);
        \$fieldMerger->mergeSyncFieldMapping(\$object, \$sessionFields[\$object]);

        return \$fieldMerger->getFieldMappings()[\$object];
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
        return "@bundles/IntegrationsBundle/Controller/FieldPaginationController.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Controller/FieldPaginationController.php", "/app/docroot/app/bundles/IntegrationsBundle/Controller/FieldPaginationController.php");
    }
}
