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

/* @bundles/UserBundle/Entity/IdEntry.php */
class __TwigTemplate_678d549656fed407995a4a1ef400d619 extends Template
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

namespace Mautic\\UserBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

#[ORM\\Entity]
class IdEntry
{
    /**
     * @var string
     */
    protected \$id;

    /**
     * @var string
     */
    protected \$entityId;

    /**
     * @var int
     */
    protected \$expiryTimestamp;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('saml_id_entry');

        \$builder->createField('id', 'string')
             ->makePrimaryKey()
             ->generatedValue('NONE')
             ->build();

        \$builder->createField('entityId', 'string')
            ->columnName('entity_id')
            ->makePrimaryKey()
            ->generatedValue('NONE')
            ->build();

        \$builder->createField('expiryTimestamp', 'integer')
            ->build();
    }

    /**
     * @return string
     */
    public function getEntityId()
    {
        return \$this->entityId;
    }

    /**
     * @param string \$entityId
     *
     * @return IdEntry
     */
    public function setEntityId(\$entityId)
    {
        \$this->entityId = \$entityId;

        return \$this;
    }

    public function getExpiryTime(): \\DateTime
    {
        \$dt = new \\DateTime();
        \$dt->setTimestamp(\$this->expiryTimestamp);

        return \$dt;
    }

    /**
     * @return IdEntry
     */
    public function setExpiryTime(\\DateTime \$expiryTime)
    {
        \$this->expiryTimestamp = \$expiryTime->getTimestamp();

        return \$this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param string \$id
     *
     * @return IdEntry
     */
    public function setId(\$id)
    {
        \$this->id =  \$id;

        return \$this;
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
        return "@bundles/UserBundle/Entity/IdEntry.php";
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
        return new Source("", "@bundles/UserBundle/Entity/IdEntry.php", "/app/docroot/app/bundles/UserBundle/Entity/IdEntry.php");
    }
}
