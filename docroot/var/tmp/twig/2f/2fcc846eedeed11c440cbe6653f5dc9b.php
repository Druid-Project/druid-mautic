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

/* @bundles/CoreBundle/Test/IsolatedTestTrait.php */
class __TwigTemplate_532fcbb01349d566713d4d846e5a5052 extends Template
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

namespace Mautic\\CoreBundle\\Test;

trait IsolatedTestTrait
{
    /**
     * Ensure the MAUTIC_TABLE_PREFIX const is correctly set in isolated tests.
     *
     * Those test runs don't get the constant set in MauticExtension::executeBeforeFirstTest(), so we need to redefine it.
     */
    public static function setUpBeforeClass(): void
    {
        if (!defined('MAUTIC_TABLE_PREFIX')) {
            EnvLoader::load();
            \$prefix = false === getenv('MAUTIC_DB_PREFIX') ? 'test_' : getenv('MAUTIC_DB_PREFIX');
            define('MAUTIC_TABLE_PREFIX', \$prefix);
        }
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
        return "@bundles/CoreBundle/Test/IsolatedTestTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Test/IsolatedTestTrait.php", "/app/docroot/app/bundles/CoreBundle/Test/IsolatedTestTrait.php");
    }
}
