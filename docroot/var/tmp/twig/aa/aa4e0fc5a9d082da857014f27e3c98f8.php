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

/* @bundles/CoreBundle/Doctrine/Loader/MauticFixturesLoader.php */
class __TwigTemplate_97173d19855701dc809ec6adfe77d731 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Loader;

use Doctrine\\Bundle\\FixturesBundle\\Loader\\SymfonyFixturesLoader;

/**
 * The sole purpose of this class is to make SymfonyFixturesLoader mockable.
 */
final class MauticFixturesLoader implements FixturesLoaderInterface
{
    public function __construct(
        private SymfonyFixturesLoader \$fixturesLoader
    ) {
    }

    public function getFixtures(array \$groups = []): array
    {
        return \$this->fixturesLoader->getFixtures(\$groups);
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
        return "@bundles/CoreBundle/Doctrine/Loader/MauticFixturesLoader.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Loader/MauticFixturesLoader.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Loader/MauticFixturesLoader.php");
    }
}
