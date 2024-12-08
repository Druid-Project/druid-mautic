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

/* @bundles/LeadBundle/Tests/Entity/TagTest.php */
class __TwigTemplate_87a3d7d011a1238e81c9c5954b72119c extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\Tag;

class TagTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSetTagByConstructor(): void
    {
        \$entity = new Tag('tagA');

        \$this->assertSame('tagA', \$entity->getTag());
    }

    public function testSetTagBySetter(): void
    {
        \$entity = new Tag();
        \$entity->setTag('tagA');

        \$this->assertSame('tagA', \$entity->getTag());
    }

    public function testTagValidation(): void
    {
        \$sampleTags = [
            'hello world'        => 'hello world',
            'hello\" world'       => 'hello\" world',
            'trim whitespace'    => ' trim whitespace ',
            'trim tab'           => \"\\ttrim tab\\t\",
            'console.log(hello)' => '<script>console.log(hello)</script>',
            'oěř§ůú.'            => 'oěř§ůú.',
        ];

        foreach (\$sampleTags as \$expected => \$tag) {
            \$entity = new Tag(\$tag);
            \$this->assertSame(\$expected, \$entity->getTag());
        }
    }

    public function testDisabledValidation(): void
    {
        \$sampleTags = [
            'hello world'      => 'hello world',
            'hello&#34; world' => 'hello&#34; world',
            'oěř§ůú.'          => 'oěř§ůú.',
        ];

        foreach (\$sampleTags as \$expected => \$tag) {
            \$entity = new Tag(\$tag, false);
            \$this->assertSame(\$expected, \$entity->getTag());
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
        return "@bundles/LeadBundle/Tests/Entity/TagTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/TagTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/TagTest.php");
    }
}
