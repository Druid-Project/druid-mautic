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

/* @bundles/IntegrationsBundle/Tests/Functional/EventListener/UIContactIntegrationsTabSubscriberTest.php */
class __TwigTemplate_8abb7b0fe49fa0edfb06684eb298ae72 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Functional\\EventListener;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

final class UIContactIntegrationsTabSubscriberTest extends MauticMysqlTestCase
{
    public function testIntegrationMappingIsShown(): void
    {
        \$contact = new Lead();
        \$this->em->persist(\$contact);
        \$this->em->flush();

        \$objectMapping = new ObjectMapping();
        \$objectMapping->setIntegration('testintegration');
        \$objectMapping->setIntegrationObjectName('testobject');
        \$objectMapping->setIntegrationObjectId('testid');
        \$objectMapping->setInternalObjectName(Contact::NAME);
        \$objectMapping->setInternalObjectId(\$contact->getId());

        \$this->em->persist(\$objectMapping);
        \$this->em->flush();
        \$this->em->clear();

        \$this->client->request('GET', \"/s/contacts/view/{\$contact->getId()}\");
        Assert::assertTrue(\$this->client->getResponse()->isOk(), \$this->client->getResponse()->getContent());
        Assert::assertStringContainsString('<dt>Object</dt><dd>testobject</dd>', \$this->client->getResponse()->getContent());
        Assert::assertStringContainsString('<dt>Object ID</dt><dd>testid</dd>', \$this->client->getResponse()->getContent());
        Assert::assertStringContainsString('testintegration', \$this->client->getResponse()->getContent());
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
        return "@bundles/IntegrationsBundle/Tests/Functional/EventListener/UIContactIntegrationsTabSubscriberTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Functional/EventListener/UIContactIntegrationsTabSubscriberTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Functional/EventListener/UIContactIntegrationsTabSubscriberTest.php");
    }
}
