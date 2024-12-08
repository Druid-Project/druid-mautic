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

/* @bundles/StageBundle/Security/Permissions/StagePermissions.php */
class __TwigTemplate_b76ade0037c0b9d25b6918ab9822d005 extends Template
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

namespace Mautic\\StageBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

class StagePermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);

        \$this->addStandardPermissions('stages');
        \$this->addStandardPermissions('categories');
    }

    public function getName(): string
    {
        return 'stage';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields('stage', 'categories', \$builder, \$data);
        \$this->addStandardFormFields('stage', 'stages', \$builder, \$data);
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
        return "@bundles/StageBundle/Security/Permissions/StagePermissions.php";
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
        return new Source("", "@bundles/StageBundle/Security/Permissions/StagePermissions.php", "/app/docroot/app/bundles/StageBundle/Security/Permissions/StagePermissions.php");
    }
}
