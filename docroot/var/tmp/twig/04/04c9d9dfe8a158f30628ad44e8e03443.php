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

/* @bundles/PluginBundle/Tests/EventListener/LeadSubscriberTest.php */
class __TwigTemplate_d37a0f0af85b44b6f13b16f4b1da270e extends Template
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

namespace Mautic\\PluginBundle\\Tests\\EventListener;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\LeadEvent;
use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Entity\\IntegrationEntityRepository;
use Mautic\\PluginBundle\\Entity\\IntegrationRepository;
use Mautic\\PluginBundle\\EventListener\\LeadSubscriber;
use Mautic\\PluginBundle\\Model\\PluginModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class LeadSubscriberTest extends TestCase
{
    private LeadSubscriber \$subscriber;

    /**
     * @var LeadEvent|MockObject
     */
    private \$leadEvent;

    /**
     * @var IntegrationEntityRepository|MockObject
     */
    private \$integrationEntityRepository;

    /**
     * @var IntegrationRepository|MockObject
     */
    private \$integrationRepository;

    protected function setUp(): void
    {
        \$pluginModel                       = \$this->createMock(PluginModel::class);
        \$this->integrationRepository       = \$this->createMock(IntegrationRepository::class);
        \$this->leadEvent                   = \$this->createMock(LeadEvent::class);
        \$this->integrationEntityRepository = \$this->createMock(IntegrationEntityRepository::class);
        \$this->subscriber                  = new LeadSubscriber(
            \$pluginModel,
            \$this->integrationRepository
        );

        \$pluginModel->expects(\$this->once())
            ->method('getIntegrationEntityRepository')
            ->willReturn(\$this->integrationEntityRepository);

        \$this->leadEvent->expects(\$this->once())
            ->method('getLead')
            ->willReturn(new Lead());
    }

    public function testOnLeadSaveWithoutActiveIntegration(): void
    {
        \$this->integrationRepository->expects(\$this->once())
            ->method('getIntegrations')
            ->willReturn([]);

        \$this->integrationEntityRepository->expects(\$this->never())
            ->method('updateErrorLeads');

        \$this->subscriber->onLeadSave(\$this->leadEvent);
    }

    public function testOnLeadSaveWithActiveIntegration(): void
    {
        \$integration = new Integration();
        \$integration->setIsPublished(true);
        \$integration->setApiKeys(['key' => 'some']);
        \$integration->setSupportedFeatures(['push_lead']);

        \$this->integrationRepository->expects(\$this->once())
            ->method('getIntegrations')
            ->willReturn([\$integration]);

        \$this->integrationEntityRepository->expects(\$this->once())
            ->method('updateErrorLeads');

        \$this->subscriber->onLeadSave(\$this->leadEvent);
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
        return "@bundles/PluginBundle/Tests/EventListener/LeadSubscriberTest.php";
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
        return new Source("", "@bundles/PluginBundle/Tests/EventListener/LeadSubscriberTest.php", "/app/docroot/app/bundles/PluginBundle/Tests/EventListener/LeadSubscriberTest.php");
    }
}
