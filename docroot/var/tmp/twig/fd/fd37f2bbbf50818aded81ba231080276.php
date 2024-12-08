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

/* @bundles/EmailBundle/MonitoredEmail/Accessor/ConfigAccessor.php */
class __TwigTemplate_82051e86665706621f4504f2f5c37e97 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Accessor;

class ConfigAccessor
{
    /**
     * @param mixed[] \$config
     */
    public function __construct(
        private array \$config
    ) {
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return \$this->getProperty('imap_path');
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return \$this->getProperty('user');
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return \$this->getProperty('host');
    }

    /**
     * @return string
     */
    public function getFolder()
    {
        return \$this->getProperty('folder');
    }

    public function getKey(): string
    {
        return \$this->getPath().'_'.\$this->getUser();
    }

    public function isConfigured(): bool
    {
        return \$this->getHost() && \$this->getFolder();
    }

    /**
     * @return string|null
     */
    protected function getProperty(\$property)
    {
        return \$this->config[\$property] ?? null;
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
        return "@bundles/EmailBundle/MonitoredEmail/Accessor/ConfigAccessor.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Accessor/ConfigAccessor.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Accessor/ConfigAccessor.php");
    }
}
