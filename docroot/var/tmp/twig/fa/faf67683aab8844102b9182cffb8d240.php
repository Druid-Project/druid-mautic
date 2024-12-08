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

/* @bundles/EmailBundle/Security/Permissions/EmailPermissions.php */
class __TwigTemplate_9374cea84eadb2eb00928cac9542e8e2 extends Template
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

namespace Mautic\\EmailBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

class EmailPermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->addStandardPermissions('categories');
        \$this->addExtendedPermissions('emails');
    }

    public function getName(): string
    {
        return 'email';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields('email', 'categories', \$builder, \$data);
        \$this->addExtendedFormFields('email', 'emails', \$builder, \$data);
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
        return "@bundles/EmailBundle/Security/Permissions/EmailPermissions.php";
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
        return new Source("", "@bundles/EmailBundle/Security/Permissions/EmailPermissions.php", "/app/docroot/app/bundles/EmailBundle/Security/Permissions/EmailPermissions.php");
    }
}
