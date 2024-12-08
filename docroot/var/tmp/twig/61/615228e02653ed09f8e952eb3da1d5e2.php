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

/* @bundles/LeadBundle/Tests/Controller/NoteControllerTest.php */
class __TwigTemplate_c36f4199a6a65ce0a83b6c9cbbb9cc7f extends Template
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
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\HttpFoundation\\Response;

final class NoteControllerTest extends MauticMysqlTestCase
{
    protected function beforeBeginTransaction(): void
    {
        \$this->resetAutoincrement([
            'leads',
            'companies',
            'campaigns',
            'categories',
            'lead_lists',
        ]);
    }

    /**
     * Quick smoke test to ensure the route is successful.
     */
    public function testIndexActionsIsSuccessful(): void
    {
        \$contact = (new Lead())->setFirstname('Test');
        static::getContainer()->get('mautic.lead.model.lead')->saveEntity(\$contact);

        \$crawler = \$this->client->request('GET', '/s/contacts/notes/'.\$contact->getId());
        \$this->assertEquals(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());
    }

    /**
     * Quick smoke test to ensure the route is successful.
     */
    public function testNewActionsIsSuccessful(): void
    {
        \$contact = (new Lead())->setFirstname('Test');
        static::getContainer()->get('mautic.lead.model.lead')->saveEntity(\$contact);

        \$crawler = \$this->client->request('GET', '/s/contacts/notes/'.\$contact->getId().'/new');
        \$this->assertEquals(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());
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
        return "@bundles/LeadBundle/Tests/Controller/NoteControllerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/NoteControllerTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/NoteControllerTest.php");
    }
}
