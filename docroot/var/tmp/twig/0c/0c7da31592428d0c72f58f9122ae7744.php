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

/* @bundles/EmailBundle/Helper/EmailValidator.php */
class __TwigTemplate_d17ce7f6b9463c074cea3bac4f8f98a7 extends Template
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

namespace Mautic\\EmailBundle\\Helper;

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailValidationEvent;
use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class EmailValidator
{
    public function __construct(
        protected TranslatorInterface \$translator,
        protected EventDispatcherInterface \$dispatcher
    ) {
    }

    /**
     * Validate that an email is the correct format, doesn't have invalid characters, a MX record is associated with the domain, and
     * leverage integrations to validate.
     *
     * @param bool \$doDnsCheck
     *
     * @throws UnexpectedValueException
     * @throws InvalidEmailException
     */
    public function validate(\$address, \$doDnsCheck = false): void
    {
        if (!is_string(\$address)) {
            throw new UnexpectedValueException(\$address, 'string');
        }

        if (!\$this->isValidFormat(\$address)) {
            throw new InvalidEmailException(\$address, \$this->translator->trans('mautic.email.address.invalid_format', ['%email%' => \$address ?: '?']));
        }

        if (\$this->hasValidCharacters(\$address)) {
            throw new InvalidEmailException(\$address, \$this->translator->trans('mautic.email.address.invalid_characters', ['%email%' => \$address]));
        }

        if (\$doDnsCheck && !\$this->hasValidDomain(\$address)) {
            throw new InvalidEmailException(\$address, \$this->translator->trans('mautic.email.address.invalid_domain', ['%email%' => \$address]));
        }

        \$this->doPluginValidation(\$address);
    }

    /**
     * Validates that email is in an acceptable format.
     *
     * @returns bool
     */
    public function isValidFormat(\$address): bool
    {
        return !empty(\$address) && filter_var(\$address, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Validates that email does not have invalid characters.
     *
     * @returns bool
     */
    public function hasValidCharacters(\$address)
    {
        \$invalidChar = strpbrk(\$address, '^&*%');

        return \$invalidChar ? substr(\$invalidChar, 0, 1) : \$invalidChar;
    }

    /**
     * Validates if the domain of an email.
     *
     * @returns bool
     */
    public function hasValidDomain(\$address): bool
    {
        [\$user, \$domain] = explode('@', \$address);

        return checkdnsrr(\$domain, 'MX');
    }

    /**
     * Validate using 3rd party integrations.
     *
     * @throws InvalidEmailException
     */
    public function doPluginValidation(\$address): void
    {
        \$event = \$this->dispatcher->dispatch(
            new EmailValidationEvent(\$address),
            EmailEvents::ON_EMAIL_VALIDATION
        );

        if (!\$event->isValid()) {
            throw new InvalidEmailException(\$address, \$event->getInvalidReason());
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
        return "@bundles/EmailBundle/Helper/EmailValidator.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/EmailValidator.php", "/app/docroot/app/bundles/EmailBundle/Helper/EmailValidator.php");
    }
}
