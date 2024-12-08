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

/* @bundles/SmsBundle/Security/Permissions/SmsPermissions.php */
class __TwigTemplate_3748bd035de9626912fa6deef2e4c168 extends Template
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

namespace Mautic\\SmsBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

class SmsPermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->addStandardPermissions('categories');
        \$this->addExtendedPermissions('smses');
    }

    public function getName(): string
    {
        return 'sms';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields('sms', 'categories', \$builder, \$data);
        \$this->addExtendedFormFields('sms', 'smses', \$builder, \$data);
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
        return "@bundles/SmsBundle/Security/Permissions/SmsPermissions.php";
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
        return new Source("", "@bundles/SmsBundle/Security/Permissions/SmsPermissions.php", "/app/docroot/app/bundles/SmsBundle/Security/Permissions/SmsPermissions.php");
    }
}
