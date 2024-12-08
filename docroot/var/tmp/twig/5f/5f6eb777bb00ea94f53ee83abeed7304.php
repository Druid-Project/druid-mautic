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

/* @bundles/WebhookBundle/Tests/Unit/Entity/LogTest.php */
class __TwigTemplate_a0bd540b957387968b4fe2ab1109851a extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\Entity;

use Mautic\\WebhookBundle\\Entity\\Log;

class LogTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSetNote(): void
    {
        \$log = new Log();
        \$log->setNote(\"\\x6d\\x61\\x75\\x74\\x69\\x63\");
        \$this->assertSame('mautic', \$log->getNote());

        \$log->setNote(\"\\x57\\xfc\\x72\\x74\\x74\\x65\\x6d\\x62\\x65\\x72\\x67\");  // original string is W�rttemberg, in this '�' is invaliad char so it should be removed
        \$this->assertSame('Wrttemberg', \$log->getNote());

        \$log->setNote('mautic');
        \$this->assertSame('mautic', \$log->getNote());

        \$log->setNote('ěščřžýá');
        \$this->assertSame('ěščřžýá', \$log->getNote());

        \$log->setNote('†º5¶2KfNœã');
        \$this->assertSame('†º5¶2KfNœã', \$log->getNote());
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
        return "@bundles/WebhookBundle/Tests/Unit/Entity/LogTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Unit/Entity/LogTest.php", "/app/docroot/app/bundles/WebhookBundle/Tests/Unit/Entity/LogTest.php");
    }
}
