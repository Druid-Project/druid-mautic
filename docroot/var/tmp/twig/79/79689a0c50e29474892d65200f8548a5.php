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

/* @bundles/NotificationBundle/Tests/NotificationTrait.php */
class __TwigTemplate_2ecc831ff4bf9bc3e2a9933ce4d35a4e extends Template
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

namespace Mautic\\NotificationBundle\\Tests;

use Doctrine\\ORM\\EntityManagerInterface;
use GuzzleHttp\\Handler\\MockHandler;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\NotificationBundle\\Entity\\Notification;
use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

trait NotificationTrait
{
    private MockHandler \$transportMock;

    private function getMockHandler(ContainerInterface \$container): MockHandler
    {
        return \$container->get(MockHandler::class);
    }

    private function createNotification(EntityManagerInterface \$em): Notification
    {
        \$notification = new Notification();
        \$notification->setName('Name 1');
        \$notification->setHeading('Heading 1');
        \$notification->setMessage('Message 1');
        \$em->persist(\$notification);

        return \$notification;
    }

    private function createCampaign(EntityManagerInterface \$em): Campaign
    {
        \$campaign = new Campaign();
        \$campaign->setName('Notification');
        \$em->persist(\$campaign);

        return \$campaign;
    }

    private function setupIntegration(ContainerInterface \$container, EntityManagerInterface \$em, string \$apiId, string \$restApiId): void
    {
        /** @var AbstractIntegration \$integration */
        \$integration = \$container->get('mautic.helper.integration')
            ->getIntegrationObject('OneSignal');
        \$integrationSettings = \$integration->getIntegrationSettings();
        \$integrationSettings->setIsPublished(true);
        \$integration->encryptAndSetApiKeys([
            'app_id'       => \$apiId,
            'rest_api_key' => \$restApiId,
        ], \$integrationSettings);
        \$em->persist(\$integrationSettings);
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
        return "@bundles/NotificationBundle/Tests/NotificationTrait.php";
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
        return new Source("", "@bundles/NotificationBundle/Tests/NotificationTrait.php", "/app/docroot/app/bundles/NotificationBundle/Tests/NotificationTrait.php");
    }
}
