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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapper.php */
class __TwigTemplate_74c119e3ae95011bcd8d2bd85e92b670 extends Template
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

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\CategoryNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Type;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\Category as CategoryObject;

class CategoryMapper
{
    /**
     * @var array
     */
    protected static \$mappings = [
        Category::ANTISPAM       => ['permanent' => false, 'bounce_type' => Type::BLOCKED],
        Category::AUTOREPLY      => ['permanent' => false, 'bounce_type' => Type::AUTOREPLY],
        Category::CONCURRENT     => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::CONTENT_REJECT => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::COMMAND_REJECT => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::INTERNAL_ERROR => ['permanent' => false, 'bounce_type' => Type::TEMPORARY],
        Category::DEFER          => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::DELAYED        => ['permanent' => false, 'bounce_type' => Type::TEMPORARY],
        Category::DNS_LOOP       => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::DNS_UNKNOWN    => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::FULL           => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::INACTIVE       => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::LATIN_ONLY     => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::OTHER          => ['permanent' => true, 'bounce_type' => Type::GENERIC],
        Category::OVERSIZE       => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::OUTOFOFFICE    => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::UNKNOWN        => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::UNRECOGNIZED   => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::USER_REJECT    => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::WARNING        => ['permanent' => false, 'bounce_type' => Type::SOFT],
    ];

    /**
     * @throws CategoryNotFound
     */
    public static function map(\$category): CategoryObject
    {
        if (!isset(static::\$mappings[\$category])) {
            throw new CategoryNotFound();
        }

        \$mapping = static::\$mappings[\$category];

        return new CategoryObject(\$category, \$mapping['bounce_type'], \$mapping['permanent']);
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapper.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapper.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapper.php");
    }
}
