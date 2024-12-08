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

/* @bundles/ChannelBundle/Tests/Entity/MessageTest.php */
class __TwigTemplate_778ccfaf29f9e7fa246426d6ced283b4 extends Template
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

namespace Mautic\\ChannelBundle\\Tests\\Entity;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\ChannelBundle\\Entity\\Message;
use PHPUnit\\Framework\\TestCase;

class MessageTest extends TestCase
{
    public function testMessageUpdatesReflectsInChanges(): void
    {
        \$category = new Category();
        \$category->setTitle('New Category');
        \$category->setAlias('category');
        \$category->setBundle('bundle');

        \$message = new Message();
        \$message->setName('New Message');
        \$message->setDescription('random text string for description');
        \$message->setCategory(\$category);
        \$message->setPublishDown(new \\DateTime());
        \$message->setPublishUp(new \\DateTime());

        \$this->assertIsArray(\$message->getChanges());
        \$this->assertNotEmpty(\$message->getChanges());
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
        return "@bundles/ChannelBundle/Tests/Entity/MessageTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/Entity/MessageTest.php", "/app/docroot/app/bundles/ChannelBundle/Tests/Entity/MessageTest.php");
    }
}
