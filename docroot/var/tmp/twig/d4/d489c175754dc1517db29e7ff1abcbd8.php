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

/* @bundles/InstallBundle/InstallFixtures/ORM/GrapesJsData.php */
class __TwigTemplate_f39b479c423d1a0733a9631131f8fd92 extends Template
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

namespace Mautic\\InstallBundle\\InstallFixtures\\ORM;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Entity\\Plugin;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class GrapesJsData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface, FixtureGroupInterface
{
    private ?ContainerInterface \$container = null;

    public static function getGroups(): array
    {
        return ['group_install', 'group_mautic_install_data'];
    }

    public function setContainer(ContainerInterface \$container = null): void
    {
        \$this->container = \$container;
    }

    public function load(ObjectManager \$manager): void
    {
        \$applicationDir           = \$this->container->get('kernel')->getApplicationDir();
        \$grapeJsBuilderConfigPath = \$applicationDir.'/plugins/GrapesJsBuilderBundle/Config/config.php';

        if (!file_exists(\$grapeJsBuilderConfigPath)) {
            return;
        }

        \$parameters = include \$grapeJsBuilderConfigPath;

        if (!is_array(\$parameters)) {
            return;
        }

        \$plugin = new Plugin();
        \$plugin->setName(\$parameters['name']);
        \$plugin->setDescription(\$parameters['description']);
        \$plugin->setVersion(\$parameters['version']);
        \$plugin->setAuthor(\$parameters['author']);
        \$plugin->setBundle('GrapesJsBuilderBundle');
        \$manager->persist(\$plugin);

        \$integration = new Integration();
        \$integration->setIsPublished(true);
        \$integration->setName('GrapesJsBuilder');
        \$integration->setPlugin(\$plugin);
        \$manager->persist(\$integration);

        \$manager->flush();
    }

    public function getOrder(): int
    {
        return 1;
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
        return "@bundles/InstallBundle/InstallFixtures/ORM/GrapesJsData.php";
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
        return new Source("", "@bundles/InstallBundle/InstallFixtures/ORM/GrapesJsData.php", "/app/docroot/app/bundles/InstallBundle/InstallFixtures/ORM/GrapesJsData.php");
    }
}
