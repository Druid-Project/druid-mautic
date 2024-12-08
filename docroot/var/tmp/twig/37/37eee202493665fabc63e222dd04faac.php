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

/* @bundles/EmailBundle/Tests/Entity/EmailTest.php */
class __TwigTemplate_b87da9916db6238edad7c562fa09a220 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Entity;

use Mautic\\EmailBundle\\Entity\\Email;
use PHPUnit\\Framework\\TestCase;

class EmailTest extends TestCase
{
    public function testCloneResetPublishDates(): void
    {
        \$email = new Email();
        \$email->setPublishUp(new \\DateTime());
        \$email->setPublishDown(new \\DateTime());
        \$emailClone = clone \$email;
        \$this->assertNull(\$emailClone->getPublishUp());
        \$this->assertNull(\$emailClone->getPublishDown());
    }

    public function testCloneResetPlainText(): void
    {
        \$email = new Email();
        \$email->setPlainText('foo');
        \$emailClone = clone \$email;
        \$this->assertNull(\$emailClone->getPlainText());
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
        return "@bundles/EmailBundle/Tests/Entity/EmailTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Entity/EmailTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Entity/EmailTest.php");
    }
}
