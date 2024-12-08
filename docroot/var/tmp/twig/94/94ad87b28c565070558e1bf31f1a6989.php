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

/* @bundles/InstallBundle/Tests/InstallFixtures/ORM/GrapeJsDataTest.php */
class __TwigTemplate_2b7c2a426b9bd821c6107b1288c4c2ee extends Template
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

namespace Mautic\\InstallBundle\\Tests\\InstallFixtures\\ORM;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\InstallBundle\\InstallFixtures\\ORM\\GrapesJsData;
use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Entity\\Plugin;
use PHPUnit\\Framework\\Assert;

class GrapeJsDataTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    private GrapesJsData \$fixture;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->fixture = new GrapesJsData();
        \$this->fixture->setContainer(static::getContainer());
    }

    public function testGetGroups(): void
    {
        Assert::assertSame(['group_install', 'group_mautic_install_data'], GrapesJsData::getGroups());
    }

    public function testGetOrder(): void
    {
        Assert::assertSame(1, \$this->fixture->getOrder());
    }

    public function testLoad(): void
    {
        \$findOneByCriteria = [
            'name'        => 'GrapesJS Builder',
            'description' => 'GrapesJS Builder with MJML support for Mautic',
            'version'     => '1.0.0',
            'author'      => 'Mautic Community',
            'bundle'      => 'GrapesJsBuilderBundle',
        ];
        \$plugin = \$this->em->getRepository(Plugin::class)->findOneBy(\$findOneByCriteria);
        self::assertNull(\$plugin);

        \$this->fixture->load(\$this->em);

        \$plugin = \$this->em->getRepository(Plugin::class)->findOneBy(\$findOneByCriteria);
        self::assertInstanceOf(Plugin::class, \$plugin);

        \$integration = \$this->em->getRepository(Integration::class)->findOneBy(
            [
                'isPublished' => true,
                'name'        => 'GrapesJsBuilder',
                'plugin'      => \$plugin,
            ]
        );
        self::assertInstanceOf(Integration::class, \$integration);
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
        return "@bundles/InstallBundle/Tests/InstallFixtures/ORM/GrapeJsDataTest.php";
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
        return new Source("", "@bundles/InstallBundle/Tests/InstallFixtures/ORM/GrapeJsDataTest.php", "/app/docroot/app/bundles/InstallBundle/Tests/InstallFixtures/ORM/GrapeJsDataTest.php");
    }
}
