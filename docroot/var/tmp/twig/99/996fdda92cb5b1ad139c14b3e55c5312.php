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

/* @bundles/AssetBundle/Controller/AjaxController.php */
class __TwigTemplate_81149ee4541674ea439504f49a155a47 extends Template
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

namespace Mautic\\AssetBundle\\Controller;

use Gaufrette\\Filesystem;
use Mautic\\AssetBundle\\AssetEvents;
use Mautic\\AssetBundle\\Event\\RemoteAssetBrowseEvent;
use Mautic\\AssetBundle\\Model\\AssetModel;
use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    public function categoryListAction(Request \$request): \\Symfony\\Component\\HttpFoundation\\JsonResponse
    {
        \$assetModel = \$this->getModel('asset');
        \\assert(\$assetModel instanceof AssetModel);
        \$filter     = InputHelper::clean(\$request->query->get('filter'));
        \$results    = \$assetModel->getLookupResults('category', \$filter, 10);
        \$dataArray  = [];
        foreach (\$results as \$r) {
            \$dataArray[] = [
                'label' => \$r['title'].\" ({\$r['id']})\",
                'value' => \$r['id'],
            ];
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * @throws \\Exception
     */
    public function fetchRemoteFilesAction(Request \$request): \\Symfony\\Component\\HttpFoundation\\JsonResponse
    {
        \$provider   = InputHelper::string(\$request->request->get('provider'));
        \$path       = InputHelper::string(\$request->request->get('path', ''));
        \$dispatcher = \$this->dispatcher;
        \$name       = AssetEvents::ASSET_ON_REMOTE_BROWSE;

        if (!\$dispatcher->hasListeners(\$name)) {
            return \$this->sendJsonResponse(['success' => 0]);
        }

        /** @var \\Mautic\\PluginBundle\\Helper\\IntegrationHelper \$integrationHelper */
        \$integrationHelper = \$this->factory->getHelper('integration');

        /** @var \\Mautic\\PluginBundle\\Integration\\AbstractIntegration \$integration */
        \$integration = \$integrationHelper->getIntegrationObject(\$provider);

        \$event = new RemoteAssetBrowseEvent(\$integration);

        \$dispatcher->dispatch(\$event, \$name);

        if (!\$adapter = \$event->getAdapter()) {
            return \$this->sendJsonResponse(['success' => 0]);
        }

        \$connector = new Filesystem(\$adapter);

        \$output = \$this->renderView(
            '@MauticAsset/Remote/list.html.twig',
            [
                'connector'   => \$connector,
                'integration' => \$integration,
                'items'       => \$connector->listKeys(\$path),
            ]
        );

        return \$this->sendJsonResponse(['success' => 1, 'output' => \$output]);
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
        return "@bundles/AssetBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/AssetBundle/Controller/AjaxController.php", "/app/docroot/app/bundles/AssetBundle/Controller/AjaxController.php");
    }
}
