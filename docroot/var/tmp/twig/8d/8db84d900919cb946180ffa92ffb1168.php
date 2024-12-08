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

/* @bundles/CoreBundle/Entity/UuidTrait.php */
class __TwigTemplate_bc9243a2e3b6fb21f0355668ae9fea08 extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Doctrine\\DBAL\\Types\\Types;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Symfony\\Component\\Serializer\\Annotation\\Groups;

trait UuidTrait
{
    #[Groups(['category:read', 'category:write', 'notification:read', 'notification:write', 'company:read', 'company:write', 'leadfield:read', 'leadfield:write', 'page:read', 'page:write', 'campaign:read', 'campaign:write', 'point:read', 'point:write', 'trigger:read', 'trigger:write', 'message:read', 'message:write', 'focus:read', 'focus:write', 'sms:read', 'sms:write', 'asset:read', 'asset:write', 'dynamicContent:read', 'dynamicContent:write', 'form:read', 'form:write', 'stage:read', 'stage:write', 'segment:read', 'segment:write', 'email:read', 'email:write'])]
    private ?string \$uuid = null;

    public static function addUuidField(ClassMetadataBuilder \$builder): void
    {
        \$builder->createField('uuid', Types::GUID)
            ->nullable()
            ->build();
    }

    public function getUuid(): ?string
    {
        return \$this->uuid;
    }

    public function setUuid(string \$uuid): void
    {
        \$this->uuid = \$uuid;
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
        return "@bundles/CoreBundle/Entity/UuidTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/UuidTrait.php", "/app/docroot/app/bundles/CoreBundle/Entity/UuidTrait.php");
    }
}
