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

/* @bundles/LeadBundle/Tests/Controller/TimelineControllerTest.php */
class __TwigTemplate_d2d5e126e890d7e6b4c233ce3ffcddd1 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\CoreBundle\\Tests\\Functional\\CreateTestEntitiesTrait;
use Symfony\\Component\\HttpFoundation\\Response;

final class TimelineControllerTest extends MauticMysqlTestCase
{
    use CreateTestEntitiesTrait;

    public function testIndexActionsIsSuccessful(): void
    {
        \$contact = \$this->createLead('TestFirstName');
        \$this->em->flush();

        \$crawler = \$this->client->request('GET', '/s/contacts/timeline/'.\$contact->getId());
        \$this->assertEquals(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());
    }

    public function testFilterCaseInsensitive(): void
    {
        \$contact = \$this->createLead('TestFirstName');
        \$segment = \$this->createSegment('TEST', []);
        \$this->createListLead(\$segment, \$contact);
        \$this->em->flush();
        \$this->createLeadEventLogEntry(\$contact, 'lead', 'segment', 'added', \$segment->getId(), [
            'object_description' => \$segment->getName(),
        ]);
        \$this->em->flush();

        \$crawler = \$this->client->request('POST', '/s/contacts/timeline/'.\$contact->getId(), [
            'search' => 'test',
            'leadId' => \$contact->getId(),
        ]);

        \$this->assertStringContainsString('Contact added to segment, TEST', \$this->client->getResponse()->getContent());
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
        return "@bundles/LeadBundle/Tests/Controller/TimelineControllerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/TimelineControllerTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/TimelineControllerTest.php");
    }
}
