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

/* @bundles/EmailBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_b238c55a3fdddf8330be35878523a8e4 extends Template
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
        yield "mautic.email.error.list_type.sent=\"Once a list email has been sent, it cannot be edited. Consider cloning the email.\"
mautic.email.error.notfound=\"No email with an id of %id% was found!\"
mautic.email.error.send.unpublished=\"The email %name% is unavailable, the availability dates are off or the email category is unavailable. You cannot send this email until available.\"
mautic.email.notice.activated=\"<a href='%url%' data-toggle='ajax' data-menu-link='mautic_email_index'><strong>%name%</strong></a> is now active as the main email!\"
mautic.email.notice.batch_deleted=\"%count% emails have been deleted!\"
mautic.email.notice.test_sent.success=\"A test email has been sent to your email.\"
mautic.email.notice.test_sent_multiple.success = \"Test emails have been sent.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/EmailBundle/Translations/en_US/flashes.ini", "/app/docroot/app/bundles/EmailBundle/Translations/en_US/flashes.ini");
    }
}
