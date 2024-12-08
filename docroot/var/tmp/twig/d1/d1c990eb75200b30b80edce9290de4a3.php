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

/* @bundles/PageBundle/Tests/Controller/VisitPageWitIpAnonymizationOnFunctionalTest.php */
class __TwigTemplate_cf10be4bec5aa5049f9d15f1d57d9a8d extends Template
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
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Entity\\HitRepository;
use Mautic\\PageBundle\\Entity\\Page;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class VisitPageWitIpAnonymizationOnFunctionalTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['anonymize_ip'] = true;

        parent::setUp();
    }

    public function testPageWithIpAnonymizationOn(): void
    {
        // create landing page
        \$pageObject = new Page();
        \$pageObject->setIsPublished(true);
        \$pageObject->setDateAdded(new \\DateTime());
        \$pageObject->setTitle('Page:Page:Anonymization:On');
        \$pageObject->setAlias('page-page-anonymizaiton-on');
        \$pageObject->setTemplate('Blank');
        \$pageObject->setCustomHtml('Test Html');
        \$pageObject->setLanguage('en');
        \$this->em->persist(\$pageObject);
        \$this->em->flush();

        // Logout and visit the landing page.
        \$this->client->request(Request::METHOD_GET, '/s/logout');
        \$pageContent = \$this->client->request(Request::METHOD_GET, '/page-page-anonymizaiton-on');

        Assert::assertTrue(\$this->client->getResponse()->isOk(), \$pageContent->text());
        Assert::assertStringContainsString('Test Html', \$pageContent->text());

        /** @var HitRepository \$hitRepository */
        \$hitRepository = \$this->em->getRepository(Hit::class);

        /** @var Hit[] \$hits */
        \$hits = \$hitRepository->findBy(['page' => \$pageObject->getId()]);
        Assert::assertCount(1, \$hits);
        Assert::assertSame('*.*.*.*', \$hits[0]->getIpAddress()->getIpAddress());
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
        return "@bundles/PageBundle/Tests/Controller/VisitPageWitIpAnonymizationOnFunctionalTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Controller/VisitPageWitIpAnonymizationOnFunctionalTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Controller/VisitPageWitIpAnonymizationOnFunctionalTest.php");
    }
}
