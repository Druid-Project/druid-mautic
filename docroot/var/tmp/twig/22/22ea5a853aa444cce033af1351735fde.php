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

/* @bundles/DynamicContentBundle/Security/Permissions/DynamicContentPermissions.php */
class __TwigTemplate_29b003ba62a23b47a2b4c7405daf800a extends Template
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

namespace Mautic\\DynamicContentBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

class DynamicContentPermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);

        \$this->addStandardPermissions('categories');
        \$this->addExtendedPermissions('dynamiccontents');
    }

    public function getName(): string
    {
        return 'dynamiccontent';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields('dynamiccontent', 'categories', \$builder, \$data);
        \$this->addExtendedFormFields('dynamiccontent', 'dynamiccontents', \$builder, \$data);
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
        return "@bundles/DynamicContentBundle/Security/Permissions/DynamicContentPermissions.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Security/Permissions/DynamicContentPermissions.php", "/app/docroot/app/bundles/DynamicContentBundle/Security/Permissions/DynamicContentPermissions.php");
    }
}
