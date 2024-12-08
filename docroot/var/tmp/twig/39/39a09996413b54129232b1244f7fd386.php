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

/* @bundles/AssetBundle/Tests/Controller/AssetDetailFunctionalTest.php */
class __TwigTemplate_d93f701c06ae219062466530711e5cb5 extends Template
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

namespace Mautic\\AssetBundle\\Tests\\Controller;

use Mautic\\AssetBundle\\Entity\\Asset;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class AssetDetailFunctionalTest extends MauticMysqlTestCase
{
    public function testLeadViewPreventsXSS(): void
    {
        \$title      = 'aaa\" onerror=alert(1) a=\"';
        \$asset      = new Asset();
        \$asset->setTitle(\$title);
        \$asset->setAlias('dummy-alias');
        \$asset->setStorageLocation('local');
        \$asset->setPath('broken-image.jpg');
        \$asset->setExtension('jpg');
        \$this->em->persist(\$asset);
        \$this->em->flush();
        \$this->em->detach(\$asset);

        \$crawler   = \$this->client->request('GET', sprintf('/s/assets/view/%d', \$asset->getId()));
        \$imageTag  = \$crawler->filter('.tab-content.preview-detail img');

        \$onError  = \$imageTag->attr('onerror');
        \$altProp  = \$imageTag->attr('alt');

        Assert::assertNull(\$onError);
        Assert::assertSame(\$title, \$altProp);
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
        return "@bundles/AssetBundle/Tests/Controller/AssetDetailFunctionalTest.php";
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
        return new Source("", "@bundles/AssetBundle/Tests/Controller/AssetDetailFunctionalTest.php", "/app/docroot/app/bundles/AssetBundle/Tests/Controller/AssetDetailFunctionalTest.php");
    }
}
