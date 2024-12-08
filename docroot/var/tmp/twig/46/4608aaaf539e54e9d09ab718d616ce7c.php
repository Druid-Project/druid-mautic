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

/* @bundles/ConfigBundle/Tests/Controller/SysinfoControllerTest.php */
class __TwigTemplate_644eb76a13c432c6ac2c88d41a65b5d5 extends Template
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

namespace Mautic\\ConfigBundle\\Tests\\Controller;

use Mautic\\ConfigBundle\\Model\\SysinfoModel;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class SysinfoControllerTest extends MauticMysqlTestCase
{
    public function testDbInfoIsShown(): void
    {
        \$sysinfoModel = static::getContainer()->get(SysinfoModel::class);
        \\assert(\$sysinfoModel instanceof SysinfoModel);
        \$dbInfo = \$sysinfoModel->getDbInfo();

        // Request sysinfo page
        \$crawler = \$this->client->request(Request::METHOD_GET, '/s/sysinfo');
        Assert::assertTrue(\$this->client->getResponse()->isOk());

        \$dbVersion       = \$crawler->filterXPath(\"//td[@id='dbinfo-version']\")->text();
        \$dbDriver        = \$crawler->filterXPath(\"//td[@id='dbinfo-driver']\")->text();
        \$dbPlatform      = \$crawler->filterXPath(\"//td[@id='dbinfo-platform']\")->text();
        \$recommendations = \$crawler->filter('#recommendations');

        Assert::assertSame(\$dbInfo['version'], \$dbVersion);
        Assert::assertSame(\$dbInfo['driver'], \$dbDriver);
        Assert::assertSame(\$dbInfo['platform'], \$dbPlatform);
        Assert::assertGreaterThan(0, \$recommendations->count());
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
        return "@bundles/ConfigBundle/Tests/Controller/SysinfoControllerTest.php";
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
        return new Source("", "@bundles/ConfigBundle/Tests/Controller/SysinfoControllerTest.php", "/app/docroot/app/bundles/ConfigBundle/Tests/Controller/SysinfoControllerTest.php");
    }
}
