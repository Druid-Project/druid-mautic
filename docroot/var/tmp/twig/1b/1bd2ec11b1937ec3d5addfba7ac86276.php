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

/* @bundles/LeadBundle/Tests/Entity/DoNotContactTest.php */
class __TwigTemplate_65502462ab53525eb3a9d399565c9abe extends Template
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

use Mautic\\LeadBundle\\Entity\\DoNotContact;

class DoNotContactTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testDoNotContactComments(): void
    {
        \$doNotContact = new DoNotContact();
        \$doNotContact->setComments(null);
        \$this->assertSame('', \$doNotContact->getComments());

        \$comment      = '<script>alert(\\'x\\')</script>';
        \$doNotContact->setComments(\$comment);
        \$this->assertNotSame(\$comment, \$doNotContact->getComments());
        \$this->assertSame('alert(\\'x\\')', \$doNotContact->getComments());
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
        return "@bundles/LeadBundle/Tests/Entity/DoNotContactTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/DoNotContactTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/DoNotContactTest.php");
    }
}
