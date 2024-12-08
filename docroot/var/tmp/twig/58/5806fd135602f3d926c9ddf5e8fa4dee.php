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

/* @bundles/LeadBundle/Tests/EventListener/EmailSubscriberTest.php */
class __TwigTemplate_b756c855d7d872c0aa68b6d33427a372 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\CoreBundle\\Helper\\BuilderTokenHelperFactory;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\EventListener\\EmailSubscriber;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class EmailSubscriberTest extends TestCase
{
    /**
     * @dataProvider onEmailAddressReplacementProvider
     */
    public function testOnEmailAddressReplacement(string \$value, string \$expected): void
    {
        \$contact = new Lead();
        \$contact->setFields(['email2' => 'contact.a@email.address']);

        \$event           = new TokenReplacementEvent(\$value, \$contact);
        \$emailSubscriber = new EmailSubscriber(
            new class() extends BuilderTokenHelperFactory {
                public function __construct()
                {
                }
            }
        );

        \$emailSubscriber->onEmailAddressReplacement(\$event);

        Assert::assertSame(\$expected, \$event->getContent());
    }

    /**
     * @return \\Generator<string[]>
     */
    public static function onEmailAddressReplacementProvider(): \\Generator
    {
        yield ['{contactfield=unicorn}', ''];
        yield ['{contactfield=unicorn|default@value.email}', 'default@value.email'];
        yield ['{contactfield=email2}', 'contact.a@email.address'];
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
        return "@bundles/LeadBundle/Tests/EventListener/EmailSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/EmailSubscriberTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/EmailSubscriberTest.php");
    }
}
