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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/Category.php */
class __TwigTemplate_45861d5c57025be437aac3bee5bc6934 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper;

class Category
{
    /**
     * @param string \$category
     * @param string \$type
     * @param bool   \$isPermanent
     */
    public function __construct(
        private \$category,
        private \$type,
        private \$isPermanent
    ) {
        return \$this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return bool
     */
    public function isPermanent()
    {
        return \$this->isPermanent;
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/Category.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/Category.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/Category.php");
    }
}
