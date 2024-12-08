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

/* @bundles/PluginBundle/Tests/Entity/PluginTest.php */
class __TwigTemplate_ec3fede4c13909a4d96d23923414183f extends Template
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

namespace Mautic\\PluginBundle\\Tests\\Entity;

use Mautic\\PluginBundle\\Entity\\Plugin;

class PluginTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEmptyDescription(): void
    {
        \$plugin = new Plugin();
        \$this->assertNull(\$plugin->getDescription());
        \$this->assertNull(\$plugin->getPrimaryDescription());
        \$this->assertNull(\$plugin->getSecondaryDescription());
        \$this->assertFalse(\$plugin->hasSecondaryDescription());
    }

    public function testSimpleDescription(): void
    {
        \$description = 'This is the best plugin in the whole galaxy';
        \$plugin      = new Plugin();
        \$plugin->setDescription(\$description);
        \$this->assertEquals(\$description, \$plugin->getDescription());
        \$this->assertEquals(\$description, \$plugin->getPrimaryDescription());
        \$this->assertNull(\$plugin->getSecondaryDescription());
        \$this->assertFalse(\$plugin->hasSecondaryDescription());
    }

    public function testSecondaryDescriptionWithUnixLineEnding(): void
    {
        \$description = \"This is the best plugin in the whole galaxy\\n---\\nLearn more about it <a href=\\\"#\\\">here</a>\";
        \$plugin      = new Plugin();
        \$plugin->setDescription(\$description);
        \$this->assertEquals(\$description, \$plugin->getDescription());
        \$this->assertEquals('This is the best plugin in the whole galaxy', \$plugin->getPrimaryDescription());
        \$this->assertEquals('Learn more about it <a href=\"#\">here</a>', \$plugin->getSecondaryDescription());
        \$this->assertTrue(\$plugin->hasSecondaryDescription());
    }

    public function testSecondaryDescriptionWithWinLineEnding(): void
    {
        \$description = \"This is the best plugin in the whole galaxy\\n\\r---\\n\\rLearn more about it <a href=\\\"#\\\">here</a>\";
        \$plugin      = new Plugin();
        \$plugin->setDescription(\$description);
        \$this->assertEquals(\$description, \$plugin->getDescription());
        \$this->assertEquals('This is the best plugin in the whole galaxy', \$plugin->getPrimaryDescription());
        \$this->assertEquals('Learn more about it <a href=\"#\">here</a>', \$plugin->getSecondaryDescription());
        \$this->assertTrue(\$plugin->hasSecondaryDescription());
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
        return "@bundles/PluginBundle/Tests/Entity/PluginTest.php";
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
        return new Source("", "@bundles/PluginBundle/Tests/Entity/PluginTest.php", "/app/docroot/app/bundles/PluginBundle/Tests/Entity/PluginTest.php");
    }
}
