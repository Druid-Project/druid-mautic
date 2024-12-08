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

/* @bundles/EmailBundle/Entity/Copy.php */
class __TwigTemplate_7e8e9c36048f2860c5dcfbcd53e4d961 extends Template
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

namespace Mautic\\EmailBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class Copy
{
    /**
     * MD5 hash of the content.
     *
     * @var string
     */
    private \$id;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateCreated;

    /**
     * @var string|null
     */
    private \$body;

    private ?string \$bodyText = null;

    /**
     * @var string|null
     */
    private \$subject;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('email_copies')
            ->setCustomRepositoryClass(CopyRepository::class);

        \$builder->createField('id', 'string')
            ->makePrimaryKey()
            ->length(32)
            ->build();

        \$builder->createField('dateCreated', 'datetime')
            ->columnName('date_created')
            ->build();

        \$builder->addNullableField('body', 'text');
        \$builder->addNullableField('bodyText', 'text', 'body_text');

        \$builder->addNullableField('subject', 'text');
    }

    /**
     * @return \$this
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateCreated()
    {
        return \$this->dateCreated;
    }

    /**
     * @param \\DateTime \$dateCreated
     *
     * @return Copy
     */
    public function setDateCreated(\$dateCreated)
    {
        \$this->dateCreated = \$dateCreated;

        return \$this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return \$this->body;
    }

    /**
     * @param string \$body
     *
     * @return Copy
     */
    public function setBody(\$body)
    {
        \$this->body = \$body;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return \$this->subject;
    }

    /**
     * @param mixed \$subject
     *
     * @return Copy
     */
    public function setSubject(\$subject)
    {
        \$this->subject = \$subject;

        return \$this;
    }

    public function getBodyText(): ?string
    {
        return \$this->bodyText;
    }

    public function setBodyText(?string \$bodyText): self
    {
        \$this->bodyText = \$bodyText;

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
        return "@bundles/EmailBundle/Entity/Copy.php";
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
        return new Source("", "@bundles/EmailBundle/Entity/Copy.php", "/app/docroot/app/bundles/EmailBundle/Entity/Copy.php");
    }
}
