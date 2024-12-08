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

/* @bundles/CoreBundle/Tests/Functional/Controller/JsControllerTest.php */
class __TwigTemplate_138b727d20bc228e5e0ee765b863b332 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * This test is breaking other tests, so running it in a separate process.
 *
 * @runTestsInSeparateProcesses
 *
 * @preserveGlobalState disabled
 */
final class JsControllerTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['google_analytics_id']                   = 'G-F3825DS9CD';
        \$this->configParams['google_analytics_trackingpage_enabled'] = true;
        \$this->configParams['google_analytics_anonymize_ip']         = 'testIndexActionRendersSuccessfullyWithAnonymizeIp' === \$this->getName();
        parent::setUp();
    }

    public function testIndexActionRendersSuccessfully(): void
    {
        \$this->client->request('GET', '/mtc.js');
        Assert::assertSame(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());
        Assert::assertStringContainsString('https://www.googletagmanager.com/gtag/js?id=G-F3825DS9CD', \$this->client->getResponse()->getContent());
        Assert::assertStringContainsString('gtag(\\'config\\',\\'G-F3825DS9CD\\')', \$this->client->getResponse()->getContent());
    }

    public function testIndexActionRendersSuccessfullyWithAnonymizeIp(): void
    {
        \$this->client->request('GET', '/mtc.js');
        Assert::assertSame(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());
        Assert::assertStringContainsString('https://www.googletagmanager.com/gtag/js?id=G-F3825DS9CD', \$this->client->getResponse()->getContent());
        Assert::assertStringContainsString('gtag(\\'config\\',\\'G-F3825DS9CD\\',{\"anonymize_ip\":!0})', \$this->client->getResponse()->getContent());
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
        return "@bundles/CoreBundle/Tests/Functional/Controller/JsControllerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Controller/JsControllerTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Controller/JsControllerTest.php");
    }
}
