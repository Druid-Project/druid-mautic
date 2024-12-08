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

/* @bundles/PageBundle/Tests/Controller/PreviewFunctionalTest.php */
class __TwigTemplate_86a0a4894de8efc92f29c649e998d87f extends Template
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

namespace Mautic\\PageBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\DynamicContentBundle\\Entity\\DynamicContent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Entity\\Page;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class PreviewFunctionalTest extends MauticMysqlTestCase
{
    public function testPreviewPage(): void
    {
        \$lead           = \$this->createLead();
        \$dynamicContent = \$this->createDynamicContent(\$lead);
        \$defaultContent = 'Default web content';
        \$page           = \$this->createPage(\$dynamicContent, \$defaultContent);

        \$this->em->flush();
        \$url = \"/page/preview/{\$page->getId()}\";

        // Anonymous visitor is not allowed to access preview
        \$this->client->request(Request::METHOD_GET, \$url);
        self::assertSame(Response::HTTP_FORBIDDEN, \$this->client->getResponse()->getStatusCode());

        \$this->loginUser('admin');

        // Admin user is allowed to access preview
        \$this->assertPageContent(\$url, \$defaultContent);

        // Check DWC replacement for the given lead
        \$this->assertPageContent(\"{\$url}?contactId={\$lead->getId()}\", \$dynamicContent->getContent());

        // Check there is no DWC replacement for a non-existent lead
        \$this->assertPageContent(\"{\$url}?contactId=987\", \$defaultContent);
    }

    private function assertPageContent(string \$url, string \$expectedContent): void
    {
        \$crawler = \$this->client->request(Request::METHOD_GET, \$url);
        self::assertSame(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode(), \$this->client->getResponse()->getContent());
        self::assertSame(\$expectedContent, \$crawler->text());
    }

    private function createPage(DynamicContent \$dynamicContent, string \$defaultContent): Page
    {
        \$page = new Page();
        \$page->setIsPublished(true);
        \$page->setDateAdded(new \\DateTime());
        \$page->setTitle('Preview settings test - main page');
        \$page->setAlias('page-main');
        \$page->setTemplate('Blank');
        \$page->setCustomHtml(sprintf('<div data-slot=\"dwc\" data-param-slot-name=\"%s\"><span>%s</span></div>', \$dynamicContent->getSlotName(), \$defaultContent));
        \$this->em->persist(\$page);

        return \$page;
    }

    private function createLead(): Lead
    {
        \$lead = new Lead();
        \$lead->setEmail('test@domain.tld');
        \$this->em->persist(\$lead);

        return \$lead;
    }

    private function createDynamicContent(Lead \$lead): DynamicContent
    {
        \$dynamicContent = new DynamicContent();
        \$dynamicContent->setName('Test DWC');
        \$dynamicContent->setIsCampaignBased(false);
        \$dynamicContent->setContent('DWC content');
        \$dynamicContent->setSlotName('test');
        \$dynamicContent->setFilters([
            [
                'glue'     => 'and',
                'field'    => 'email',
                'object'   => 'lead',
                'type'     => 'email',
                'filter'   => \$lead->getEmail(),
                'display'  => null,
                'operator' => '=',
            ],
        ]);
        \$this->em->persist(\$dynamicContent);

        return \$dynamicContent;
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
        return "@bundles/PageBundle/Tests/Controller/PreviewFunctionalTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Controller/PreviewFunctionalTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Controller/PreviewFunctionalTest.php");
    }
}
