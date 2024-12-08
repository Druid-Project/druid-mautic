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

/* @bundles/PageBundle/Tests/Controller/PublicControllerFunctionalTest.php */
class __TwigTemplate_d64a99e70e6b2fd87da421e57e92ba83 extends Template
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
use PHPUnit\\Framework\\Assert;

class PublicControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testMtcEventCompanyXss(): void
    {
        \$this->client->request('POST', '/mtc/event', [
            'page_url' => 'https://example.com?Company=%3Cimg+src+onerror%3Dalert%28%27Company%27%29%3E',
        ]);
        \$clientResponse = \$this->client->getResponse();
        Assert::assertTrue(\$clientResponse->isOk());

        \$response = json_decode(\$clientResponse->getContent(), true);

        \$this->client->request('GET', sprintf('/s/contacts/view/%d', \$response['id']));
        \$clientResponse = \$this->client->getResponse();
        Assert::assertTrue(\$clientResponse->isOk());
        \$content = \$clientResponse->getContent();

        Assert::assertStringNotContainsString('<img src onerror=alert(\\'Company\\')>', \$content);

        \$crawler        = \$this->client->request('GET', sprintf('/s/contacts/edit/%d', \$response['id']));
        \$clientResponse = \$this->client->getResponse();
        Assert::assertTrue(\$clientResponse->isOk());
        \$content = \$clientResponse->getContent();

        Assert::assertStringNotContainsString('<img src onerror=alert(\\'Company\\')>', \$content);

        \$buttonCrawlerNode = \$crawler->selectButton('Save & Close');
        \$form              = \$buttonCrawlerNode->form();
        \$this->client->submit(\$form);
        \$clientResponse = \$this->client->getResponse();
        Assert::assertTrue(\$clientResponse->isOk());
        \$content = \$clientResponse->getContent();
        Assert::assertStringNotContainsString('<img src onerror=alert(\\'Company\\')>', \$content);
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
        return "@bundles/PageBundle/Tests/Controller/PublicControllerFunctionalTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Controller/PublicControllerFunctionalTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Controller/PublicControllerFunctionalTest.php");
    }
}
