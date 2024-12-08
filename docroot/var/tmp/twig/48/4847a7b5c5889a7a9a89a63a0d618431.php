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

/* @bundles/CoreBundle/Doctrine/Connection/PrimaryReadReplicaConnectionWrapper.php */
class __TwigTemplate_f00e29fb33669bdbd08b2b9094ee29cc extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Doctrine\\Connection;

use Doctrine\\DBAL\\Connections\\PrimaryReadReplicaConnection;
use Doctrine\\DBAL\\Exception;

class PrimaryReadReplicaConnectionWrapper extends PrimaryReadReplicaConnection
{
    /**
     * @param array<string, string> \$dbParams
     *
     * @throws Exception
     */
    public function initConnection(array \$dbParams): void
    {
        \$params = \$this->getParams();

        if (\$this->isConnected()) {
            \$this->close();
        }

        \$params['host']     = \$dbParams['host'];
        \$params['port']     = (int) \$dbParams['port'];
        \$params['dbname']   = \$dbParams['name'];
        \$params['user']     = \$dbParams['user'];
        \$params['password'] = \$dbParams['password'];
        \$this->__construct(\$params, \$this->_driver, \$this->_config, \$this->_eventManager);
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
        return "@bundles/CoreBundle/Doctrine/Connection/PrimaryReadReplicaConnectionWrapper.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Connection/PrimaryReadReplicaConnectionWrapper.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Connection/PrimaryReadReplicaConnectionWrapper.php");
    }
}
