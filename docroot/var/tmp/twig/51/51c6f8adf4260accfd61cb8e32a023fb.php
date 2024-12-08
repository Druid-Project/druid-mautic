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

/* @bundles/InstallBundle/Configurator/Step/UserStep.php */
class __TwigTemplate_dbb4e088c7d9caf8afaf0408083d242c extends Template
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

namespace Mautic\\InstallBundle\\Configurator\\Step;

use Mautic\\CoreBundle\\Configurator\\Step\\StepInterface;
use Mautic\\InstallBundle\\Configurator\\Form\\UserStepType;

class UserStep implements StepInterface
{
    /**
     * User's first name.
     */
    public \$firstname;

    /**
     * User's last name.
     */
    public \$lastname;

    /**
     * User's e-mail address.
     */
    public \$email;

    /**
     * User's username.
     */
    public \$username;

    /**
     * User's password.
     */
    public \$password;

    public function getFormType(): string
    {
        return UserStepType::class;
    }

    public function checkRequirements(): array
    {
        return [];
    }

    public function checkOptionalSettings(): array
    {
        return [];
    }

    public function getTemplate(): string
    {
        return '@MauticInstall/Install/user.html.twig';
    }

    public function update(StepInterface \$data): array
    {
        return [];
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
        return "@bundles/InstallBundle/Configurator/Step/UserStep.php";
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
        return new Source("", "@bundles/InstallBundle/Configurator/Step/UserStep.php", "/app/docroot/app/bundles/InstallBundle/Configurator/Step/UserStep.php");
    }
}
