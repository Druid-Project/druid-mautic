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

/* @bundles/AssetBundle/DataFixtures/ORM/LoadAssetData.php */
class __TwigTemplate_c3e88f35d470f72f779af35f0c13704d extends Template
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

namespace Mautic\\AssetBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\AssetBundle\\Entity\\Asset;

class LoadAssetData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        \$asset = new Asset();
        \$asset
            ->setTitle('@TOCHANGE: Asset1 Title')
            ->setAlias('asset1')
            ->setOriginalFileName('@TOCHANGE: Asset1 Original File Name')
            ->setPath('fdb8e28357b02d12d068de3e5661832e21bc08ec.doc')
            ->setDownloadCount(1)
            ->setUniqueDownloadCount(1)
            ->setRevision(1)
            ->setLanguage('en');

        \$manager->persist(\$asset);
        \$manager->flush();
    }

    public function getOrder(): int
    {
        return 10;
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
        return "@bundles/AssetBundle/DataFixtures/ORM/LoadAssetData.php";
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
        return new Source("", "@bundles/AssetBundle/DataFixtures/ORM/LoadAssetData.php", "/app/docroot/app/bundles/AssetBundle/DataFixtures/ORM/LoadAssetData.php");
    }
}
