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

/* @bundles/LeadBundle/Tests/Event/ChannelSubscriptionChangeTest.php */
class __TwigTemplate_cddca6e60bb2c42328251694d1a65196 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ChannelSubscriptionChange;

class ChannelSubscriptionChangeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Tests that getters returns same values as the contstruct
     */
    public function testGetterReturnConstruct(): void
    {
        \$lead      = new Lead();
        \$channel   = 'email';
        \$oldStatus = DoNotContact::IS_CONTACTABLE;
        \$newStatus = DoNotContact::UNSUBSCRIBED;

        \$event = new ChannelSubscriptionChange(\$lead, \$channel, \$oldStatus, \$newStatus);

        \$this->assertEquals(\$lead, \$event->getLead());
        \$this->assertEquals(\$channel, \$event->getChannel());
        \$this->assertEquals(\$oldStatus, \$event->getOldStatus());
        \$this->assertEquals(\$newStatus, \$event->getNewStatus());
        \$this->assertEquals('contactable', \$event->getOldStatusVerb());
        \$this->assertEquals('unsubscribed', \$event->getNewStatusVerb());
    }

    /**
     * @testdox Test that the default verb is unsubscribed if not recongized
     */
    public function testGetStatusVerbReturnsUnsubscribedForUnrecognized(): void
    {
        \$lead      = new Lead();
        \$channel   = 'email';
        \$oldStatus = DoNotContact::IS_CONTACTABLE;

        \$event = new ChannelSubscriptionChange(\$lead, \$channel, \$oldStatus, 456);

        \$this->assertEquals('unsubscribed', \$event->getNewStatusVerb());
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
        return "@bundles/LeadBundle/Tests/Event/ChannelSubscriptionChangeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/ChannelSubscriptionChangeTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/ChannelSubscriptionChangeTest.php");
    }
}
