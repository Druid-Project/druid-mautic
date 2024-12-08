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

/* @bundles/AssetBundle/Tests/DataFixtures/LoadAssetDataTest.php */
class __TwigTemplate_e2370fc48ee3261dcc1bde089e3e8b53 extends Template
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

namespace Mautic\\AssetBundle\\Tests\\DataFixtures;

use Mautic\\AssetBundle\\DataFixtures\\ORM\\LoadAssetData;
use Mautic\\AssetBundle\\Entity\\Asset;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class LoadAssetDataTest extends MauticMysqlTestCase
{
    public function testLoadFixtures(): void
    {
        \$this->loadFixtures([LoadAssetData::class]);
        \$asset = \$this->em->getRepository(Asset::class)->findOneBy(
            ['title' => '@TOCHANGE: Asset1 Title'],
            ['id' => 'DESC']
        );
        self::assertInstanceOf(Asset::class, \$asset);
        self::assertEquals('asset1', \$asset->getAlias());
        self::assertEquals('@TOCHANGE: Asset1 Original File Name', \$asset->getOriginalFileName());
        self::assertEquals('fdb8e28357b02d12d068de3e5661832e21bc08ec.doc', \$asset->getPath());
        self::assertEquals(1, \$asset->getDownloadCount());
        self::assertEquals(1, \$asset->getUniqueDownloadCount());
        self::assertEquals(1, \$asset->getRevision());
        self::assertEquals('en', \$asset->getLanguage());
    }

    public function testLoadFixturesOrder(): void
    {
        \$loadAssetData = new LoadAssetData();
        self::assertEquals(10, \$loadAssetData->getOrder());
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
        return "@bundles/AssetBundle/Tests/DataFixtures/LoadAssetDataTest.php";
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
        return new Source("", "@bundles/AssetBundle/Tests/DataFixtures/LoadAssetDataTest.php", "/app/docroot/app/bundles/AssetBundle/Tests/DataFixtures/LoadAssetDataTest.php");
    }
}
