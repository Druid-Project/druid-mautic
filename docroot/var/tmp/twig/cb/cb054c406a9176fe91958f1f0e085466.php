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

/* @bundles/CoreBundle/Helper/BuilderTokenHelperFactory.php */
class __TwigTemplate_5b78da0dda520432ab4017a9a85bd27d extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;

class BuilderTokenHelperFactory
{
    /**
     * @param ModelFactory<object> \$modelFactory
     */
    public function __construct(
        private CorePermissions \$security,
        private ModelFactory \$modelFactory,
        private Connection \$connection,
        private UserHelper \$userHelper
    ) {
    }

    public function getBuilderTokenHelper(
        string \$modelName,
        ?string \$viewPermissionBase = null,
        ?string \$bundleName = null,
        ?string \$langVar = null
    ): BuilderTokenHelper {
        \$builderTokenHelper = new BuilderTokenHelper(\$this->security, \$this->modelFactory, \$this->connection, \$this->userHelper);
        \$builderTokenHelper->configure(\$modelName, \$viewPermissionBase, \$bundleName, \$langVar);

        return \$builderTokenHelper;
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
        return "@bundles/CoreBundle/Helper/BuilderTokenHelperFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/BuilderTokenHelperFactory.php", "/app/docroot/app/bundles/CoreBundle/Helper/BuilderTokenHelperFactory.php");
    }
}
