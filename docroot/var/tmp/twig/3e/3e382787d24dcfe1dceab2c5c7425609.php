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

/* @bundles/CoreBundle/Event/TokenReplacementEvent.php */
class __TwigTemplate_f5d8aebe60e894a810e53ddc9d53d28f extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Entity\\CommonEntity;
use Mautic\\DynamicContentBundle\\Entity\\Stat;
use Mautic\\LeadBundle\\Entity\\Lead;

class TokenReplacementEvent extends CommonEvent
{
    /**
     * @var CommonEntity|string
     */
    protected \$entity;

    /**
     * @var CommonEntity|string|null
     */
    protected \$content;

    /**
     * @var array
     */
    protected \$tokens = [];

    private ?Stat \$stat = null;

    /**
     * @param CommonEntity|string|null \$content
     * @param Lead|mixed[]|null        \$lead
     * @param mixed                    \$passthrough
     */
    public function __construct(
        \$content,
        protected \$lead = null,
        protected array \$clickthrough = [],
        protected \$passthrough = null,
        private bool \$internalSend = false
    ) {
        if (\$content instanceof CommonEntity) {
            \$this->entity = \$content;
        }

        \$this->content      = \$content;
    }

    /**
     * @return CommonEntity|string|null
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @param CommonEntity|string|null \$content
     */
    public function setContent(\$content): void
    {
        \$this->content = \$content;
    }

    /**
     * @return Lead|mixed[]|null
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return mixed[]
     */
    public function getClickthrough()
    {
        if (!in_array('lead', \$this->clickthrough)) {
            if (is_array(\$this->lead) && !empty(\$this->lead['id'])) {
                \$this->clickthrough['lead'] = \$this->lead['id'];
            } elseif (\$this->lead instanceof Lead && \$this->lead->getId()) {
                \$this->clickthrough['lead'] = \$this->lead->getId();
            }
        }

        return \$this->clickthrough;
    }

    /**
     * @param mixed[] \$clickthrough
     */
    public function setClickthrough(\$clickthrough): void
    {
        \$this->clickthrough = \$clickthrough;
    }

    /**
     * @return CommonEntity|string
     */
    public function getEntity()
    {
        return \$this->entity;
    }

    public function addToken(\$token, \$value): void
    {
        \$this->tokens[\$token] = \$value;
    }

    /**
     * @return array
     */
    public function getTokens()
    {
        return \$this->tokens;
    }

    /**
     * @return mixed|null
     */
    public function getPassthrough()
    {
        return \$this->passthrough;
    }

    public function getStat(): ?Stat
    {
        return \$this->stat;
    }

    public function setStat(?Stat \$stat): void
    {
        \$this->stat = \$stat;
    }

    public function isInternalSend(): bool
    {
        return \$this->internalSend;
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
        return "@bundles/CoreBundle/Event/TokenReplacementEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/TokenReplacementEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/TokenReplacementEvent.php");
    }
}
