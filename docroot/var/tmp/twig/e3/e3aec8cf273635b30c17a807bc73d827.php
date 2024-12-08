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

/* @bundles/UserBundle/Translations/en_US/validators.ini */
class __TwigTemplate_fcb086d1227e4a0b80d268ce685bc9b5 extends Template
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
        yield "mautic.user.user.email.unique=\"Email is already in use. Please choose another.\"
mautic.user.user.email.valid=\"The email entered is invalid.\"
mautic.user.user.firstname.notblank=\"First name is required.\"
mautic.user.user.lastname.notblank=\"Last name is required.\"
mautic.user.user.password.minlength=\"Password must be at least 6 characters.\"
mautic.user.user.password.mismatch=\"Passwords do not match.\"
mautic.user.user.password.notblank=\"Password cannot be blank.\"
mautic.user.user.passwordreset.notblank=\"A username or email is required to reset your password.\"
mautic.user.user.password.weak=\"Please enter a stronger password. Your password must use a combination of upper and lower case, special characters and numbers.\"
mautic.user.user.role.notblank=\"A role must be chosen for this user.\"
mautic.user.user.username.notblank=\"Username is required.\"
mautic.user.user.username.unique=\"Username is already in use. Please choose another.\"
mautic.user.saml.certificate.invalid=\"Certificate is invalid. It should begin with <pre>-----BEGIN CERTIFICATE-----</pre>.\"
mautic.user.saml.private_key.invalid=\"Private key is invalid. It should begin with <pre>-----BEGIN RSA PRIVATE KEY-----</pre> or <pre>-----BEGIN ENCRYPTED PRIVATE KEY-----</pre>.\"
mautic.user.saml.private_key.password_needed=\"The private key provided is encrypted and thus requires a password to decrypt.\"
mautic.user.saml.private_key.password_invalid=\"The password was not able to decrypt the private key.\"
mautic.user.saml.metadata.invalid=\"The metadata file seems to be invalid.\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/UserBundle/Translations/en_US/validators.ini", "/app/docroot/app/bundles/UserBundle/Translations/en_US/validators.ini");
    }
}
