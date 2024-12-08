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

/* @bundles/UserBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_c740a9c15d41fc4ceaabea6e17b70197 extends Template
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
        yield "mautic.user.account.notice.updated=\"Your account has been updated.\"
mautic.user.auth.error.disabledaccount=\"Your account has been disabled. Please contact the site administrator.\"
mautic.user.auth.error.invalidlogin=\"Invalid login. Please verify credentials.\"
mautic.user.role.error.deletenotallowed=\"%name% cannot be deleted because it still has users assigned to it.\"
mautic.user.role.error.notfound=\"Role not found with an ID of <strong>%id%</strong>.\"
mautic.user.role.notice.batch_deleted=\"%count% roles have been deleted!\"
mautic.user.user.error.cannotdeleteself=\"You cannot delete yourself.\"
mautic.user.user.error.notfound=\"User not found with an ID of <strong>%id%</strong>.\"
mautic.user.auth.error.weakpassword=\"Your password is too weak. Please reset it.\"
mautic.user.user.notice.batch_deleted=\"%count% users have been deleted!\"
mautic.user.user.notice.messagesent=\"Your message to %name% has been sent.\"
mautic.user.user.notice.passwordreset=\"A new password has been generated and will be emailed to you, if this user exists. If you do not receive it within a few minutes, check your spam box and/or contact the system administrator.\"
mautic.user.user.notice.passwordreset.success=\"If this user exists, you have successfully reset your password. You may now login.\"
mautic.user.user.notice.passwordreset.error=\"We encountered an unexpected error while sending the password reset instructions to your email. Please try again later.\"
mautic.user.user.notice.passwordreset.missingtoken=\"Your reset request is missing the security token. Please click the link in your email.\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/UserBundle/Translations/en_US/flashes.ini", "/app/docroot/app/bundles/UserBundle/Translations/en_US/flashes.ini");
    }
}
